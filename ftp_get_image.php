<?php
echo "v4";

$conn = ftp_connect("ftp://morethrust.synology.me:224") or die("Could not connect");
$res = ftp_login($conn,"cam","more160340");

if($res)
{
    echo "Success FTP is Connecting";
}
else
{
    echo "FTP don't connect";
}

/*
// FTP server details
$ftpHost   = 'ftp.morethrust.synology.me:224';
$ftpUsername = 'cam';
$ftpPassword = 'more160340';

// open an FTP connection
$connId = ftp_connect($ftpHost) or die("Couldn't connect to $ftpHost");

// try to login
if(@ftp_login($connId, $ftpUsername, $ftpPassword)){
    echo "Connected as" . $ftpUsername."@".$ftpHost;
}else{
    echo "Couldn't connect as $ftpUsername";
}

// close the connection
ftp_close($connId);
*/

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