<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('Query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('Query failed');
      $message[] = 'Product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>Discover the joy of reading with our carefully selected books, delivered straight to your doorstep. 
         Whether you're looking for bestsellers, timeless classics, or hidden gems, we ensure each book meets the highest quality standards. 
         Enjoy hassle-free ordering and fast delivery, making reading more accessible and enjoyable than ever!</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('Query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }
      else{
         echo '<p class="empty">No products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>About us</h3>
         <p>📚 Welcome to FavBook! </p>
         <br>
         <p>📚 In here, we are passionate about books and reading. Our mission is to provide a seamless online bookstore experience, offering a vast collection of books at the best prices. Whether you love fiction, non-fiction, or academic books, we’ve got you covered! 🚀📖</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>📞 Have Any Questions? We’re Here to Help!</p>
      <br>
      <p>💬 Live Chat – Get instant support from our team.</p>
      <p>📧 Email Us – Reach us at support@favbook.com.</p>
      <p>📞 Call Us – +94 76 395 3578 for quick assistance.</p>
      <p>📍 Visit Us – Drop by our store anytime!</p>
      <br>
      <p>Your satisfaction is our priority! 🤝📚</p>

      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>