<?php
 
$curl = curl_init();
$img_file = ("http://static.weloveshopping.com/shop/client/000032/weloveplate/replate002.jpg");
$data = array("image" => new CURLFile($img_file, mime_content_type($img_file), basename($img_file)));
 
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.aiforthai.in.th/lpr",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: multipart/form-data",
    "apikey: MWj32O4MsQUohPtEbTSqGcPr9UPX1B6I"
  )
));
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>