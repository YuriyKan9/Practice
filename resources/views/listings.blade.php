<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="/">Go Back</a>
    </div>
   @unless(count($listings) == 0)
   @foreach($listings as $listing)
   <div style="margin-bottom:10px">
   <img style="width:100px"src="{{ asset('storage/'. $listing->logo) }}" />
   <a href="listings/{{$listing->id}}">
    <p>{{$listing->name}}</p>
   </a>
   <form action="listings/{{$listing->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete</button>
    </form>
    <a href="listings/{{$listing->id}}/edit">Edit</a>
</div>
   @endforeach
   @else
   <p>No listings found!</p>
   @endunless
</body>
</html>