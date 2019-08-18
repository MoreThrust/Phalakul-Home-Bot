
<?php
include("Status.php");
//https://192.168.1.48:5001/fbdownload/2019073109070902.jpg?_sid=%22WzL43u4dQRf3A1920PCN106103%22&mode=open&dlink=%222f43414d2f55444f4e5f43414d2f32303139303733312f323031393037333130393037303930322e6a7067%22&stdhtml=true&SynoToken=czLiQqqmEZT02
//https://192.168.1.48:5001/fbdownload/2014082321302202.jpg?_sid=%22WzL43u4dQRf3A1920PCN106103%22&mode=open&dlink=%222f43414d2f55444f4e5f43414d2f32303134303832332f323031343038323332313330323230322e6a7067%22&stdhtml=true&SynoToken=czLiQqqmEZT02


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

$st_cam = "https://192.168.1.48:5001/fbdownload/".$st_Voltage.".jpg?_sid=%22WzL43u4dQRf3A1920PCN106103%22&mode=open&dlink=%222f43414d2f55444f4e5f43414d2f32303134303832332f323031343038323332313330323230322e6a7067%22&stdhtml=true&SynoToken=czLiQqqmEZT02";

?>

<html>
    <head></head>
    <body>
        <img src=""$st_cam""/>
        
    

    </body>
</html> 
