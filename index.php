<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet care</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-paw"></i>Happy Tail</a>
          <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#services">services</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
         
        <form action="#" class="login-form" method="post">
            <h3>sign in</h3>
            <input type="email" name="email" placeholder="Enter your email" id="" class="box">
            <input type="password" name="password" placeholder="Enter your password" id="" class="box">
            <div class="remember">
                <input type="checkbox" name="check" id="remember-me"> 
                <label for="remember-me"> remember-me</label>
            </div>
            <input type="submit" value="sign in" class="btn" name="button">
         
            <div class="links">
                <a href="#">forgot password</a>
                <a href="/signup.php">sign up</a>
            </div>
        </form>

        <?php

            if(isset($_POST['button']))
            {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "dlogin";

                $email = $_POST['email'];
                $password = $_POST['password'];

                echo  $email. "<br>";

                $conn = mysqli_connect($servername,$username,$password,$database);

                if(!$conn){
                    die("Failed to connect!". mysqli_connect_error());
                    echo "<br>";
                }
                else{
                   }

                $sql = "INSERT INTO `dlogin` (`email`, `password`) VALUES ('$email', '$password');";

                if(mysqli_query($conn,$sql)){
                    
                }
                else{
                    echo "Failed to insert". mysqli_error($conn);
                    
                }

                mysqli_close($conn);
            }

        ?>
          </header>
<!--header end-->

<section class="home"  id="home">
    <div class="content">
        <h3><span>hii  </span>Welcome to Happy Tail</h3>
        <a href="#shop" class="btn">Shop now</a>
    </div>
    <img src="img/bottom_wave.png" class="wave" alt="">

</section>
<!--home end-->
<section class="about" id="about">
   <div class="image">
      <img src="img/About.jpg" alt=""> 
   </div> 
   <div class="content">
       <h3>premium <span>pet food</span> Seller</h3>
       <p>We are happy tail a premium pet food seller.Fresh and happy food isour first priority </p>
    <a href="#" class="btn"> read more</a>
   
    </div>
 
</section>
<!--about sec end-->

<div class="dog-food">
    <div class="iamge">
        <img src="img/Dog food.png" alt="">
    </div>
    <div class="content">
        <h3><span>Air dried</span> Dog Food</h3>
        <p>Purepet Chicken and Milk Adult Dog Food is a complete and balanced diet which stimulates your pet’s regular activities keeping them happy and active. It is blended with essential nutrients that help maintain an ideal weight, providing all the health benefits. Purepet is a high quality food , approved by Veterinarians which is suitable for all the breeds.</p>
        <div class="amount">₹199-₹1999</div>                               
        <a href="#"><img src="img/shop_now_dog.png" alt=""></a>
    </div>
</div>

<div class="cat-food">
  
    <div class="content">
        <h3><span>Air dried</span> Cat Food</h3>
        <p> Purepet Smoked Chicken Adult Dog Food is a complete and balanced diet which stimulates your pet’s regular activities keeping them happy and active. It is blended with essential nutrients that help maintain an ideal weight, providing all the health benefits. Purepet is a high quality food , approved by Veterinarians which is suitable for all the breeds.</p>
        <div class="amount">₹199-$1999</div>   
        <a href="#"><img src="img/shop_now_cat.png" alt=""></a>
    </div>
    <div class="iamge">
        <img src="img/Cat food.png" alt="">
    </div>
</div>
<!--dog cat food banner section end-->
 
<section class="shop" id="shop">
    <h1 class="heading">Our <span>Products</span></h1>
    <div class="box-container">
        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
            </div>
            <div class="image">
               <img src="img/P-1.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">Price:₹150-₹1000 <br></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
              
            </div>
            <div class="image">
               <img src="img/P-2.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a> 
              <a href="#" class="fas fa-cart-plus"></a>
              
            </div>
            <div class="image">
               <img src="img/P-3.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
             
            </div>
            <div class="image">
               <img src="img/P-4.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
              
              
            </div>
            <div class="image">
               <img src="img/P-5.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
              
            </div>
            <div class="image">
               <img src="img/P-7.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
              <a href="https://dvp1234.github.io/Buy-now-pet-care/" class="fas fa-shopping-cart"></a>
              <a href="#" class="fas fa-cart-plus"></a>
              
            </div>
            <div class="image">
               <img src="img/P-8.jpg" alt=""> 
            </div>
            <div class="content">
                <h3>Air Dried Food</h3>
                <div class="amount">₹150-₹1000</div>
            </div>
        </div>
       
    </div>
</section>
<!---Shop ends-->

<section class="services" id="services">
    <h1 class="heading">Basic <span>Information</span></h1>
    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
             <h3>Dog Boarding</h3>
             <a href="https://www.akc.org/expert-advice/home-living/dog-boarding-tips-for-boarding-your-dog/" class="btn"> Read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
             <h3>Cat Boarding</h3>
             <a href="https://catbehaviorassociates.com/pet-sitter-or-boarding-kennel-which-one-is-right-for-your-cat/" class="btn"> Read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
             <h3>Bathing</h3>
             <a href="https://www.preventivevet.com/dogs/bathing-a-dog-at-home" class="btn"> Read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
             <h3>Healthy meal</h3>
             <a href="https://www.thedogbakery.com/blogs/news/top-20-healthy-homemade-dog-food-recipes-your-dog-will-love" class="btn"> Read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
             <h3>Activity Exercise</h3>
             <a href="https://www.onlynaturalpet.com/blogs/holistic-healthcare-library/exercise-for-dogs-and-cats-1" class="btn"> Read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
             <h3>Health care</h3>
             <a href="https://www.alouetteanimalhospital.ca/10-pet-care-tips/" class="btn"> Read more</a>
        </div>

    </div>

</section>



  <script src="js/scrpt.js"></script>
</body>
</html>