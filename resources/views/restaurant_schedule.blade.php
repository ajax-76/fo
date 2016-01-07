<!DOCTYPE html>
<html>
<head>
	<title>RESTAURANT_SCHEDULE</title>
	<link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/custom-mobile.css">
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
	<style>
.x {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
.error{
      color: #FF0000;
      
}
#heading ,h1{
      text-align:center;
      font-size:150%;

}
	</style>
  <script type="text/javascript">
  (function ($) {
  $(document).ready(function(){

    // hide .navbar first
    //$(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                $('.navbar').fadeOut();
            } else {
                $('.navbar').fadeIn();
            }
        });
    });

});
  }(jQuery));
</script>
</head>
<body>
<div class="x">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
         <span class="icon-bar"></span>
          <span class="icon-bar"></span>
           <span class="icon-bar"></span>
            <span class="icon-bar"></span>
             <span class="icon-bar"></span>
              <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" class="active" href="http://localhost/random/public/">CaterWow Restaurant Form<span class="sr-only">(current)</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/random/public/restcomp">Restaurant Company</a></li>
        <li><a href="http://localhost/random/public/rest">Restaurant</a></li>
        <li><a href="http://localhost/random/public/restimage">Image</a></li>
        <li><a href="http://localhost/random/public/restschedule">Schedule</a></li>
        <li><a href="http://localhost/random/public/restview">View</a></li>
        <li><a href="http://localhost/random/public/menu">Menu</a></li>
        <li><a href="http://localhost/random/public/menuitem">Item</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="container">
<div class="a">
<br><br>
<div id="heading"><h1>RESTAURANT SCHEDULE</h1></div>
<br><br>
@if(Session::has('message'))
   <div class="alert alert-info">{{Session::get('message')}}</div>
 @endif
 <h3>RESTAURANT - {{$rest->name}}</h3> 
<br><br>
<span class ="error">* required</span>
<br><br>

<form method="POST">
<strong>1.Monday</strong>
<br><br>
<div class="row">
  <div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="Monday" name="day1" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open1" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open1') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time1" value="{{old('open_time1')}}">
            <span class="error"> {{ $errors->errors->first('open_time1') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time1" value="{{old('close_time1')}}">
                <span class="error"> {{ $errors->errors->first('close_time1') }}</span>
    </div>
</div> 
<br><br> 
<strong>2.Tuesday</strong>
<br><br>
<div class="row">
<div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="Tuesday" name="day2" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open2" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open2') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time2" value="{{old('open_time2')}}">
            <span class="error"> {{ $errors->errors->first('open_time2') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time2" value="{{old('close_time2')}}">
                <span class="error"> {{ $errors->errors->first('close_time2') }}</span>
    </div>
</div>  
<br><br>                
<strong>3.Wednesday</strong>
<br><br>
<div class="row">
     <div class="col-md-3">
         <strong>Check</strong>
             <span class="error">* </span>
             <br><br>
             <input type="checkbox" id="blankCheckbox" value="Wednesday" name="day3" aria-label="...">
     </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open3" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open3') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time3" value="{{old('open_time3')}}">
            <span class="error"> {{ $errors->errors->first('open_time3') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time3" value="{{old('close_time3')}}">
                <span class="error"> {{ $errors->errors->first('close_time3') }}</span>
    </div>
</div> 
<br><br> 
<strong>4.Thursday</strong>
<br><br>
<div class="row">
<div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="thursday" name="day4" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open4" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open4') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time4" value="{{old('open_time4')}}">
            <span class="error"> {{ $errors->errors->first('open_time4') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time4" value="{{old('close_time4')}}">
                <span class="error"> {{ $errors->errors->first('close_time4') }}</span>
    </div>
</div>
<br><br>
<strong>5.Friday</strong>
<br><br>
<div class="row">
<div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="Friday" name="day5" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open5" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time5" value="{{old('open_time5')}}">
            <span class="error"> {{ $errors->errors->first('open_time5') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time5" value="{{old('close_time5')}}">
                <span class="error"> {{ $errors->errors->first('close_time5') }}</span>
    </div>
</div>
<br><br>
<strong>6.Saturday</strong>
<br><br>
<div class="row">
<div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="Saturday" name="day6" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open6" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open6') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time6" value="{{old('open_time6')}}">
            <span class="error"> {{ $errors->errors->first('open_time6') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time6" value="{{old('close_time6')}}">
                <span class="error"> {{ $errors->errors->first('close_time6') }}</span>
    </div>
</div>
<br><br>
<strong>7.Sunday</strong>
<br><br>
<div class="row">
<div class="col-md-3">
     <strong>Check</strong>
        <span class="error">* </span>
         <br><br>
          <input type="checkbox" id="blankCheckbox" value="Sunday" name="day7" aria-label="...">
  </div>   
  <div class="col-md-3">
       <strong>Open.</strong>
         <span class="error">* </span>
         <br><br>
             <select name="open7" class="selectpicker">
                  <option value="None selected ">Fill</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
             </select> 
             <span class="error"> {{ $errors->errors->first('open7') }}</span>    
  </div>

  <div class="col-md-3">
       <strong>Open Time</strong>
       <span class="error">* </span>
           <br><br>
            <input type="time" name="open_time7" value="{{old('open_time7')}}">
            <span class="error"> {{ $errors->errors->first('open_time7') }}</span>
   </div>
   <div class="col-md-3">   
         <strong>Close Time</strong>
         <span class="error">* </span>
            <br><br>
                 <input type="time" name="close_time7" value="{{old('close_time7')}}">
                <span class="error"> {{ $errors->errors->first('close_time7') }}</span>
    </div>
</div>
<br><br>

<button type="submit" class="btn btn-default" id="button"><span>Submit</span></button>
</form>
</div>
</div>

</body>
</html>