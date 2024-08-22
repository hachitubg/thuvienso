<?php
namespace App;
use Session;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		if($item->khuyenmai != 0){
			$giohang = ['qty'=>0, 'price' => $item->khuyenmai, 'item' => $item];
		}
		else{
			$giohang = ['qty'=>0, 'price' => $item->dongia, 'item' => $item];
		}
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['qty']++;
		if($item->khuyenmai != 0){
			$giohang['price'] = ((100-$item->khuyenmai)*$item->dongia)/100 ;
		}
		else{
			$giohang['price'] = $item->dongia;
		}
		$this->items[$id] = $giohang;
		$this->totalQty++;
		if($item->khuyenmai != 0){
			$this->totalPrice += ((100-$item->khuyenmai)*$item->dongia)/100;
		}
		else{	
			$this->totalPrice += $item->dongia;
		}
		
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price']*$this->items[$id]['qty'];
		unset($this->items[$id]);
	}
}
