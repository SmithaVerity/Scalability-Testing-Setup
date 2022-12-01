<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Scalability Testing </title>
  </head>
  <body>
    <div class="main_page">
       <center>
           <h3>Public IP Address of this instance is:</h3>
           <p id="gfg"><?php echo $realIP = file_get_contents("http://ipecho.net/plain"); ?></p>
       </center>
    </div>
</html>
