# Task Management REST API

A RESTful API for managing personal tasks, built with Laravel 11 and MySQL.  
Supports authentication, CRUD operations, filtering, searching, and pagination.

---

## 🌐 Live Demo

**Production URL**: https://task-management-api-6390.onrender.com

> ⚠️ **Note**: First request may take 30–60 seconds (free tier cold start)

### Quick Test — Register a new user:

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
```

---

## 🛠️ Tech Stack

| Layer       | Technology          |
|-------------|---------------------|
| Framework   | Laravel 11          |
| Language    | PHP 8.4             |
| Database    | MySQL (Aiven Cloud) |
| Auth        | Laravel Sanctum     |
| Container   | Docker + Nginx      |
| Hosting     | Render.com          |
| API Testing | Bruno               |

---

## ✨ Features

- ✅ Token-based Authentication (Laravel Sanctum)
- ✅ Full CRUD operations with validation
- ✅ Filter by status and priority
- ✅ Search by title or description
- ✅ Pagination
- ✅ Dockerized and deployed to production
- ✅ Cloud database with SSL encryption (Aiven MySQL)

---

## 📡 API Endpoints

### Authentication

| Method | Endpoint      | Auth Required | Description       |
|--------|---------------|---------------|-------------------|
| POST   | /api/register | No            | Register new user |
| POST   | /api/login    | No            | Login, get token  |
| POST   | /api/logout   | Yes           | Logout            |
| GET    | /api/me       | Yes           | Get current user  |

### Tasks

| Method | Endpoint        | Auth Required | Description     |
|--------|-----------------|---------------|-----------------|
| GET    | /api/tasks      | Yes           | Get all tasks   |
| POST   | /api/tasks      | Yes           | Create new task |
| GET    | /api/tasks/{id} | Yes           | Get single task |
| PUT    | /api/tasks/{id} | Yes           | Update task     |
| DELETE | /api/tasks/{id} | Yes           | Delete task     |

### Query Parameters for GET /api/tasks

| Parameter | Values                          | Example         |
|-----------|---------------------------------|-----------------|
| status    | pending, in_progress, completed | ?status=pending |
| priority  | low, medium, high               | ?priority=high  |
| search    | any keyword                     | ?search=meeting |
| page      | number                          | ?page=2         |

---

## 📝 Task Fields

| Field       | Type   | Required | Notes                             |
|-------------|--------|----------|-----------------------------------|
| title       | string | ✅ Yes   | Max 255 characters                |
| description | string | No       | Optional detail                   |
| status      | enum   | No       | pending / in_progress / completed |
| priority    | enum   | No       | low / medium / high               |
| due_date    | date   | No       | Format: YYYY-MM-DD                |

---

## 📦 Installation (Local)

### Requirements

- PHP 8.2+
- Composer
- MySQL
- Git

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/rendraabe-cmd/task-management-api.git
cd task-management-api

# 2. Install dependencies
composer install

# 3. Copy environment file
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management_api
DB_USERNAME=root
DB_PASSWORD=your_password

# 6. Run migrations
php artisan migrate

# 7. Start server
php artisan serve
```

API will be available at: `http://127.0.0.1:8000`

---

## 📋 Example Request & Response

### Register

```bash
curl -X POST http://127.0.0.1:8000/api/register \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123"
  }'
```

**Response:**

```json
{
  "user": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com"
  },
  "token": "1|abc123..."
}
```

### Create Task

```bash
curl -X POST http://127.0.0.1:8000/api/tasks \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -H "Authorization: Bearer YOUR_TOKEN_HERE" \
  -d '{
    "title": "Finish project documentation",
    "description": "Write README and API docs",
    "status": "in_progress",
    "priority": "high",
    "due_date": "2025-12-31"
  }'
```

**Response:**

```json
{
  "id": 1,
  "title": "Finish project documentation",
  "description": "Write README and API docs",
  "status": "in_progress",
  "priority": "high",
  "due_date": "2025-12-31",
  "created_at": "2025-07-01T10:00:00.000000Z"
}
```

---

## 👤 Author

**Achmad Rendra Mustofa**

- 📧 Email: rendra.abe@gmail.com
- 🐙 GitHub: [@rendraabe-cmd](https://github.com/rendraabe-cmd)

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
