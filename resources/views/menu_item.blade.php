<!DOCTYPE html>
<html>
<head>
	<title>MENU_ITEM</title>
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
<br><br>
<div id="heading"><h1>MENU ITEM</h1></div>
<br><br>
@if(Session::has('message'))
   <div class="alert alert-info">{{Session::get('message')}}</div>
 @endif 
 @if(Session::has('f'))
   <div class="alert alert-info">{{Session::get('f')}}</div>
 @endif 
 
<br><br>
<h3> RESTAURANT - {{$rest->name}}<br><br>MENU - {{$menu->name}} </h3>


<div class="a">

<span class ="error">* required</span>

<form method="POST">
<select name="type" id="types">
<option value="">Menu Type</option>
<option value="package">package</option>
<option value="a~la~cart">a~la~cart</option>
  
</select>
<br><br>
<div class="row">
   <div class="col-md-4 form-group">
      <strong>1.Name</strong>
      <span class="error">* </span>
          <input type ="text" class="form-control" name="name" value="{{old('name')}}">
          <span class="error"> {{ $errors->errors->first('name') }}</span>
      </div>
      
      <div class="col-md-4 form-group">
      <div id = "optionBox" style="display : none">
            <span class="error">* </span>
                  <strong>2.price</strong>
                  <input type="text" class="form-control" name="price" value="{{old('price')}}">
                  <span class="error"> {{ $errors->errors->first('price') }}</span>
                  </div>
          <script type="text/javascript">
                  $('#types').change(function(){
                  // console.log($('#has_options').val() == 1);
                  if($('#types').val() == 'a~la~cart'){
                      $('#optionBox').show();
                  }
                  else{
                    $('#optionBox').hide();
                  }
                });
                </script>        
       </div>  
       </div>
       <br><br> 
       <br><br>
          <strong>3.Description</strong>
           <span class="error">* </span>
           <br><br>
             <textarea name="description" cols="40" rows="5"></textarea>
             <span class="error"> {{ $errors->errors->first('description') }}</span>
             <br><br>
             <br><br>
      
                  <strong>4.Has Option?</strong>
                  <span class="error">* </span>
                  <span class="error"> {{ $errors->errors->first('has_options') }}</span>
                  <br><br>
                        <select name="has_options" id="has_options" >
                              <option value="" selected disabled=""> Fill</option>
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                        </select>
             


       <br><br>
       <div id = "optionsBox" style="display : none">
      <strong> 5.No of options</strong>
       <br><br>
       <select name="options" id="options" onchange="myfunction()">

         <option value="" disabled selected>Fill</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>

       </select>           
       </div>

              <script type="text/javascript">
                $('#has_options').change(function(){
                  // console.log($('#has_options').val() == 1);
                  if($('#has_options').val() == 1){
                      $('#optionsBox').show();
                  }
                  else{
                    $('#optionsBox').hide();
                  }
                });
                function myfunction()
                {
                var x=document.getElementById("options").value;
               var i =1;
               var form="";
               while(i<=x)
               {
               
               form +='<strong>Option:'+i+'</strong><br><br><div class ="row"><div class="col-md-3 form-group">Name <input type="text" name="name'+i+'" class="form-control"></div><div class="col-md-3 form-group">Description <input type="text" name="description'+i+'" class="form-control"></div><div class="col-md-3 form-group">Max Choice<input type="text" name="max_choice'+i+'" class="form-control"></div><div class="col-md-3 form-group">Min Choice<input type="text" name="min_choice'+i+'" class="form-control"></div></div>Paid<br><select name="paid'+i+'"><option value="None Selected">Fill</option><option value="0">No</option><option value="1">Yes</option></select><br><br>Does it have more options??<br>how many options<br><select class="option_list" name="option'+i+'"><option value="none">Fill</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br><br><div id = "option'+i+'"></div> ';
               i++;
                }
             document.getElementById("form").innerHTML = form;
                }
              
                // function function()
                // {
                //   if (document.getElementById("optionlist").value==0)
                //   {
                //     $("#option_list").prop("disabled",true);
              
                //   }
                //   else
                //   {
                //     $("#option_list").prop("disabled",false);
                   
                //   }
                // }
                  function function1(ele)
                {
                  // var ele = ele;
                  var y= $("select[name = "+ele+"]").val();
                  // console.log(y);
                  if(y){
                  var j=1;
                  var form1="";
                  while(j<=y)
                  {
                    console.log('here');                      
                    form1 += 'Name'+j+'<br><input name="nam'+ele+j+'" type="text"><br>Price'+j+'<br><input type="text" name="pric'+ele+j+'"><br><br>';
                    // console.log("#option"+j);
                    j++; 
                  }
                    $("#"+ele).html(form1);
                  }
                }

               </script>
              <script>
                $('body').on('click','select.option_list',function(){
                  // $('.option_list').click(function(){
                    // console.log(this);
                    function1($(this).attr("name"));  
                  // });
                  // console.log('here');
                });
                                </script>         
       
<div id="form"></div>
<!-- @section('content')
@show -->
<button type="submit" class="btn btn-default" id="button"><span>Submit</span></button>
</form>
</div>
</div>
</body>
</html>