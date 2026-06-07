<h1>This is the profile page</h1>
@if(session('my-name'))
<h2>{{session('my-name')}}</h2>
@else
<h2>User Not Found</h2>
@endif


<a href="/logout">LOGOUT</a>
