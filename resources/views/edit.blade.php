<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('PUT')
        <div> 
            <label for="name">Name</label>
           <input name="name" type="text" value="{{$listing->name}}">
        </div>
       <div>

           <label for="tags">Tags</label>
           <input name="tags"  type="text"  value="{{$listing->tags}}">
       </div>
       <div>

           <label for="logo">Image</label>
           <input name="logo"  type="file">
           <img style="width:100px;display:block" src="{{asset('storage/'.$listing->logo)}}" alt="">
       </div>
       <div>

           <label for="description">Description</label>
           <textarea style="display:block"name="description" cols="30" rows="10">
            {{$listing->description}}
           </textarea>
       </div>
       <button type="submit">Update</button>

    </form>
</body>
</html>