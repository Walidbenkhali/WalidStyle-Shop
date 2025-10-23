<?php require_once 'config.php';require_once 'functions.php';header('Content-Type: application/json');$a=isset($_POST['action'])?$_POST['action']:'';
switch($a){case 'add':$id=(int)$_POST['product_id'];$q=(int)$_POST['quantity'];$s=$_POST['size'];$c=$_POST['color'];
if(addToCart($id,$q,$s,$c)){echo json_encode(['success'=>true,'cart_count'=>getCartCount()]);}else{echo json_encode(['success'=>false]);}break;
case 'remove':$k=$_POST['cart_key'];if(removeFromCart($k)){echo json_encode(['success'=>true,'cart_count'=>getCartCount()]);}else{echo json_encode(['success'=>false]);}break;
default:echo json_encode(['success'=>false]);
}?>