<!DOCTYPE html>
<html>
<head>
	<title>RESTAURANT_IMAGES</title>
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
      <a class="navbar-brand" href="http://localhost/random/public/">CaterWow Restaurant Form</a>
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
<div id="heading"><h1>RESTAURANT IMAGES</h1></div>
<br><br>
@if(Session::has('message'))
   <div class="alert alert-info">{{Session::get('message')}}</div>
 @endif 

<h3>RESTAURANT - {{$rest->name}}</h3>
<br><br>
<span class ="error">* required</span>
<br><br>

<form method="POST">
<strong>1.Title</strong>
<span class ="error">* </span>
<br><br>
     <input type="text" name="title" value="{{old('title')}}">
     <span class="error"> {{ $errors->errors->first('title') }}</span>
<br><br>
<div class="row">
  <div class="col-md-4 form-group">
      <strong>2.Description</strong>
      <span class ="error">* </span>
         <input type="text" class="form-control" name="description" value="{{old('description')}}">
         <span class="error"> {{ $errors->errors->first('description') }}</span>
   </div>
   </div>      
<strong>3.Photo</strong>
<br><br>
       <input type="file" name="photo_address" enctype="multipart/form-data">
<br><br>
       <button type="submit" class="btn btn-default" value="Upload Image" id="button"><span>Submit</span></button>
</form>
</div>
</div>
</body>
</html>