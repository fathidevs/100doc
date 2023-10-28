<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Day 3</h1>
    <h3>topic: create basic route that reurns "Hello World" instead of the home page</h3>

    <p>I spent Days 1 & 2 on exploring ways on how to install Laravel manually<br>
         without using third-party apps like Xampp or Laragon and failed!.<br>
        so I'm back to using Laragon instead of wasting time on figuring out how to <br>
    manually install Laravel. Here is my 100 days of code begins<br><br><br></p>

    <h3>Having backgroud in Laravel made this challenge easy, although, I did some searching...</h3>
    <h3>So I decided to go more in depth on this topic, and this is what I learned: <br><br></h3>

    <h2><li>basic routing</li></h2>
    <h4>simplest form of route. it defines route to home "/"</h4>
    <br>
    <p>
        Route::get('/', function () {
            return 'hello world';
        });
    </p>
    
    <br><br><br>

    <h2><li>named routing</li></h2>
    <h4>dynamic route, simplifies the use of routes in your code</h4>
    
    <br>
    <p>
        Route::get('/', function () {
            return 'hello world';
        })->name("hw");
    </p>
    <a href={{ route("hw") }}>" route("hw") " test the route!</a>

    <br><br><br>

    <h2><li>parameter routing</li></h2>
    <h4>routing with parameter such as user ID to direct them to their page </h4>
    
    <br>
    <p>
        Route::get('/', function ($nm) {
            return 'hello' . $nm;
        })->name('g');
    </p>
    <a href={{ route('g', ['nm' => '@fathidevs']) }}>" route('g', ['nm' => "sweetheat"]) " test the route!</a>
    
    <br><br><br>
    
    
    <h2><li>controller and group routing</li></h2>
    <h4>In will leave these for the the next days</h4>
    
    
    <br><br><br>

    
    <a href="{{ url('/d4') }}"> Day 4</a>
</body>
</html>