<?php
    session_start();

    include("php/config.php");
    if(isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="home.php">Chevron Educational</a></div>
            <ul class="links"> 
                /*
                <?php
                    $id = $_SESSION['valid'];
                    $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");
                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_Score = $result['Score'];
                        $res_id = $result['Id'];
                    }
                ?>*/
                <li><a href="hero">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="service">Problem</a></li>
                <li><a href="contact">Contact us</a></li>
                <li><a href="php/logout.php">Logout</a></li>
            </ul>
            
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
                <div class="dropdown-content">
                    <a href="hero">Home</a>
                    <a href="about">About</a>
                    <a href="service">Problem</a>
                    <a href="contact">Contact us</a>
                    <li><a href="php/logout.php">Logout</a></li>
                </div>
            </div>
        </div>

        
    </header>
    <main>
        <section id="hero">
            <h1>Welcome</h1>
            <p>
                This website serves as a guide to navigate through innovative solutions pertaining to diverse <br>
                and environmentally friendly energy options for Chevron.
            </p>
        </section>
    </main>
    <div class="dropdown">
        <span>Study Links</span>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
            <!-- Add more links as needed -->
        </div>
    </div>
    
    <!---Footer--->
    <footer>
        <div class="footer" style="background-image: url('')">
            <div class="footer-top section">
                <div class="container grid-list">
                    <div class="footer-brand">
                        <a href="home.php" class="logo">
                            <img src="Image/chevron_logo.png" width="162" height="100" alt="">
                        </a>
                        <p class="footer-brand-text">This website serves as a guide to navigate through innovative solutions pertaining to diverse <br>
                            and environmentally friendly energy options for Chevron.</p>
                            <div class="wrapper">
                                <span class="span">Add: </span>
                                <address class="address">6001 Bollinger Canyon Road, San Ramon, CA 94583, USA</address>
                            </div>
                        
                            <div class="wrapper">
                                <span class="span">Call: </span>

                                <a href="tel:+19258421000" class="footer-link">+1 925 842 1000</a>
                            </div>

                            <div class="wrapper">
                                <span class="span">Email: </span>

                                <a href="mailto: lvo@mines.edu" class="footer-link">lvo@mines.edu</a>
                            </div>
                    </div>
                    
                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">get to know us</p>
                        </li>

                        <li>
                            <a href="https://www.chevron.com/who-we-are" class="footer-link">who chevron are</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/what-we-do" class="footer-link">what chevron do</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/who-we-are/leadership" class="footer-link">chevron leadership</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/what-we-do/technology-and-innovation" class="footer-link">technology and innovation</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/sustainability" class="footer-link">sustainability</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/worldwide" class="footer-link">chevron around the world</a>
                        </li>
                    </ul>
                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">our sources</p>
                        </li>

                        <li>
                            <a href="https://www.chevron.com/what-we-do/technology-and-innovation/capturing-and-storing-carbon-emissions" class="footer-link">carbon capture and storage</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/what-we-do/energy/new-energies/partnerships#hydrogen" class="footer-link">hydrogen</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/what-we-do/energy/new-energies/renewable-fuels-and-products" class="footer-link">renewable fuels and products</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/what-we-do/energy/new-energies/partnerships#carbonoffsets" class="footer-link">carbon offsets</a>
                        </li>
                    </ul>

                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">Popular Links</p>
                        </li>

                        <li>
                            <a href="https://www.chevron.com/who-we-are/contact" class="footer-link">contact chevron</a>
                        </li>
                        <li>
                            <a href="https://careers.chevron.com/" class="footer-link">careers</a>
                        </li>
                        <li>
                            <a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations" class="footer-link">find a service station</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Coming soon</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>