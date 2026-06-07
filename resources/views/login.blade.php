<h1>LOGIN PAGE</h1>
<form action="/log" method="POST">
    @csrf
    Enter Name:
    <input type="text" name="name" value="{{old('name')}}">
    <br>
    Enter Password:
    <input type="text" name="password" >
    <br>
    <button type="submit">submit</button>
</form>