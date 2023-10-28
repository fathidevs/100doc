<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>day 4</title>
</head>
<body>
    <h1>Day 4</h1><br><br><br>

    <p>I learned how to make a controller returns a view, then use it in the route </p>

    <p>I got stuck in "router not defined" error cause I forgot to add a vrey silly line 
        in the routers file: web.php </p><br>

    <h2>use App\Http\Controllers\DayFourController;</h2>
    <p>I asked chatgbt why is it important?</p>
    <p>chatgbt: this import statement allows you to reference </p>
    <p>the DayFourController class directly in your routes definition.</p><br><br><br>

    <h2>I also encountered a cool syntax to make a route</h2><br>

    <h2>"Route::get('/d4', [DayFourController::class, 'show']);"</h2><br><br>
    <p></p>
</body>
</html>