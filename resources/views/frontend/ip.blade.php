<style>
      /* =========== Google Maps CSS:  Start  =========== */
      #map {
        width: 540px;
        height: 400px;
        border: 1px solid #989898;
      }
      @media screen and (min-width:768px) and (max-width: 1200px)
      {
        #map
        {
          width:460px;
          height:400px;
        }

      }

      @media screen and (min-width:0px) and (max-width:767px)
      {
        #map
        {
          width:95%;
          margin-left: 2.5%;
          height:40%;
          margin-bottom:40px;
        }
      }

      /* =========== Google Maps CSS:  End  =========== */

   
</style>



@include('includes.header')


<br>
<br>
<br>
    <p id="demo"><?php  ?></p>

<?php

  /*END*/

   $giCity = geoip_open("public/geo_ip_files/GeoLiteCity.dat", GEOIP_STANDARD);

   //$ip =$_SERVER['REMOTE_ADDR'];                    //For Server
   $ip = file_get_contents('https://api.ipify.org');  //For Localhost
    
    //$ip = "106.222.109.18";
    
    
    $record = geoip_record_by_addr($giCity, $ip);


    echo "<br /><br /><br /><br />";
?>

<!-- ========= Google Maps DIV:  Start  =========   -->
  <div class="container">
    <div class="row">
      
    
    <div class="col-md-6 col-sm-5 col-xs-12">
<!-- ========= Google Maps DIV:  End  =========   -->   

<?php
echo "Getting Country and City detail by IP Address <br /><br />";

echo "IP: ". Session::get('ip')."<br />";
echo "Country Code: ". Session::get('country_code')."<br />";
echo "Country Code3: ". Session::get('country_code3')."<br />";
echo "Country Name: ". Session::get('country_name')."<br />";
echo "Region Code: ". Session::get('region_code')."<br />";
echo "Region Name: ". Session::get('region_name')."<br />";
echo "City: ". Session::get('city')."<br />";
echo "Postal Code: ". Session::get('postal_code')."<br />";
echo "Latitude: ". Session::get('latitude')."<br />";
echo "Longitude: ". Session::get('longitude')."<br />";

$latitude = Session::get('latitude');      //storing co-ordinates in variable 
$longitude = Session::get('longitude');     // to pass in the JS Line 247


?>
 
 @foreach($users as $user)   
  {{ $user->symbol }}Hiiiiii
 @endforeach


 <!-- ======================IP Code: End =================== -->

<?php
 /* ============= Insert Currency Value in INR: Start ============= */


 $amount = 500;                //Your price / value you want to convert
 echo "<br><br>";

$INR = 1;                //Indian Rupees must be set to 1 
$USD = 64.67;            //United States Dollar
$AUD = 48.55;            //Australian Dollar
$CAD = 48.03;            //Canadian Dollar
$EUR = 69.35;            //Euro
$JPY = 0.59;             //Yen
$GBP = 82.73;            //British Pound
$AED = 17.59;            //United Arab Emirates Dirham
$CNY = 9.39;             //Yuan
//$KWD = 212.40;           //Kuwaiti Dinar


                         // *Note: write selected country's equivalent value in INR

/* ============= Insert Currency Value in INR: End ============= */
// echo $user->code; die;

$code = $user->code;
//$code = "AUD";
?>

 @foreach($users as $user)   
    @if($code == 'USD')                 <!-- US Dollars -->
      <?php
          $currency_rate = $USD;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'INR')             <!-- Indian Rupees -->
      <?php
          $currency_rate = $INR;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'AUD')             <!-- Australian Dollars -->
      <?php
          $currency_rate = $AUD;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'CAD')              <!-- Canadian Dollars -->
      <?php
          $currency_rate = $CAD;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'EUR')              <!-- Euros -->
      <?php
          $currency_rate = $EUR;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'JPY')               <!-- Yen -->
      <?php
          $currency_rate = $JPY;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'GBP')               <!-- British Pounds -->
      <?php
          $currency_rate = $GBP;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'AED')           <!-- United Arab Emirates -->
      <?php
          $currency_rate = $AED;
          $currency_symbol = $user->symbol;
      ?>
    @elseif($code == 'CNY')               <!-- Yuan -->
      <?php
          $currency_rate = $CNY;
          $currency_symbol = $user->symbol;
      ?>
    @else  <!-- For other countries other than above using US Dollars -->
      <?php
          $currency_rate = $USD;
          $currency_symbol = $user->symbol;
      ?>
    @endif
 @endforeach

 <?php                
    $converted_currency = ($amount/$currency_rate);                            //Formula to convert into equivalent


/* ======== Displaying Currency Code with Symbols: Start ============ */
     echo "<h5>Currency: &emsp;$user->symbol</h5>";

     echo "<h5>Currency Name:  &emsp; $user->currency &emsp;  </h5>";

     echo "<h5>Indian Currency: &emsp;&#8377; $amount</h5>";

     echo "<h5>Equivalent Value: &emsp;$currency_symbol $converted_currency</h5>";

     echo "<br/><br/>*Disclaimer: We are using your IP Address for best experience possible(Manual Method).";

/* ======== Displaying Currency Code with Symbols: End ============ */


  $country = $record->country_name;   //receiving country by IP
  //$country = "United Arab Emirates";  //hardcoded value for Testing


  $array = ['Brazil', 'China', 'India', 'Mexico', 'South Africa', 'Germany', 'United Arab Emirates' ];


  echo "<select>";
  foreach($array as $value){
    echo "<option value = '$value'";
    if($value == $country){
      echo " selected='selected' ";
    }
    echo ">$value</option>";
  }

  echo "</select>";
 ?>

 

</div>
      <div class="col-md-6 col-sm-7 col-xs-12">
        <div  id="map"></div>
      </div>

</div>
</div>


    <script>

    var latitude;
    var longitude;

/* ================= RECEIVING CO-ORDINATE FROM GEO IP: Start =================*/ 

    var x = document.getElementById("demo");

window.onload = function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    //alert($latitude);
    //alert($longitude);

    initMap(latitude, longitude);         //passing the received co-ordinate to initMap function to feed the google map

    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
    


    

}

 /*================= RECEIVING CO-ORDINATE FROM GEO IP: End =================*/

 /*  ===========JavaScript Added of Google Maps: Start ================== */


  


</script>
 <script>
      function initMap(latitude, longitude) {
        var uluru = {lat: latitude, lng: longitude};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 20,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyD0i7kWi0RNaN867PflD7a6zK-JIk9Ut6Q&callback=initMap">
    </script>

    <!--  ===========JavaScript Added of Google Maps: End ================== -->
