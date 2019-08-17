<?php

// define some variables
$local_file = '/CAM/UDON_CAM/20140808/2014080801150401.jpg';
$server_file = 'ftp://cam@192.168.1.48:224';

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to download $server_file and save to $local_file
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Successfully written to $local_file\n";
} else {
    echo "There was a problem\n";
}

// close the connection
ftp_close($conn_id);

?>

//echo file_get_contents('ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg');
//ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg