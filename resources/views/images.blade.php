<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front Page</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <h1>Hello People!</h1>
    
    
    <form method="POST" action="store" enctype='multipart/form-data'>
        @csrf
        <div> 
             <label for="name">Name</label>
            <input name="name" type="text"></div>
        <div>

            <label for="tags">Tags</label>
            <input name="tags"  type="text">
        </div>
        <div>

            <label for="logo">Image</label>
            <input name="logo"  type="file">
        </div>
        <div>

            <label for="description">Description</label>
            <textarea name="description"  cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>