<?php
class ItemDom{
	var $dom;
	var $items;
	var $items_num;
	function __construct($xmlstring){
		$dom = new DomDocument();
		$this->dom=$dom;
		$this->dom->loadXML($xmlstring);	
		$items=$this->dom->getElementsByTagName("taobaoke_item");
		$this->items=$items;
		$this->items_num=count($items);
	}
	
	//获取5个产品的相片和名称
	//把产品添加进数据库（添加不了关键词）
	//返回某一个item对象
	
	
}