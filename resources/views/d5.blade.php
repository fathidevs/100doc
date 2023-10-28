<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>day 5</title>
</head>
<body>
    <h1>Day 5</h1>
    <h2>{{ $msg}}</h2><br><br>

    <p>I learned how to get data that in model, I made a simple function that returns a string </p>
    <p>then got the data in the controller at the 2nd argument of view(.., ..) </p>
    <p>then displayed the data in the html </p><br>
    
    <p>got little stuck on where should I exactly init. the data </p>
    <p>first try was Model, but it showed strange error related to database! </p>
    <p>I did not realize that I was init'ing inside a class without making a function! </p>
    <p>so the solution was to make the function amd all worked.  </p>
</body>
</html>