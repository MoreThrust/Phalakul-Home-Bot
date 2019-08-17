<?

header('Content-Type: image/jpeg');

//echo file_get_contents('ftp://username:password@ftp.example.com/path/image.jpg');
echo file_get_contents('ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg');
//ftp://cam@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg
?>
<a src="image.php" /><br>
<img src='ftp://cam:more160340@192.168.1.48:224/CAM/UDON_CAM/20140808/2014080801150401.jpg' alt='my picture'>


