<?php

namespace App\Http\Controllers;

use App\Events\NotificationPublished;
use App\Models\Notification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function publish(Request $request): JsonResponse
    {
        $user = $request->user();
        $validated = $request->validate([
            'type' => 'required|string',
            'message' => 'required|string',
        ]);

        $notification = Notification::create([
            'user_id' => $user->id,
            'type' => $validated['type'],
            'message' => $validated['message'],
            'status' => 'pending',
            'retries' => 0,
        ]);

        event(new NotificationPublished($notification));

        return response()->json([
            'message' => ucfirst($validated['type']) . " notification has been published."
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function updateStatus(Request $request, $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update([
            'status' => $request->input('status'),
            'retries' => $request->input('retries', $notification->retries),
        ]);
        return response()->json(['success' => true]);
    }


}
