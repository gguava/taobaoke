<?php
class test{
	public function k($keyword){
		header("Content-type: text/html; charset=utf-8");
		$keyword=urldecode($keyword);
		//echo $keyword;
		include_once iBasePath."/app/is/tbk.php";
		$tbk=new tbk();
		$tbk->setKeyword($keyword);
		$xml=$tbk->getXml();
		
		include_once iBasePath."/app/is/ItemDom.php";
		$itemDom=new ItemDom($xml);
		print_r($itemDom->items);
		$domList=new DOMNodeList();
		$domList=$itemDom->items;
		$item=$domList->item(1);
		print_r($item);
		//$item->
	}
	public function rb(){
		set_include_path(iBasePath."/app/lib/");
		include_once 'rb.php';
		R::setup('mysql:host=127.0.0.1;dbname=taobaoke',
        'root','');
		$TaobaokeItem = R::dispense('TaobaokeItem');
		$TaobaokeItem->click_url="hshs";
		$TaobaokeItem->commission="333.33";
		R::store($TaobaokeItem);
	}
	public function t($is){
		echo "s";
		echo $is;
	}
}