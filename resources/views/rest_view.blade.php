<!DOCTYPE html>
<html>
<head>
	<title>RESTAURANT_VIEW</title>
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
<div id="heading"><h1>RESTAURANT VIEW</h1></div>
<br><br>
@if(Session::has('message'))
   <div class="alert alert-info">{{Session::get('message')}}</div>
 @endif 
 <h3>RESTAURANT - {{$restaurant->name}}</h3>
<br><br>
<span class ="error">* required</span>
        <form method ="POST">
         
       <br><br>
        <div class="row">
        <div class="col-md-4 form-group" >
           <label>1.Short Description.</label>
           <span class="error">* </span>  
           <br><br>
            <input type="text" class="form-control" name="short_description" value="{{old('short_description')}}">
            <span class="error"> {{ $errors->errors->first('short_description') }}</span>
            
        </div>
      </div>
         
       <br><br>
        <strong>2.Long Description</strong>
      <span class="error">* </span>  
      <br><br>
      <textarea name="long_description" rows="5" cols="40"></textarea>
      <span class="error"> {{ $errors->errors->first('long_description') }}</span>
       <br><br>
      
      <br><br>
        
        <div class="row">
         <div class="col-md-4 form-group">
        <label>3.Cuisines</label>
        <span class="error">* </span>
           <input type="text" class="form-control" name="cuisines" value="{{old('cuisines')}}">
           <span class="error"> {{ $errors->errors->first('cuisines') }}</span>
          </div>
        </div> 
    
       <br><br>
        
        <br><br>
        <div class="row">
          <div class="col-md-4 form-group">
             <label>4.Profile Photo</label>
             <input type="file"  name="profile_photo">
           </div>
          </div>   
         <br><br>
        <div class="row">
          <div class="col-md-4 form-group">
             <label>5.Average Rating</label> 
              <input type="text" class="form-control" name="avg_rating" value="{{old('avg_rating')}}">
              <span class="error"> {{ $errors->errors->first('avg_rating') }}</span>
          </div>
              

        <div class="col-md-4 form-group">
           <label>6.Review Count</label>
          <input type="text" class="form-control" name="review_count" value="{{old('review_count')}}">
          <span class="error"> {{ $errors->errors->first('review_count') }}</span>
         </div>
        </div>  
        <br><br>
       <div class="row">
          <div class="col-md-4 form-group">
          <label>7.Maximum Package Price</label>
           <span class="error">* </span>
              <input type="text" class="form-control" name="max_package_price" value="{{old('max_package_price')}}">
              <span class="error"> {{ $errors->errors->first('max_package_price') }}</span>
          </div>
          <div class="col-md-4 form-group">   
               <label>8.Minimum Package Price</label>
                     <span class="error">* </span>
                       <input type="text" class="form-control" name="min_package_price" value="{{old('min_package_price')}}">
                       <span class="error"> {{ $errors->errors->first('min_package_price') }}</span>
                </div>
           </div>            
       <br><br>
       <br><br>
       <div class="row">
         <div class="col-md-4 form-group">
         <label>9.Minimum Order Value</label>
           <span class="error">* </span>
              <input type="text" class="form-control" name="min_order_value" value="{{old('min_order_value')}}">
              <span class="error"> {{ $errors->errors->first('min_order_value') }}</span>
          </div>
         <div class="col-md-4 form-group">
            <label>10.Minimum Order Count</label>
                <span class="error">* </span>
                    <input type="text" class="form-control" name="min_order_count" value="{{old('min_order_count')}}">
                     <span class="error"> {{ $errors->errors->first('min_order_value') }}</span>
          </div>
        </div>          
       <br><br>
       <div class="row">
          <div class="col-md-4 form-group">
             <label>11.Total Orders</label>
                <input type="text" class="form-control" name="total_orders" value="{{old('total_orders')}}">
                <span class="error"> {{ $errors->errors->first('total_orders') }}</span>
           </div>
           <div class="col-md-4 from-group">
            <label>12.Order Before Time</label>     
               <span class="error">* </span>
                    <input type="time" class="form-control" name="order_before" value="{{old('order_before')}}">
                    <span class="error"> {{ $errors->errors->first('order_before') }}</span>
            </div>
            <div class="col-md-4 form-group">
             <label>13.Cancel Before Time</label>       
                  <span class="error">* </span>
                    <input type="time" class="form-control" name="cancel_before" value="{{old('cancel_before')}}">
                    <span class="error"> {{ $errors->errors->first('cancel_before') }}</span>
             </div>
          </div>          
         
      <br><br>
        
    <button type="submit" class="btn btn-default" id="button"><span>Submit</span></button>

        </form>
        </div>
        </div>
</body>
</html>