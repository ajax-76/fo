@extends('menu_item')
@section('content')
   {{$option=Session('options')}}
 @for ($i=1; $i <=$option; $i++)
    
    Option:{{$i}}
    <br><br>
    Name
    <br>
    <input type="text" name="name{{$i}}" >
    <br>
    Description
    <br>
    <input type="text" name="description{{$i}}">
    <br>
    Max Choice
    <br>
    <input type="text" name="max_choice{{$i}}">
    <br>
    Min Choice
    <br>
    <input type="text" name="min_choice{{$i}}">
    <br>
    Paid
    <br>
    <select name="paid{{$i}}">
    <option value="">Fill</option>
    <option value="0">No</option>
    <option value="1">Yes</option>
    </select>
    <br>
    More Options??
    <br>
    <select name="option{{$i}}" id="option" onchange="myfunction">
    	<option value="">Fill</option>
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    </select>
    <script type="text/javascript">
          function myfunction()
                {
                  $('#form').submit();
    </script>
   <br><br>
   @endfor
@endsection   
