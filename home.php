<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="style/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="home.php">Chevron Educational</a></div>
            <ul class="links"> 
                <?php
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");
                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['Username'];
                        $res_Email = $result['Email'];
                        $res_Score = $result['Score'];
                        $res_id = $result['Id'];
                    }
                ?>
                <li><a href="home.php">Home</a></li>
                <li><a href="cited_work.php">Citation</a></li>
                <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
                <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
                <li><a href="php/logout.php">Logout</a></li>
            </ul>
            
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
                <div class="dropdown-content">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="cited_work.php">Citation</a></li>
                    <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
                    <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
                    <li><a href="php/logout.php">Logout</a></li>
                </div>
            </div>
        </div>
        <section id="hero">
            <h1>Welcome</h1>
            <p>
                This website serves as a guide to navigate through innovative solutions pertaining to diverse <br>
                and environmentally friendly energy options for Chevron.
            </p>
        </section>

        
    </header>
    <main>
    <div class="lesson">
    <ul> 
        <li>
            <div><p>1. Innovative energy sources</p></div>
        </li>
        <li>
            <div><a href='lessons/chapter1_1.php'><p>1.1. Hydrogen</p></a></div>
        </li>
        <li>
            <div><a href='lessons/chapter1_2.php'><p>1.2. Renewable fuels</p></a></div>
        </li>
    </ul> 
    </div>
    <div class="lesson">
    <ul> 
        <li>
            <div><p>2. Waste/Gas management.</p></div>
        </li>
        <li>
            <div><a href='lessons/chapter2_1.php'><p>2.1. Carbon capture, utilization, and storage (CCUS)</p></a></div>
        </li>
        <li>
            <div><a href='lessons/chapter2_2.php'><p>2.2. Carbon credits</p></a></div>
        </li>
    </ul> 
    </div>
    <div class="segment"><ul><li><div><a href='leaderboard.php'><p>3. Leaderboard</p></a></div></li></ul></div>
        
    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Get to know us</h4>
                    <ul>
                    <li>
                        <a href="https://www.chevron.com/who-we-are">who chevron are</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/what-we-do">what chevron do</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/who-we-are/leadership">chevron leadership</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/what-we-do/technology-and-innovation">technology and innovation</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/sustainability">sustainability</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/worldwide">chevron around the world</a>
                    </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Popular Links</h4>
                    <ul>
                    <li>
                        <a href="https://www.chevron.com/who-we-are/contact">contact chevron</a>
                    </li>
                    <li>
                        <a href="https://careers.chevron.com/">careers</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">find a service station</a>
                    </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Our Sources</h4>
                    <ul>
                    <li>
                        <a href="https://www.chevron.com/what-we-do/technology-and-innovation/capturing-and-storing-carbon-emissions">carbon capture and storage</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/what-we-do/energy/new-energies/partnerships#hydrogen">hydrogen</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/what-we-do/energy/new-energies/renewable-fuels-and-products">renewable fuels and products</a>
                    </li>
                    <li>
                        <a href="https://www.chevron.com/what-we-do/energy/new-energies/partnerships#carbonoffsets">carbon offsets</a>
                    </li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/Chevron"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/chevron"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/chevron"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/chevron"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>