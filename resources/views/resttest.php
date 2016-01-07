<!DOCTYPE html>
<html>
<head>
      <title>RESTAURANT</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <style>
   
.error{
      color: #FF0000;
      
}
</style>
</head>
<body>
<div  class="a">
     <span class ="error">* required</span>
      <form method= "POST" >
      1.Restaurant-Name.
      <input type='text' name='restaurant_name'>
       <span class="error">* </span>
       <br><br>
      2.Restaurant_company
      <select name="restaurant_company_id">
      <option value="None selected">Select Restaurant company </option>
      <option value="1">tasty</option>
      <option value="2">tandoor</option>
      <option value="3">tgip</option>
      <option value="4">fillup</option>
      <option value="5">nazeer</option>
            
      </select>

      <span class="error">* </span>
       <br><br>
      3.Address
      <input type='text' name='address'>
      <span class="error">* </span>
       <br><br>
      4..state
      <select name="state_id">
      <option value="None selected">Select State </option>
      <option value="1">UP</option>
      <option value="2">Delhi</option>
      <option value="3">Haryana</option>
            
      </select>
      <span class="error">* </span>
       <br><br>
      5.city
      <select name="city_id">
      <option value="None selected">Select City </option>
      <option value="1">Gurgaon</option>
      <option value="2">Noida</option>
      <option value="3">new delhi</option>
            
      </select>
      <span class="error">* </span>
       <br><br>
      
      6.Locality
      <select name="locality_id">
      <option value="None selected">Select locality </option>
      <option value="1">sushant lok</option>
      <option value="2">cyber city</option>
      <option value="3">vipul square</option>
            
      </select>
      
      <span class="error">* </span>
       <br><br>
      7.pincode
      <input type="number" name="pincode">
      <span class="error">* </span>
       <br><br>
      8.landmark
      <input type="text" name="landmark">
      <br><br>
      9.phone_1
      <input type="numnber" name="phone_1">
       <br><br>
      10.phone_2
      <input type="number" name="phone_2">
       <br><br>
      11.email
      <input type="email" name="email">

      <span class="error">* </span>
       <br><br>
      12.contact_1_name
      <input type="text" name="contact_1_name">
      <span class="error">* </span>
       <br><br>
      13.contact_1_phone
      <input type="number" name="contact_1_phone">
      <span class="error">* </span>
       <br><br>
      14.contact_1_mobile
      <input type="number" name="contact_1_mobile">
      <span class="error">* </span>
       <br><br>
      15.contact_1_email
      <input type="email" name="contact_1_email">
      <span class="error">* </span>
       <br><br>

      16.contact_1_designation
      <input type="text" name="contact_1_designation">
      <span class="error">* </span>
       <br><br>
      17.contact_2_name
      <input type="text" name="contact_2_name">
       <br><br>
      18.contact_2_phone
      <input type="number" name="contact_2_phone">
       <br><br>
      19.contact_2_mobile
      <input type="number" name="contact_2_mobile">
       <br><br>
      20.contact_2_email
      <input type="email" name="contact_2_email">
       <br><br>
      21.contact_2_designation
      <input type="text" name="contact_2_designation" >
       <br><br>
      22.contact_3_name
      <input type="text" name="contact_3_name">
       <br><br>
      23.contact_3_phone
      <input type="number" name="contact_3_phone">
       <br><br>
      24.contact_3_mobile
      <input type="number" name="contact_3_mobile">
       <br><br>
      25.contact_3_email
      <input type="email" name="contact_3_email">
       <br><br>
      26.contact_3_designation
      <input type="text" name="contact_3_designation">
       <br><br>
      27.billing_contact_name
      <input type="text" name="billing_contact_name">

      <span class="error">* </span>
       <br><br>
      28.billing_contact_phone
      <input type="number" name="billing_contact_phone">
      <span class="error">* </span>
       <br><br>
      29.billing_contact_mobile
      <input type="number" name="billing_contact_mobile">
      <span class="error">* </span>
       <br><br>
      30.billing_contact_email
      <input type="email" name="billing_contact_email">
      <span class="error">* </span>
       <br><br>
      31.billing_contact_designation
      <input type="text" name="billing_contact_designation">
      <span class="error">* </span>
       <br><br>
      32.billing_name
      <input type="text" name="billing_name">
      <span class="error">* </span>
       <br><br>
      33.billing_address
      <input type="text" name="billing_address">
      <span class="error">* </span>
       <br><br>
      34.billing_city
      <select name="billing_city_id">
      <option value="None selected">Select billing city </option>
      <option value="1">Gurgaon</option>
      <option value="2">Noida</option>
      <option value="3">new delhi</option>
      </select>
      <span class="error">* </span>
       <br><br>
            
      35.billing_pincode
      <input type="number" name="billing_pincode">
      <span class="error">* </span>
       <br><br>
      36.billing_state
      <select name="billing_state_id">
      <option value="None selected">Select billing state </option>
      <option value="1">UP</option>
      <option value="2">Delhi</option>
      <option value="3">Haryana</option>
      <select>
      <span class="error">* </span>
       <br><br>
      37.service tax
      <input type="number" name="service_tax">
       <br><br>
      38.tin
      <input type="number" name="tin">
       <br><br>
      39.tan
      <input type="number" name="tan">
       <br><br>
      40.vat
      <input type="number"  name="vat">
       <br><br>
      41.pan
      <input type="number" name="pan">
       <br><br>
      42.vat_rate
      <input type="number" name="vat_rate">
       <br><br>
      43.service_tax_rate
      <input type="number" name="service_tax_rate">
       <br><br>
      44.service_charge_rate
      <input type="number" name="service_charge_rate">
       <br><br>

       <input type="submit" value="submit">


</form>



</body>
</html>
