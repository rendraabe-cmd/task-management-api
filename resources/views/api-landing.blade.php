<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management REST API - Rendra</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        code, pre { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <!-- Header -->
    <header class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-5xl mx-auto px-6 py-16">
            <div class="flex items-center gap-3 mb-4">
                <span class="text-4xl">📋</span>
                <span class="bg-green-400 text-green-900 text-xs font-bold px-3 py-1 rounded-full">● LIVE</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-3">Task Management REST API</h1>
            <p class="text-xl text-indigo-100 mb-6">Production-ready RESTful API built with Laravel 11</p>
            <div class="flex flex-wrap gap-2">
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">Laravel 11</span>
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">PHP 8.4</span>
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">MySQL</span>
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">Sanctum Auth</span>
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">Docker</span>
                <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-sm">Aiven Cloud</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-12">

        <!-- Quick Action -->
        <div class="grid md:grid-cols-3 gap-4 mb-12">
            <a href="https://github.com/rendraabe-cmd/task-management-api" target="_blank"
               class="bg-gray-900 hover:bg-gray-800 text-white p-4 rounded-xl flex items-center gap-3 transition-all hover:-translate-y-1 shadow-lg">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                <div>
                    <div class="font-bold">View Source</div>
                    <div class="text-xs text-gray-400">GitHub Repository</div>
                </div>
            </a>
            <a href="#endpoints"
               class="bg-indigo-600 hover:bg-indigo-700 text-white p-4 rounded-xl flex items-center gap-3 transition-all hover:-translate-y-1 shadow-lg">
                <span class="text-2xl">📚</span>
                <div>
                    <div class="font-bold">API Documentation</div>
                    <div class="text-xs text-indigo-200">See all endpoints below</div>
                </div>
            </a>
            <a href="#try"
               class="bg-green-600 hover:bg-green-700 text-white p-4 rounded-xl flex items-center gap-3 transition-all hover:-translate-y-1 shadow-lg">
                <span class="text-2xl">🚀</span>
                <div>
                    <div class="font-bold">Try It Live</div>
                    <div class="text-xs text-green-200">Demo credentials available</div>
                </div>
            </a>
        </div>

        <!-- Features -->
        <section class="bg-white rounded-2xl shadow-sm p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">✨ Key Features</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">Token Authentication</div>
                        <div class="text-sm text-gray-600">Laravel Sanctum with secure token-based auth</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">Full CRUD Operations</div>
                        <div class="text-sm text-gray-600">Create, Read, Update, Delete tasks</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">Advanced Filtering</div>
                        <div class="text-sm text-gray-600">Filter by status, priority, and search</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">Pagination Support</div>
                        <div class="text-sm text-gray-600">Built-in pagination for scalability</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">SSL Database</div>
                        <div class="text-sm text-gray-600">Aiven MySQL with SSL encryption</div>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="text-green-500 text-xl">✓</span>
                    <div>
                        <div class="font-semibold">Production Deployed</div>
                        <div class="text-sm text-gray-600">Docker on Render.com with auto-deploy</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Endpoints -->
        <section id="endpoints" class="bg-white rounded-2xl shadow-sm p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">📡 API Endpoints</h2>

            <!-- Authentication -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3 mt-6">🔐 Authentication</h3>
            <div class="space-y-2 mb-6">
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">POST</span>
                    <code class="text-sm text-gray-800">/api/register</code>
                    <span class="text-sm text-gray-500 ml-auto">Register new user</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">POST</span>
                    <code class="text-sm text-gray-800">/api/login</code>
                    <span class="text-sm text-gray-500 ml-auto">Login & get token</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">POST</span>
                    <code class="text-sm text-gray-800">/api/logout</code>
                    <span class="text-sm text-gray-500 ml-auto">🔒 Logout (auth required)</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">GET</span>
                    <code class="text-sm text-gray-800">/api/me</code>
                    <span class="text-sm text-gray-500 ml-auto">🔒 Get current user</span>
                </div>
            </div>

            <!-- Tasks -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3 mt-6">📝 Tasks (Auth Required)</h3>
            <div class="space-y-2 mb-6">
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">GET</span>
                    <code class="text-sm text-gray-800">/api/tasks</code>
                    <span class="text-sm text-gray-500 ml-auto">List all tasks</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">POST</span>
                    <code class="text-sm text-gray-800">/api/tasks</code>
                    <span class="text-sm text-gray-500 ml-auto">Create task</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">GET</span>
                    <code class="text-sm text-gray-800">/api/tasks/{id}</code>
                    <span class="text-sm text-gray-500 ml-auto">Get single task</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded">PUT</span>
                    <code class="text-sm text-gray-800">/api/tasks/{id}</code>
                    <span class="text-sm text-gray-500 ml-auto">Update task</span>
                </div>
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">DELETE</span>
                    <code class="text-sm text-gray-800">/api/tasks/{id}</code>
                    <span class="text-sm text-gray-500 ml-auto">Delete task</span>
                </div>
            </div>

            <!-- Query Params -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3 mt-6">🔍 Query Parameters</h3>
            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
                <pre class="text-sm"><code>GET /api/tasks?status=pending&priority=high&search=urgent&page=2</code></pre>
            </div>
        </section>

        <!-- Try It -->
        <section id="try" class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">🧪 Try It Yourself</h2>
            <p class="text-gray-700 mb-6">Use these demo credentials with <strong>Postman</strong>, <strong>Bruno</strong>, or <strong>curl</strong>:</p>

            <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
                <div class="text-sm text-gray-500 mb-2">📧 Demo Credentials:</div>
                <div class="grid md:grid-cols-2 gap-3">
                    <div>
                        <div class="text-xs text-gray-500">Email</div>
                        <code class="text-sm font-semibold text-indigo-600">rendra@live.com</code>
                    </div>
                    <div>
                        <div class="text-xs text-gray-500">Password</div>
                        <code class="text-sm font-semibold text-indigo-600">password123</code>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto">
                <div class="text-xs text-gray-400 mb-2"># Step 1: Login & get token</div>
                <pre class="text-sm"><code>curl -X POST {{ url('/api/login') }} \
  -H "Content-Type: application/json" \
  -d '{"email":"rendra@live.com","password":"password123"}'</code></pre>
                <div class="text-xs text-gray-400 mt-4 mb-2"># Step 2: Use token to access tasks</div>
                <pre class="text-sm"><code>curl {{ url('/api/tasks') }} \
  -H "Authorization: Bearer YOUR_TOKEN_HERE"</code></pre>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="bg-white rounded-2xl shadow-sm p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">🛠️ Tech Stack</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="p-4 bg-red-50 rounded-lg">
                    <div class="font-bold text-red-700">Laravel 11</div>
                    <div class="text-xs text-gray-600 mt-1">Backend Framework</div>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-700">MySQL</div>
                    <div class="text-xs text-gray-600 mt-1">Database (Aiven Cloud)</div>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <div class="font-bold text-purple-700">Sanctum</div>
                    <div class="text-xs text-gray-600 mt-1">Authentication</div>
                </div>
                <div class="p-4 bg-cyan-50 rounded-lg">
                    <div class="font-bold text-cyan-700">Docker</div>
                    <div class="text-xs text-gray-600 mt-1">Containerization</div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8 mt-12">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <p class="mb-2">Built with ❤️ by <a href="https://github.com/rendraabe-cmd" class="text-indigo-400 hover:text-indigo-300 font-semibold">Achmad Rendra Mustofa</a></p>
            <p class="text-sm">Fullstack Web Developer | Available for Remote Work 🌍</p>
        </div>
    </footer>

</body>
</html>
