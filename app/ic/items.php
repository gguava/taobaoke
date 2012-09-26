<?php
class items{
	public function show_itmes($keyword_id){
		//header("Content-type: text/html; charset=utf-8");
		$keyword_id=str_replace(".html", "", $keyword_id);
		
		
// 		echo $keyword_id;
		$keywords = R::find('Keyword','id='.$keyword_id);
// 		print_r($keywords);
// 		echo $keywords[$keyword_id]->k;
		
		$items = R::find('TaobaokeItem','keyword='.$keyword_id);
		$itemsArray=array();
		foreach ($items as $item){
			$click_url=str_replace("http://s.click.taobao.com/t?e=", "", $item->click_url);
			$item_array["pic_url"]=$item->pic_url;
			$item_array["click_url"]=$click_url;
			$item_array["title"]=$item->title;
			$item_array["price"]=$item->price;
			//print_r($item_array);
// 			echo "<hr>";

			array_push($itemsArray, $item_array);
		}
		
		
		include_once "app/lib/iSmarty.php";
		$is=new iSmarty();
		$is->assign("baseurl", iDomain);
		
		$is->assign("title", $keywords[$keyword_id]->k);
		$is->assign("itemsArray", $itemsArray);
		$is->display("items");
		
	}
	public function fushi2012(){
		
		$keywords = R::find('Keyword');
		$itemsArray=array();
		
		foreach ($keywords as $item){
// 			echo $item->id;
// 			echo $item->k;
			//print_r($item);
			$item_array["id"]=$item->id;
			$item_array["k"]=$item->k;
			array_push($itemsArray, $item_array);
		}
		
		include_once "app/lib/iSmarty.php";
		$is=new iSmarty();
		$is->assign("baseurl", iDomain);
		
		$is->assign("title", "2012秋季流行服饰搭配推荐|美丽说蘑菇街女装男装网站");
		
		$is->assign("itemsArray", $itemsArray);
		$is->display("fushi2012");
	}
}