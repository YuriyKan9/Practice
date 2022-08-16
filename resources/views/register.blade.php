<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="userstore" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="name" name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('name')}}</span>
                </div>
            @endif
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="text" placeholder="email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('email')}}</span>
                </div>
            @endif
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="password" name="password" value="{{old('password')}}">
            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('password')}}</span>
                </div>
            @endif
        </div>
        <div>
            <label for="password_confirmation">Password confirmation</label>
            <input id="password_confirmation" type="password" placeholder="password confirmation" name="password_confirmation" value="{{old('password_confirmation')}}">
            @if ($errors->has('password_confirmation'))
                <div class="alert alert-danger">
                    <span style="color:red">{{$errors->first('password_confirmation')}}</span>
                </div>
            @endif
        </div>
        <button type="submit">Submit</button>
        
    </form>
</body>
</html>