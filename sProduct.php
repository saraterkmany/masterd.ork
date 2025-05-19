

<?php
session_start();
include('connection.php');
if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];
    $con=db_connect();
    $stmt = $con ->prepare("SELECT * FROM product WHERE IdProduct=?");
    $stmt -> execute(array($product_id));
    $row= $stmt->fetch();
    $stmt -> execute();
    $product=$stmt->get_result();
}
else{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>

<head>
    <title>Masterd Work</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/logo.jpeg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--for responsive menu-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--bootsrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style sheet link-->
    <link rel="stylesheet" href="style.css" />
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById("nav-links");
            navLinks.classList.toggle("active");
        }
        function redirectToArabic() {
            window.location.href = "/test.project/Eng/indexA.php";
        }
    </script>

</head>

<body>
    <div class="header" onclick="toggleMenu()" id="header">
        <p class="menu"> &#9776;</p>
        <a href="index.php" class="logo">

            <img src="img/Image.png" alt="logo" style="width:150px ;
            height:70px "> </a>

        <div class="navBar" id="navBar">

            <ul class="navigation-items" id="nav-links">
                <li> <a href="index.php">Home</a></li>
                <li> <a class="active" href="index.php #feature">Services</a></li>
                <li> <a href="#foot">Contact</a></li>
                <li> <a href="about.php">About</a></li>
                <i class="fa-solid fa-earth-americas" id="lang" onclick="redirectToArabic()" style="cursor: pointer; color:white">

                </i>

            </ul>


        </div>
    </div>
<section id="prodetails" class="section-p1">
    <?php while($row= $product->fetch_assoc()){
?>
        <div class="single-pro-image">
            <img src="img/<?php echo $row['Product_image']?>" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
            
                <div class="small-img-col">
                    <img src="img/<?php echo $row['Product_img1']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/<?php echo $row['Product_img2']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/<?php echo $row['Product_img3']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/<?php echo $row['Product_img4']?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
       <?php } ?>
       
    </section>

    <footer class="section-p1" id="foot">
        <div class="col">
            <a href="index.php" class="logo"><img src="img/logo.png" alt="logo" /></a>
            <h4>contact</h4>
            <p><strong>Address:</strong> Tripoli,Lebanon</p>
            <p><strong>Phone:</strong> (+961)70/053 080</p>
            <p><strong>Hours:</strong> 8:00 AM - 6:00 PM ,Mon-Sat</p>

        </div>
        <div class="col1">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="index.php #feature">Services</a>

        </div>


        <div class="copyright">
            <p>© 2024,Masterd Work</p>
        </div>
    </footer>
    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img"); 

       smallimg[0].onclick=function(){
             MainImg.src=smallimg[0].src;
        }
        
       smallimg[1].onclick=function(){
        MainImg.src=smallimg[1].src;
        }
        
       smallimg[2].onclick=function(){
        MainImg.src=smallimg[2].src;
        }
        
       smallimg[3].onclick=function(){
        MainImg.src=smallimg[3].src;
        }
        smallimg[4].onclick=function(){
        MainImg.src=smallimg[4].src;
        }
    </script>
</body>

</html>