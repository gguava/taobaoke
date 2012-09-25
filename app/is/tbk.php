<?php
class tbk{
	var $c;
	var $req;
	var $xml;
	function __construct(){
		include_once iBasePath."/app/lib/tbksdk/TopSdk.php";
		$c = new TopClient;
		$c->appkey = "21152817";
		$c->secretKey = "fa0cde9f9c4cecd4414d8187f8743b48";
		$this->c=$c;
		
		$req = new TaobaokeItemsGetRequest;
		$req->setFields("num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume");
		$req->setKeyword("高跟鞋");
		$req->setStartTotalnum("5000");
		$this->req=$req;
		
		//$resp = $c->execute($req);
		//print_r($resp);
	}
	
	public function setFields($fields="num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume"){
		$this->req->setFields($fields);
	}
	
	public function setKeyword($keyword="高跟鞋"){
		$this->req->setKeyword($keyword);
	}
	
	public function getXml(){
		$resp=$this->c->execute($this->req);
		$this->xml=$resp->asXML();
		return $this->xml;
	}
}