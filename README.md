# Task Management REST API

A RESTful API for managing personal tasks, built with Laravel 11 and MySQL.
Supports authentication, CRUD operations, filtering, searching, and pagination.

## 🌐 Live Demo

**Production URL**: https://task-management-api-6390.onrender.com

> ⚠️ **Note**: First request may take 30-60 seconds (free tier cold start)

### Quick Test Examples

**Register a new user:**
```bash
curl -X POST https://task-management-api-6390.onrender.com/api/register \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Your Name",
    "email": "you@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
  
## Tech Stack

- Laravel 11
- PHP 8.2+
- MySQL
- Laravel Sanctum (Token Authentication)
- Bruno (API Testing)

## Features

- User registration and login
- Token-based authentication with Sanctum
- Create, read, update, delete tasks
- Filter tasks by status and priority
- Search tasks by title or description
- Pagination

## API Endpoints

### Authentication

| Method | Endpoint        | Description           |
|--------|-----------------|-----------------------|
| POST   | /api/register   | Register new user     |
| POST   | /api/login      | Login and get token   |
| POST   | /api/logout     | Logout                |
| GET    | /api/me         | Get current user      |

### Tasks

| Method | Endpoint         | Description       |
|--------|------------------|-------------------|
| GET    | /api/tasks       | Get all tasks     |
| POST   | /api/tasks       | Create new task   |
| GET    | /api/tasks/{id}  | Get single task   |
| PUT    | /api/tasks/{id}  | Update task       |
| DELETE | /api/tasks/{id}  | Delete task       |

### Query Parameters

- ?status=pending
- ?priority=high
- ?search=keyword
- ?page=1

## Task Fields

- title (required)
- description (optional)
- status: pending, in_progress, completed
- priority: low, medium, high
- due_date (optional, format: YYYY-MM-DD)

## Installation

git clone https://github.com/rendraabe-cmd/task-management-api.git
cd task-management-api
composer install
cp .env.example .env
php artisan key:generate

Configure database in .env, then run:

php artisan migrate
php artisan serve

## Author

**Achmad Rendra Mustofa**
- Email: rendra.abe@gmail.com
- GitHub: https://github.com/rendraabe-cmd
