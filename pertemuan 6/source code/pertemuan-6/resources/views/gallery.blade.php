@foreach ($galleries as $gallery)
    Nama : {{$gallery->name}}<br>
    Description : {{$gallery->description}}<br>
    URL : {{$gallery->url}}<br>
    Action : <a href="/edit/{{$gallery->id}}">Edit</a> || <a href="/delete/{{$gallery->id}}">Delete</a><br><br>
@endforeach

<a href="add">Add</a>