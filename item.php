<?php
header("Content-type: text/html; charset=utf-8");
echo $_GET['k'];
$keyword=$_GET['k'];
include_once "app/lib/tbksdk/TopSdk.php";
$c = new TopClient;
$c->appkey = "21152817";
$c->secretKey = "fa0cde9f9c4cecd4414d8187f8743b48";
$req = new TaobaokeItemsGetRequest;
$req->setFields("num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume");
$req->setKeyword($keyword);
$req->setStartTotalnum("5000");
$resp = $c->execute($req);
//print_r($resp);
include_once "app/lib/rb.php";
R::setup('mysql:host=127.0.0.1;dbname=taobaoke',
'root','');

// $TaobaokeItem->click_url="hshs";
// $TaobaokeItem->commission="333.33";
// R::store($TaobaokeItem);


$dom = new DomDocument();
$dom->loadXML($resp->asXML());
$items=$dom->getElementsByTagName("taobaoke_item");
for($i=0;$i<$items->length;$i++){
	$it= $items->item($i);
	$nodesOfIt=$it->childNodes;
	echo "<p>";
	$TaobaokeItem = R::dispense('TaobaokeItem');
	for($ni=0;$ni<$nodesOfIt->length;$ni++){
		$nodename=$nodesOfIt->item($ni)->nodeName;
		$nodevalue=$nodesOfIt->item($ni)->nodeValue;
		$TaobaokeItem->$nodename=$nodevalue;
		echo "<br>";
	}
	$TaobaokeItem->keyword=$keyword;
	R::store($TaobaokeItem);
	echo "</p>";
}

// echo $it->hasChildNodes();
// $itmenode=$it->firstChild;
// echo $itmenode->textContent;
