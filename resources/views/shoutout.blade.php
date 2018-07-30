
<h1> Shoutout to: {{$text}} </h1>

@if($text == "gwapo")
<h1> Gwapo </h1>

@elseif($text=="gwapa")
<h1>Gwapa </h1>
@endif

<table border="1" >
   
 <th>#</th>
<th>  Colors </th>
<th> Descriptions </th>

@foreach($colors as $color => $description)


<tr>  
      
<td> {{$loop->iteration}}</td>
<td> {{$color}}</td>   
<td> {{$description}}</td>

</tr>  
  
 

<br>
@endforeach