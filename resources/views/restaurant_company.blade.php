<!DOCTYPE html>
<html>
<head>
      <title>RESTAURANT</title>
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
<div  class="a">
<br><br>
<div id="heading"><h1>RESTAURANT COMPANY</h1></div>
<br><br>
@if(Session::has('message1'))
   <div class="alert alert-info">{{Session::get('message1')}}</div>
 @endif 
<br><br>
      <span class ="error">* required</span>
      <form method= "POST" >
      <div class="row">
        <div class="col-md-4 form-group" >
           <strong>1.Restaurant Company Name</strong>
           <span class="error">* </span>  
           <br><br>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            <span class="error"> {{ $errors->errors->first('name') }}</span>
            
        </div>
      </div>
       <br><br>
      <strong>2.Address</strong>
      <span class="error">* </span>  
      <br><br>
      <textarea name="address" rows="5" cols="40"></textarea>
      <span class="error"> {{ $errors->errors->first('address') }}</span>
       <br><br>
      
      <br><br>
      <div class="row">
              <div class="col-md-4">
              <strong>3.state</strong>
              <span class="error">* </span>  
               <select name="state_id"  class="selectpicker">
                <option value="None selected">Select state</option>
                  @foreach($state_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                </div>
      
      
              <div class="col-md-4">
               <strong>4.City</strong>
               <span class="error">* </span>  
                 <select name="city_id"  class="selectpicker">
                 <option value="None selected">Select city</option>
                  @foreach($city_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                </div>
      </div>
      <br><br>
      <strong>5.pincode</strong>
      <span class="error">* </span>  
      <br><br>
      <input type="text" name="pincode" value="{{old('pincode')}}">
      <span class="error"> {{ $errors->errors->first('pincode') }}</span>
       <br><br>
      <strong>6.landmark</strong>
      <br><br>
      <input type="text" name="landmark" value="{{old('landmark')}}">
      <br><br>
      <br><br>
      <strong>7.Phone</strong>
      <span class="error">* </span>  
      <br><br>
      <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>1.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="phone_1" value="{{old('phone_1')}}">
                  <span class="error"> {{ $errors->errors->first('phone_1') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>2.</strong>
                  <input type="text" class="form-control" name="phone_2" value="{{old('phone_2')}}"> 
                  <span class="error"> {{ $errors->errors->first('phone_2') }}</span>          
            </div>
      
      </div>
      <br><br>
      
      <div class="row">
        <div class="col-md-4 form-group" >
           <strong>10.Email</strong>
           <span class="error">* </span>  
           <br><br>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            <span class="error"> {{ $errors->errors->first('email') }}</span>
            
        </div>
      </div>
      <br><br>
      <strong>11.Contact.</strong>
      <br><br>
        <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>Name</strong>

                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_name" value="{{old('contact_name')}}">
                  <span class="error"> {{ $errors->errors->first('contact_name') }}</span>
                          
            </div>
            <div class="col-md-4 form-group">
                  <strong>Phone.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_phone" value="{{old('contact_phone')}}">
                  <span class="error"> {{ $errors->errors->first('contact_phone') }}</span>
                           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Mobile.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_mobile" value="{{old('contact_mobile')}}">
                  <span class="error"> {{ $errors->errors->first('contact_mobile') }}</span>
                              
            </div>
            <div class="col-md-4 form-group">
                  <strong>Email.</strong>
                  <span class="error">* </span>  
                  <input type="email" class="form-control" name="contact_email" value="{{old('contact_email')}}">
                  <span class="error"> {{ $errors->errors->first('contact_email') }}</span>
                              
            </div>
            <div class="col-md-4 form-group">
                  <strong>Designation.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_designation" value="{{old('contact_designation')}}">
                  <span class="error"> {{ $errors->errors->first('contact_designation') }}</span>
                         
            </div>
      
      </div>
      
      <br><br>          
     
     
     
      <strong>16.CIN</strong>
      <span class="error">* </span> 
      <input name="cin" type="text" value="{{old('cin')}}">
      <span class="error"> {{ $errors->errors->first('cin') }}</span> 
      <br><br>

      <button type="submit" class="btn btn-default" id="button"><span>Submit</span></button>


</form>

</div>
</div>



</body>
</html>
