<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài 2</title>

<style>
table{
    border-collapse: collapse;
    width:700px;
}
th,td{
    border:1px solid #ccc;
    padding:8px;
    text-align:center;
}
img{
    width:40px;
}
</style>

</head>
<body>

<?php

$carts = [
["id"=>1,"name"=>"Rau củ sạch 1","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>150000,"quantity"=>2],
["id"=>2,"name"=>"Rau củ sạch 2","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>180000,"quantity"=>3],
["id"=>3,"name"=>"Rau củ sạch 3","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>100000,"quantity"=>5],
["id"=>4,"name"=>"Rau củ sạch 4","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>120000,"quantity"=>9]
];

$totalPrice = 0;
$totalQuantity = 0;

?>

<table>

<tr>
<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Sub Total</th>
</tr>

<?php
foreach($carts as $c){

$sub = $c['price'] * $c['quantity'];
$totalPrice += $sub;
$totalQuantity += $c['quantity'];

?>

<tr>
<td><?php echo $c['id']; ?></td>
<td><img src="<?php echo $c['image']; ?>"></td>
<td><?php echo $c['name']; ?></td>
<td><?php echo number_format($c['price']); ?> đ</td>
<td><?php echo $c['quantity']; ?></td>
<td><?php echo number_format($sub); ?> đ</td>
</tr>

<?php } ?>

<tr>
<td colspan="4"></td>
<td><b>Total quantity</b></td>
<td><?php echo $totalQuantity; ?></td>
</tr>

<tr>
<td colspan="4"></td>
<td><b>Total price</b></td>
<td><?php echo number_format($totalPrice); ?> đ</td>
</tr>

</table>

</body>
</html>
