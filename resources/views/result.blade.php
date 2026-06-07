Name: {{$data['name']}} <br>
Email: {{$data['email']}}<br>
Age: {{$data['age']}}<br><br>

@if($data['file'])
<h3>Uploaded Image</h3>
<img src="{{asset('storage/'.$data['file'])}}" width="200">
@endif