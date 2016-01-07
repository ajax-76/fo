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
                //$('.navbar').fadeIn();
                $('.navbar').show();
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
<div id="heading"><h1>RESTAURANT</h1></div>
<br><br>
@if(Session::has('message'))
   <div class="alert alert-info">{{Session::get('message')}}</div>
 @endif 
<br><br>
      <span class ="error">* required</span>
      <form method= "POST" >
      <div class="row">
        <div class="col-md-4 form-group" >
           <strong>1.Restaurant Name</strong>
           <span class="error">* </span>  
           <br><br>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
            <span class="error"> {{ $errors->errors->first('name') }}</span>
            
        </div>
      </div>
      <br><br>
      <strong>2.Restaurant Company</strong>
      <span class="error">* </span>  
      <br><br>
      <select name="restaurant_company_id" class="selectpicker">
      <option value="None selected">Select company</option>
      @foreach($restaurant_company_id as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
      </select>
       <br><br>
      <strong>3.Address</strong>
      <span class="error">* </span>  
      <br><br>
      <textarea name="address" rows="5" cols="40"></textarea>
      <span class="error"> {{ $errors->errors->first('address') }}</span>
       <br><br>
      
      <br><br>
      <div class="row">
              <div class="col-md-4">
              <strong>4.state</strong>
              <span class="error">* </span>  
               <select name="state_id"  class="selectpicker">
                <option value="None selected">Select state</option>
                  @foreach($state_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                </div>
      
      
              <div class="col-md-4">
               <strong>5.City</strong>
               <span class="error">* </span>  
                 <select name="city_id"  class="selectpicker">
                 <option value="None selected">Select city</option>
                  @foreach($city_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                </div>
      
          <div class="col-md-4">
              <strong>6.Locality</strong>
              <span class="error">* </span>  
               <select name="locality_id"  class="selectpicker">
                <option value="None selected">Select locality</option>
                  @foreach($locality_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                </div>
      </div>
      <br><br>
      <strong>7.pincode</strong>
      <span class="error">* </span>  
      <br><br>
      <input type="text" name="pincode" value="{{old('pincode')}}">
      <span class="error"> {{ $errors->errors->first('pincode') }}</span>
       <br><br>
      <strong>8.landmark</strong>
      <br><br>
      <input type="text" name="landmark">
      <br><br>
      <br><br>
      <strong>9.Phone</strong>
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
      <strong>11.Contact option-1.</strong>
      <br><br>
        <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>Name</strong>

                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_1_name" value="{{old('contact_1_name')}}">
                  <span class="error"> {{ $errors->errors->first('contact_1_name') }}</span>
                          
            </div>
            <div class="col-md-4 form-group">
                  <strong>Phone.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_1_phone" value="{{old('contact_1_phone')}}">
                  <span class="error"> {{ $errors->errors->first('contact_1_phone') }}</span>
                           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Mobile.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_1_mobile" value="{{old('contact_1_mobile')}}">
                  <span class="error"> {{ $errors->errors->first('contact_1_mobile') }}</span>
                              
            </div>
            <div class="col-md-4 form-group">
                  <strong>Email.</strong>
                  <span class="error">* </span>  
                  <input type="email" class="form-control" name="contact_1_email" value="{{old('contact_1_email')}}">
                  <span class="error"> {{ $errors->errors->first('contact_1_email') }}</span>
                              
            </div>
            <div class="col-md-4 form-group">
                  <strong>Designation.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="contact_1_designation" value="{{old('contact_1_designation')}}">
                  <span class="error"> {{ $errors->errors->first('contact_1_designation') }}</span>
                         
            </div>
      
      </div>
      <br><br>
      <strong>12.Contact option-2.</strong>
     <br><br>
        <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>Name</strong>
                  <input type="text" class="form-control" name="contact_2_name" value="{{old('contact_2_name')}}">  

            </div>
            <div class="col-md-4 form-group">
                  <strong>Phone.</strong>
                  <input type="text" class="form-control" name="contact_2_phone" value="{{old('contact_2_phone')}}"> 
                  <span class="error"> {{ $errors->errors->first('contact_2_phone') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Mobile.</strong>
                  <input type="text" class="form-control" name="contact_2_mobile" value="{{old('contact_2_mobile')}}"> 
                  <span class="error"> {{ $errors->errors->first('contact_2_mobile') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Email.</strong>
                  <input type="email" class="form-control" name="contact_2_email" value="{{old('contact_2_email')}}">            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Designation.</strong>
                  <input type="text" class="form-control" name="contact_2_designation" value="{{old('contact_2_designation')}}">            
            </div>
      
      </div>
      <br><br>
      <strong>13.Contact option-3 </strong>
      <br><br>
      <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>Name</strong>
                  <input type="text" class="form-control" name="contact_3_name" value="{{old('contact_3_name')}}">            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Phone.</strong>
                  <input type="text" class="form-control" name="contact_3_phone" value="{{old('contact_3_phone')}}">
                  <span class="error"> {{ $errors->errors->first('contact_3_phone') }}</span>            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Mobile.</strong>
                  <input type="text" class="form-control" name="contact_3_mobile" value="{{old('contact_3_mobile')}}"> 
                  <span class="error"> {{ $errors->errors->first('contact_3_mobile') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Email.</strong>
                  <input type="email" class="form-control" name="contact_3_email" value="{{old('contact_3_email')}}">            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Designation.</strong>
                  <input type="text" class="form-control" name="contact_3_designation" value="{{old('contact_3_designation')}}">            
            </div>
      
      </div>
      <strong>14.Billing Contact </strong>
        <br><br>
      <div class="row">
      
            <div class = " col-md-4 form-group">
                  <strong>Name</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="billing_contact_name" value="{{old('billing_contact_name')}}"> 
                  <span class="error"> {{ $errors->errors->first('billing_contact_name') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Phone.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="billing_contact_phone" value="{{old('billing_contact_phone')}}">
                  <span class="error"> {{ $errors->errors->first('billing_contact_phone') }}</span>            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Mobile.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="billing_contact_mobile" value="{{old('billing_contact_mobile')}}">
                  <span class="error"> {{ $errors->errors->first('billing_contact_mobile') }}</span>            
            </div>
            <div class="col-md-4 form-group">
                  <strong>Email.</strong>
                  <span class="error">* </span>  
                  <input type="email" class="form-control" name="billing_contact_email" value="{{old('billing_contact_email')}}"> 
                  <span class="error"> {{ $errors->errors->first('billing_contact_email') }}</span>           
            </div>
            <div class="col-md-4 form-group">
                  <strong>Designation.</strong>
                  <span class="error">* </span>  
                  <input type="text" class="form-control" name="billing_contact_designation" value="{{old('billing_contact_designation')}}"> 
                  <span class="error"> {{ $errors->errors->first('billing_contact_designation') }}</span>           
            </div>
      
      </div>
      

      <strong>15.Billing </strong>
      <br><br>
      <div class="row">

            <div class = " col-md-4 form-group">
                  <strong>Name</strong>
                  <span class="error">* </span>
                     <input type="text" class="form-control" name="billing_name" value="{{old('billing_name')}}">
                     <span class="error"> {{ $errors->errors->first('billing_name') }}</span>
                       
            </div>     

            <div class = " col-md-4 form-group">
                  <strong>Pincode</strong>
                  <span class="error">* </span>
                  <input type="text" class="form-control" name="billing_pincode" value="{{old('billing_pincode')}}">
                  <span class="error"> {{ $errors->errors->first('billing_pincode') }}</span>
                       
            </div>      
      
            <div class = " col-md-4 form-group">
                  <label for="text" style="float:left;margin-right:5px;">Address<span class="error">* </span></label>
                   
                 
                     <textarea name="billing_address" cols="30" rows="4"></textarea>
                     <span class="error"> {{ $errors->errors->first('billing_address') }}</span>
                       
            </div>           
     
            
      
        
      <div class="col-md-4">
              <strong>State</strong>
              <span class="error">* </span>  
               <select name="billing_state_id"  class="selectpicker">
                <option value="None selected">Select State</option>
                  @foreach($state_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                
                </div>
      
      
              <div class="col-md-4">
               <strong>City</strong>
               <span class="error">* </span>  
                 <select name="billing_city_id"  class="selectpicker">
                 <option value="None selected">Select City</option>
                  @foreach($city_id as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                
                </div>
      </div>
      <br><br>          
     
     
     
      <strong>16.Service tax</strong>
      <span class="error">* </span>  
      <br><br>
      
      <input type="text" name="service_tax" value="{{old('service_tax')}}">
      <span class="error"> {{ $errors->errors->first('service_tax') }}</span>
       <br><br>
      <strong>17.TIN</strong>
      <br><br>
      <input type="text" name="tin" value="{{old('tin')}}">
      <span class="error"> {{ $errors->errors->first('tin') }}</span>
       <br><br>
      <strong>18.TAN</strong>
      <br><br>
      <input type="text" name="tan" value="{{old('tan')}}">
      <span class="error"> {{ $errors->errors->first('tan') }}</span>
       <br><br>
      <strong>19.VAT</strong>
      <span class="error">* </span>  
      <br><br>
      
      <input type="text"  name="vat" value="{{old('vat')}}">
      <span class="error"> {{ $errors->errors->first('vat') }}</span>
       <br><br>
      <strong>20.PAN </strong> 
      <br><br>
      <input type="text" name="pan" value="{{old('pan')}}">
      <span class="error"> {{ $errors->errors->first('pan') }}</span>
       <br><br>
      <strong>21.VAT RATE(%)</strong>
      <span class="error">* </span>  
      <br><br>
      <input type="text" name="vat_rate" value="{{old('vat_rate')}}">
      <span class="error"> {{ $errors->errors->first('vat_rate') }}</span>
       <br><br>
      <strong>22.Service Tax Rate(%)</strong>
      <span class="error">* </span>  
      <br><br>
      
      <input type="text" name="service_tax_rate" value="{{old('service_tax_rate')}}">
      <span class="error"> {{ $errors->errors->first('service_tax_rate') }}</span>
       <br><br>
      <strong>23.Service Charge Rate(%)</strong>
      <span class="error">* </span>  
      <br><br>
      
      <input type="text" name="service_charge_rate" value="{{old('service_charge_rate')}}">
      <span class="error"> {{ $errors->errors->first('service_charge_rate') }}</span>
       
      <br><br>

      <button type="submit" class="btn btn-default" id="button"><span>Submit</span></button>


</form>

</div>
</div>




</body>
</html>
