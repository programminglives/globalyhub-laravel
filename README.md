<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://static.wixstatic.com/media/5222ff_4e39373370694a619e2b96febe873809~mv2.png/v1/fill/w_200,h_38,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/5222ff_4e39373370694a619e2b96febe873809~mv2.png" width="400" alt="Laravel Logo">
</a>
</p>

## Coding Task (Laravel) for GlobalyHub

Build a Laravel API with the following functionality:
- **Publish Notifications**: Create an endpoint to accept notification requests via POST requests. •
- **Store Notifications**: Save all notification requests in a database. •
- **Queue Integration**: Publish notification messages to a message queue (preferred:
RabbitMQ or Redis Pub/Sub).

## Requirements

### Mandatory
- **Functionality**: Ensure the system is fully functional and handles the end-to-end flow (Laravel
→ Queue → Node.js).
- **Message Queue**: Use RabbitMQ or Redis Pub/Sub for communication between Laravel and
Node.js.
- **Rate Limiting**: Enforce a limit of no more than 10 notifications per user per hour. 
### Nice to have
- **Caching**: Use caching where appropriate.
- **Code Quality**: Follow clean code principles and use a layered architecture
- **Design Patterns**: Apply appropriate design patterns.
- **Extensibility**: Design the system to support future extensions, such as:
  - New message types (e.g., push, email, SMS)
- **Efficiency**: Avoid redundant processing and minimize API response latency.
- **Error Handling**: Implement robust error handling and logging for debugging and
monitoring.

## Submission Instructions

### Code 
- Push both the Laravel and Node.js projects to GitHub (either as a monorepo or separate
repositories).
- Include a README.md file with:
  - Clear setup instructions 
  - Instructions for running the projects
  - Any assumptions made during development.

### Video Explanation
Record a video of your screen and explain (max 15 minutes) covering the following:

- **Project Structure**: Explain the folder structure and architecture of both Laravel and Node.js
projects. 
- **Message Flow**: Describe the end-to-end flow (Laravel → Queue → Node.js).
- **Design Decisions**: Highlight key design choices.
- **Failure Handling**: Explain how failure cases and retries are managed.
- **Caching & Rate Limiting**: Discuss your approach to caching and rate limiting.
- **Assumptions**: Note any assumptions made during development.
