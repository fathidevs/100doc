<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>day 8</title>
</head>
<body>
    
    <form action="{{ route('form.register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">register</button>
        </div>
    </form>
</body>
</html>

