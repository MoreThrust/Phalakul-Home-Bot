<?php
$content = '';
$ftp_server = "192.168.1.48";
$ftp_user = "cam";
$ftp_pass = "more160340";

$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 

if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
    $content .= "<br />Connected as $ftp_user@$ftp_server\n";
} else {
    $content .= "<br />Couldn't connect as $ftp_user\n";
}

$files = ftp_nlist($conn_id, $dir);
foreach($files as $file_name)
{
    $content.=  '
         <div>
            <a href="ftp://'.$ftp_server.'/'.$file_name.'">
            <img src="ftp://'.$ftp_server.'/'.$file_name.'"    width="150" height="150">
           </a>
         </div>';


}

//echo file_get_contents('ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg');
//ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg