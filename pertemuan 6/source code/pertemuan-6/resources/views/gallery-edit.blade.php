<form action="/{{$gallery->id}}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$gallery->id}}">
    <input type="text" name="name" placeholder="name" value="{{$gallery->name}}"><br><br>
    <input type="text" name="description" placeholder="description" value="{{$gallery->description}}"><br><br>
    <input type="text" name="url" placeholder="url" value="{{$gallery->url}}"><br><br>
    <input type="submit" name="submit">
</form>