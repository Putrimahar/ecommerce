<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./main.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
         <div class="image">
         <img src="images/7.png" alt="">
         </div>
         <div class="content">
            <span>your interest dish prepared</span>
            <h3>vegetarian diet</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/4.png" alt="">
         </div>
         <div class="content">
            <span>your fresh fast food</span>
            <h3>fast food served fast</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

    

      <div class="swiper-slide slide">
         <div class="image">
         <img src="images/6.png" alt="">
         </div>
         <div class="content">
            <span>spicy nor spicy</span>
            <h3>street style noddles</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<!-- OFFER SECTION -------------------------------------------------->
<section class="offerSection">
        <div class="sectionBanner">
            <span>HURRY UP!</span>
            <h1>DEAL OF THE MONTH</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, neque.</p>
        </div>
        <div class="empty"></div>
        <div class="offerContent">
            <div class="countdown">
                00  <span>Days</span> :
                00  <span>Hrs</span> :
                00 <span>Min</span> :
                00 <span>Sec</span>
            </div>

            <div class="sectionTitle">
                <h3 class="heading">Best Seller</h3>
                <span class="subTitle">Grab your best offer of our best of the month.</span>
            </div>

            <div class="contentWrapper grid">
                <div class="boxDiv">
                    <div class="imgDiv">
                        <img src="images/image10.png" alt="Food Image">
                    </div>
                    <div class="imgDesc">
                        <span class="commentCount">
                            872 <i class='bx bxs-chat comIcon'></i>
                        </span>
                        <span class="stars">
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        </span>
                        <span class="text">
                            Lorem Food1
                        </span>

                        <span class="Gtext">
                            I70g
                        </span>
                     
                    </div>

                   
                </div>
                <div class="boxDiv">
                    <div class="imgDiv">
                        <img src="images/image12.png" alt="Food Image">
                    </div>
                    <div class="imgDesc">
                        <span class="commentCount">
                            153 <i class='bx bxs-chat comIcon'></i>
                        </span>
                        <span class="stars">
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        </span>
                        <span class="text">
                            Lorem Food2
                        </span>

                        <span class="Gtext">
                            210g
                        </span>
                       
                </div>
                </div>
                <div class="boxDiv">
                    <div class="imgDiv">
                        <img src="images/image11.png" alt="Food Image">
                    </div>
                    
                    <div class="imgDesc">
                        <span class="commentCount">
                            123 <i class='bx bxs-chat comIcon'></i>
                        </span>
                        <span class="stars">
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-favorite starIcon"></i>
                        <i class="uis uis-star-half-alt starIcon"></i>
                        </span>
                        <span class="text">
                            Lorem Food3
                        </span>

                        <span class="Gtext">
                            I40g
                        </span>
                      
                </div>

            </div>
              
        </div>

</section>



<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="40" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="emptyMessage">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

    <!-- CHEF SECTION ================================================ -->
    <section class="section staffSection" id="staff">
        <div class="sectionContent container">
           <div class="sectionIntro">
               <div class="headerInfo">
               <h3 class="heading">our champion team</h3>
               <p class="subTitle">Chefs behind your delicious meal </p>
               </div>
           </div>

           <div class="chefData" id="chef_Data">
            <div class="chefBox">
               <div class="chefImg"> <img src="./Images/chef4.png" alt="Food Image"></div>
                <span>Chef. Linner Ozik</span>
                <p>Head of staff.</p>
            </div>
            <div class="chefBox ">
                <div class="chefImg"> <img src="./Images/chef2.png" alt="Food Image"></div>
                <span>Chef. Menai Promise</span>
                <p>Order Manager.</p>
            </div>
            <div class="chefBox ">
                <div class="chefImg"> <img src="./Images/chef3.png" alt="Food Image"></div>
                <span>Chef. Pickka Lin</span>
                <p>Head of Packaging Team.</p>
            </div>
            <div class="chefBox ">
                <div class="chefImg"> <img src="./Images/chef1.png" alt="Food Image"></div>
                <span>Chef. Banja Kovin</span>
                <p>Shopping Manager</p>
            </div>

            <!-- <div class="btn" id="btn">
                <button type="button">View All</button>
            </div> -->
        </div>

    </section>

    <!-- LATEST NEWS SECTION --------------------------------------------->

    <section class="newsSection section" >
        <div class="container">
            <div class="sectionIntro">
                <h1 class="title">Latest Blog</h1>
            <p class="subTitle">We oftenly update our guest, find out! </p>
            </div>
            <div class="sectionContent ">
                <div class="boxes grid ">
                    
                        <div class="box">
                            <img src="images/image2.png" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                  
                   
                        <div class="box">
                            <img src="images/image8.jpg" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                    
                    
                        <div class="box">
                            <img src="images/image13.jpg" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                        <div class="box sHideNews">
                            <img src="images/image9.jpg" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                  
                   
                        <div class="box sHideNews">
                            <img src="images/image5.jpg" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                    
                    
                        <div class="box sHideNews">
                            <img src="images/image3.jpg" alt="Food image">
                            <div class="boxInfo">
                             <div class="infoTop">
                                 <span class="date">Aug, 2021</span>
                                 <span class="details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, soluta?</span>
                             </div>
                             <div class="infoBottom">
                                 <a href="#">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                 <i class='bx bxs-share-alt shareIcon' ></i>
                             </div>
                            </div>
                         </div>
                

                </div>
              
            </div>
        </div>
    </section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

let launchDate = new Date("May 10, 2022 12:00:00").getTime();
let timer = setInterval(tick, 1000)


function tick (){
let now = new Date().getTime();
let t = launchDate - now;

if (t > 0){
    // Algorith to calculate days...
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    if (days < 10){
        days  = "0" + days;
    }

// Algorith to calculate hours....
    let hrs = Math.floor((t % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
    if (hrs < 10){
        hrs  = "0" + hrs;
    }
// Algorith to calculate Minutes ....
    let mins = Math.floor((t % (1000 * 60 * 60 )) / (1000 * 60));
    if (mins < 10){
        mins  = "0" + mins;
    }

// Algorithm to calculate Seconds....
   let secs = Math.floor((t % (1000 * 60)) / (1000));
   if (secs < 10){
    secs  = "0" + secs;
}

let time = `${days} Days  |   ${hrs}  Hrs   |    ${mins} Mins  |  ${secs}  Sec`;

    document.querySelector('.countdown').innerHTML = time;
}
}
</script>

</body>
</html>