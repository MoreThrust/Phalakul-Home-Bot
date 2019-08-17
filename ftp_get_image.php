<?php
echo "start3";
$ftpHost   = 'ftp://115.87.177.18:224';
$ftpUsername = 'cam';
$ftpPassword = 'more160340';

// open an FTP connection
$connId = ftp_connect($ftpHost) or die("Couldn't connect to $ftpHost");

// try to login
if(@ftp_login($connId, $ftpUsername, $ftpPassword)){
    echo "Connected as $ftpUsername@$ftpHost";
}else{
    echo "Couldn't connect as $ftpUsername";
}

// close the connection
ftp_close($connId);

//ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg
//ftp://115.87.177.18:224/CAM/UDON_CAM/

?>