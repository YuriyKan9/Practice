<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@auth
<img style="width:100px" src="{{URL('/images/spiral.jpeg')}}" class="logo" alt="Laravel Logo">
<h1>Hello, {{auth()->user()->name}}</h1>
<form method="POST" action="logout">
    @csrf
    <button type="submit">Logout</button>
</form>
<a href="create">
    <button >Create Listing</button>
</a>
<div>
    <a href="listings">
        <button >View Listings</button>
    </a>
</div>
<div>
    <form method="GET" action="setcookie">
        @csrf
        <label for="box"></label>
        <input id="box" type="text" name="box">
        <button type="submit">Cookie</button>
    </form>
    <a href="getcookie">
        <button type="submit">Show Cookie</button>
    </a>
      
    
</div>



@else
<div>
<a href="register">
    <button >Register</button>
</a>
</div>
<div>
<a href="login">
    <button>Log In</button>
</a>
</div>

@endauth

</body>
</html>