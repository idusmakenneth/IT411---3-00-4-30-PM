<html>
<h1> New Page</h1>

<h1> Shoutout to: {{$new_page1}}</h1>

@foreach($name as $name)
 <a href = "{{route('shoutout',array('text' => $name))}}">
{{$name}} </a> <br>
@endforeach


</html>