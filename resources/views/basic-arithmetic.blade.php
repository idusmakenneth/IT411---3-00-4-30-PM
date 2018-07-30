






@if($operator == "mul")
	<h1>Multiplication</h1>

	<p> Multiplicant : {{ $n1 }}</p>
	<p> Multiplier : {{ $n2 }}</p>
	<h2><b><p>{{ $n1*$n2 }}</p></b></h2>



@elseif($operator == "add")
	<h1>Addtion</h1>
	<p>Addend : {{ $n1 }}</p>
	<p> Adder : {{ $n2 }}</p>
	<h2><b><p>{{ $n1+$n2 }}</p></b></h2>

@elseif($operator == "div")

  @if($n1 == 0 || $n2 == 0)
	
	<h1>Division</h1>
	<p>Dividend : {{ $n1 }}</p>
	<p> Divisor : {{ $n2 }}</p>
	
	  <h2>{{ 0 }}</h2>
	  
	 @else
	<h1>Division</h1>
	<p>Dividend : {{ $n1 }}</p>
	<p> Divisor : {{ $n2 }}</p>
	
		 <h2><b><p>{{ $n1/$n2 }}</p></b></h2>
	
       
	  
      @endif

@elseif($operator == "sub")

	
	<h1>Subtraction</h1>
	<p>Minuend  :  {{ $n1 }}</p>
	<p>Subtrahend :  {{ $n2 }}</p>
	<h2><b><p>{{ $n1-$n2 }}</p></b></h2>


@endif
