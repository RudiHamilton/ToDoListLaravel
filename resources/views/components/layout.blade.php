<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <a href="/"><h1>GreenLeaf</h1></a>
            <a href="/usedpages/todolist">To Do List</a>
            <a href="/usedpages/signin">Sign In</a>
            <a href="/usedpages/register">Register</a>

            <div class="profileloggedin"><label for="ProfileLoggedIn">!placeholder!</label></div>
        </nav>

    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>