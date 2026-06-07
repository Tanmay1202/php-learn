<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student Registration</h2>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    </ul>
    @endif

    <form action="{{route('student-form-submit')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        Name:
        <input type="text" name="name">
        <br>
        Email:
        <input type="text" name="email">
        <br>
        Age:
        <input type="number" name="age">
        <br>
        <input type="file" name="image">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>