<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/users/authenticate">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" placeholder="email" name="email" id="email" value="{{ old('email')}}">
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('email')}}</span>
                </div>
            @endif
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="password" name="password" id="password" value="{{old('password')}}">
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('password')}}</span>
                </div>
            @endif
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>