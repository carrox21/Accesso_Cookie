<?php 
 $cookie_name="cookie_accessi";
 $cookie_value=1;
 $cookie_time=60*60*24*7;
 if(!isset($_COOKIE[$cookie_name]))
 {
  setcookie($cookie_name,$cookie_value,time()+$cookie_time,"/");
 }
 else
 {
  if(isset($_COOKIE[$cookie_name]))
  {
   $temp_v=$_COOKIE[$cookie_name]+1;
   setcookie($cookie_name,$temp_v,time()+$cookie_time,"/");
  }
 }
?>
<!DOCTYPE html>
<html>
 <body>
  <?php
   if(isset($_COOKIE[$cookie_name]))
   {
    $temt_c=$_COOKIE[$cookie_name]+1;
    echo "Questo e' l'accesso numero: $temt_c";//Perchè l'accesso ha numero 1 ma per l'utente è la seconda volta che utilizza questo cookie
   }
   else
   {
    echo "Il cookie non è stato ancora settato";
   }
  ?>
 </body>
</html>
