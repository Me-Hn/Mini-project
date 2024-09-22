<?php


include('connection.php');
include('query.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Product Detail</title>
    <link rel="stylesheet" href="styles.css">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .product-detail {
            display: flex;
            margin: 20px 0;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-image img {
           height: 250px;
           width: 250px;
            border-radius: 5px;
            border: solid 2px black;
        }
        .product-info {
            margin-left: 20px;
        }
        .product-info h1 {
            margin: 0;
            font-size: 24px;
        }
        .product-info p {
            margin: 10px 0;
        }
        .product-info .price {
            font-size: 20px;
            color: #333;
        }
        .quantity-selector {
            margin: 20px 0;
        }
        .quantity-selector label {
            margin-right: 10px;
        }
        .quantity-selector input {
            width: 60px;
            text-align: center;
        }
        .checkout-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        .checkout-btn:hover {
            background: #218838;
        }
        .back-to-cart {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        .back-to-cart:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>My Shopping Cart</h1>
    </header>


    <?php 
    if(isset($_GET['proid'])){
      $id = $_GET['proid'];
     $query = mysqli_query($mysqli,"select * from product where id=$id ");
    $data = mysqli_fetch_assoc($query);
    

    ?>
     <form action="" method="post">
    <div class="container">
        <div class="product-detail">
            <div class="product-image">
                <img src="../adminpanel/img/<?php echo $data['pro_image']?>" alt="Product Image">
            </div><br>
            <div class="product-info">
                <h1>Product Name</h1>
                <p><?php echo $data['pro_name']?></p>
                <h1>Product Name</h1>
                <p><?php echo $data['pro_discription']?></p>
                <p class="price"><?php echo $data['pro_price']?></p>
                <div class="quantity-selector">
                    <label for="quantity">Quantity:</label>
                    <input type="number"  name="quantity" min="1" value="1">
                </div>
    <button type="submit" class="btn btn-warning" name="addpro">add to cart</button>
    </div>
        </div>
        <a href="index.php" class="back-to-cart">Back to Cart</a>
    </div>
   

    <input type="hidden" name="proid" value="<?php echo $data['id']?>">
    <input type="hidden" name="proname" value="<?php echo $data['pro_name']?>">
    <input type="hidden" name="prods" value="<?php echo $data['pro_discription']?>">
    <input type="hidden" name="propr" value="<?php echo $data['pro_price']?>">
    <input type="hidden" name="proimg" value="<?php echo $data['pro_image']?>">
    </form>
<?php }?>
</body>
</html>
