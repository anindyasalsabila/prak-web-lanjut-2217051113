<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
    @csrf
        <label for="nama">First name:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="npm">Last name:</label><br>
        <input type="text" id="npm" name="npm">
        <input type="submit" value="Submit">   
    </form>
</body>
</html>