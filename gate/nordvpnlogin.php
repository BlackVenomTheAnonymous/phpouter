t<?php 

$username = "kingsahil1836@gmail.com";
$password = "123@Password";

$curl = curl_init();

$post_data = [
    'username' => $username,
    'password' => $password
];

curl_setopt($curl, CURLOPT_URL, "https://zwyr157wwiu6eior.com/v1/users/tokens");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'Accept: application/json',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
    'Pragma: no-cache'
));

$response = curl_exec($curl);
echo $response;

if (curl_errno($curl)) {
    echo 'Error:' . curl_error($curl);
}

curl_close($curl);

$data = json_decode($response, true);
$tk = $data['token'];
$token = base64_encode("token:$tk");

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://zwyr157wwiu6eior.com/v1/users/services",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
    "Pragma: no-cache",
    "Authorization: Basic ".$token
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} 

$data = json_decode($response, true);
$expiry = $data['expires_at'];

$ct = time();
$ut = strtotime($expiry);
$compute = ($ut-$ct)/86400;
$days_left = round($compute);

$plan = "Premium";

echo "Plan: ".$plan.", Expiry: ".$expiry.", Days Left: ".$days_left;

?>