<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <br>
         <br>
         <p>📚 Why Choose FavBook? 📚</p>
         <br>
         <p>✔ Wide Collection – Thousands of books across all genres!</p>
         <p>✔ Best Prices – Affordable books with great deals.</p>
         <p>✔ Fast Delivery – Get your books delivered quickly!</p>
         <p>✔ Secure Payment – Safe and easy transactions.</p>
         <p>✔ Customer Support – Friendly support for all queries.</p>
         <p>Your perfect book is just a click away! 🚀📖</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Great bookstore with a wide selection! The staff was very friendly and helped me find exactly what I was looking for. 
            Will visit again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alex Roy</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Loved the collection here! Easy ordering process and fast delivery. The books were well-packed and in perfect condition. 
            Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lisa Joe</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Excellent service and a vast variety of books. The website is user-friendly, and the checkout process is smooth. 
            Definitely coming back!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>This bookstore offers great deals and discounts. I found some rare books at amazing prices. The shipping was also very quick.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David Lee</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I love how well-organized this store is. The book recommendations were spot-on, and the customer service was fantastic. 
            A great experience!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sarah Kim</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>One of the best online bookstores I’ve used. The book descriptions are detailed, and the delivery was faster than expected. 
            I’ll buy again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Michael Brown</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>William Shakespeare</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jane Austen</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>George Orwell</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Agatha Christie</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mark Twain</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K.Rowling </h3>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>