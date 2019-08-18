<?php
echo "v1";


$connect= ftp_connect("morethrust.synology.me:224")
or die ("Connection to server unsuccessful");

$user= "cam";

$password= "more160340";

$login= ftp_login($connect, $user, $password) 
or die ("Login was unsuccessful");




//ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg
//ftp://115.87.177.18:224/CAM/UDON_CAM/

?>
<!--
<html>
    <head></head>
    <body>123321
        <img src="ftp://cam:more160340@morethrust.synology.me:224/CAM/UDON_CAM/20140810/2014081021083801.jpg"/>
        
    
    </body>
</html> 
-->