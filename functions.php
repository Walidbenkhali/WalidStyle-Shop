<?php
require_once 'config.php';
function getProduct($id){global $products;return isset($products[$id])?$products[$id]:null;}
function getProductsByCategory($category){global $products;return array_filter($products,function($p)use($category){return $p['category']===$category;});}
function getCategoryInfo($slug){global $categories;return isset($categories[$slug])?$categories[$slug]:null;}
function addToCart($id,$q=1,$s='M',$c=''){$p=getProduct($id);if(!$p)return false;$k=$id.'_'.$s.'_'.$c;if(isset($_SESSION['cart'][$k])){$_SESSION['cart'][$k]['quantity']+=$q;}else{$_SESSION['cart'][$k]=['product_id'=>$id,'name'=>$p['name'],'price'=>$p['price'],'image'=>$p['image'],'quantity'=>$q,'size'=>$s,'color'=>$c];}return true;}
function removeFromCart($k){if(isset($_SESSION['cart'][$k])){unset($_SESSION['cart'][$k]);return true;}return false;}
function getCart(){return isset($_SESSION['cart'])?$_SESSION['cart']:[];}
function getCartTotal(){$t=0;foreach(getCart() as $i){$t+=$i['price']*$i['quantity'];}return $t;}
function getCartCount(){$c=0;foreach(getCart() as $i){$c+=$i['quantity'];}return $c;}
function clearCart(){$_SESSION['cart']=[];}
function formatPrice($p){return '$'.number_format($p,2);}
function getStarRating($r){$h='';$f=floor($r);$hf=($r-$f)>=0.5;for($i=0;$i<$f;$i++){$h.='<i class="fas fa-star"></i>';}if($hf){$h.='<i class="fas fa-star-half-alt"></i>';}$e=5-ceil($r);for($i=0;$i<$e;$i++){$h.='<i class="far fa-star"></i>';}return $h;}
?>