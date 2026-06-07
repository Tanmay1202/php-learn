<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('submit-form')}}" method="POST">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">

        <button type="submit">submit</button>
    </form>
</body>
</html>