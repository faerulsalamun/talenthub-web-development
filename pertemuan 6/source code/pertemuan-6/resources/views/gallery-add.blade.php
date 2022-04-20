<form action="/" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="description" placeholder="description"><br><br>
    <input type="text" name="url" placeholder="url"><br><br>
    <input type="submit" name="submit">
</form>