<?php 
// Declaring a variable to hold the IP
// address getHostName() gets the name 
// of the local machine getHostByName() 
// gets the corresponding IP 
$localIP = getHostByName(getHostName()); 
  
// Displaying the address  
echo $localIP; 
function getIPAddress() {  
  //whether ip is from the share internet
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
      $ip = $_SERVER['HTTP_CLIENT_IP'];  
   }  
  //whether ip is from the proxy 
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
  }  
  //whether ip is from the remote address 
  else{  
         $ip = $_SERVER['REMOTE_ADDR'];  
  }  
  return $ip;  
}
echo " ,  ";
//echo getIPAddress();
echo $realIP = file_get_contents("http://ipecho.net/plain");
?> 
