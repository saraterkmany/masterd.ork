<?php
session_start();
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
        function redirectToArabic() 
        {
            window.location.href = "/test.project/indexA.php";
        }
    </script>

</head>

<body>
    <div class="body1">
        <div class="header" onclick="toggleMenu()">
            <p class="menu"> &#9776;</p>
            <a href="index.php" class="logo">

                <img src="img/Image.png" alt="logo" style="width:150px ;
            height:70px "> </a>

            <div class="navBar" id="navBar">

                <ul class="navigation-items" id="nav-links">
                    <li> <a class="active" href="index.php">Home</a></li>
                    <li> <a href="#feature">Services</a></li>
                    <li> <a href="#foot">Contact</a></li>
                    <li> <a href="about.php">About</a></li>
                    <i class="fa-solid fa-earth-americas" id="lang"onclick="redirectToArabic()" style="cursor: pointer; color:white">

                    </i>

                </ul>


            </div>
        </div>
        <section class="body">

            <div class="content">
                <h1>Mastered Work <br> <span>to your hands!</span></h1>
                <p>
                    Together, hand to hand, we can achieve change and contribute to building a
                    bright future for Syria. Reconstruction requires collective cooperation from
                    all parties and the unification of efforts to enhance stability and growth.
                    Every step towards the future is a step towards rebuilding hope and prosperity in our beloved homeland.
                </p>
                <a href="about.php"><button> Read More </a></button>
            </div>
        </section>
    </div>
    <section id="feature">
        <div class="fe-box">
            <a href="wood.php"><img class="img" src="img/wood.jpg" alt="wood img">
                <h6> Wood </h6>
            </a>
        </div>
        <div class="fe-box1">
            <a href="steel.php"><img class="img" src="img/alumi.jpg" alt="stan img">
                <h6>Steel </h6>
            </a>
        </div>
        <div class="fe-box2">
            <a href="paint.php"><img src="img/paint.jpg" alt="paint img">
                <h6> Paint</h6>
            </a>
        </div>
        <div class="fe-box3">
            <a href="alumi.php"> <img src="img/amumin.jpg" alt="alumi img">
                <h6> Aluminium</h6>
            </a>
        </div>
        <div class="fe-boxs">
            <a href="pumice.php"> <img src="img/khafantools.jpg" alt="khafan image" />
                <h6>Pumice construction</h6>
            </a>
        </div>

    </section>
    <section id="product1" class="section-p1">

        <h2>Featured Services</h2>
        <p>Turn your ideas into reality with premium quality.</p>

        <div class="pro-container">

            <?php
            include('get_product.php');
            ?>
            <?php
            while ($row = $res->fetch_assoc()) {
            ?>


                <div class="pro">
                    <img src="img/<?php echo $row['Product_image']; ?>" alt="">
                    <div class="description">
                        <span><?php echo $row['NomProduct']; ?></span>



                    </div>
                </div>
            <?php } ?>



        </div>


    </section>
    <!--<section id="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="right">-></i></a>
        </section>-->
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
            <a href="#feature">Services</a>

        </div>


        <div class="copyright">
            <p>© 2024,Masterd Work</p>
        </div>
    </footer>
</body>

</html>