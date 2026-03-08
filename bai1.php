<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
    <style>
        .container{
            display:flex;
            gap:20px;
        }
        .product{
            border:1px solid #ccc;
            padding:10px;
            width:200px;
            text-align:center;
        }
        img{
            width:150px;
        }
        .old{
            text-decoration: line-through;
            color:red;
        }
    </style>
</head>
<body>

<?php

$products = [
    ["name"=>"Rau củ sạch 1","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>150000,"sale_price"=>0],
    ["name"=>"Rau củ sạch 2","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>150000,"sale_price"=>120000],
    ["name"=>"Rau củ sạch 3","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>100000,"sale_price"=>0],
    ["name"=>"Rau củ sạch 4","image"=>"https://cdn-icons-png.flaticon.com/512/2153/2153788.png","price"=>130000,"sale_price"=>120000],
];

?>

<div class="container">

<?php
foreach($products as $p){
?>

<div class="product">
    <img src="<?php echo $p['image']; ?>">
    <h4><?php echo $p['name']; ?></h4>

    <?php
    if($p['sale_price'] == 0){
        echo "Price: ".number_format($p['price'])." đ";
    }else{
        echo "<span class='old'>".number_format($p['price'])." đ</span> ";
        echo "Price: ".number_format($p['sale_price'])." đ";
    }
    ?>

</div>

<?php
}
?>

</div>

</body>
</html>
