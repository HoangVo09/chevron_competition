<?php
    session_start();

    include("config.php");

    // Check if the user is logged in
    if (!isset($_SESSION['valid'])) {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="Test.css">
    <link rel="stylesheet" href="script.js">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="home.php">Chevron Educational</a></div>
            <ul class="links">
                <li><a href="home.php">Home</a></li>
                <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
                <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
                <li><a href="php/logout.php">Logout</a></li>
            </ul>
            <a href="#" class="action_btn">Next lesson</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
            <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
            <li> <a href="#" class="action_btn">Next lesson</a></li>
            <li><a href="php/logout.php">Logout</a></li>
        </div>
    </header>

    <h2>1.1. Hydrogen</h2>
    <p>Chevron is committed to advancing large-scale hydrogen solutions that contribute to a more sustainable, lower-carbon world. Our goal is to provide environmentally friendly energy to meet the needs of a growing global population by establishing a financially viable, large-scale hydrogen business. This endeavor builds upon our existing assets, capabilities, and customer base, allowing us to play a key role throughout the value chain in supplying industrial, power, and heavy-duty transportation sectors.
        Currently, Chevron produces around 1 million tonnes of hydrogen annually through our conventional business practices, drawing on our extensive experience in retail hydrogen dating back to 2005. With over 75 patents stemming from early commercial ventures, we are well-equipped for future development initiatives. Our existing refineries generate approximately 1 million tonnes of hydrogen annually for use in refining operations, and we have the potential to supply hydrogen to customers by leveraging our distribution capabilities, sales channels, and brands. In addition, we are actively constructing hydrogen fueling stations at selected locations.
        We are exploring profitable growth opportunities across the entire value chain, encompassing upstream production, distribution, transportation, power generation, and other industrial applications. Additionally, we are investigating the use of hydrogen as an alternative for industries currently reliant on combustible fuels and assessing the development of hydrogen production hubs. Leveraging our expertise in carbon capture, utilization, and storage, we are working to unlock market opportunities for hydrogen solutions.</p>
    <div class="app">
        <h1>Simple Question</h1>
        <div class="quiz">
            <h2 id="question">Question go here</h2>
            <div id="answer-buttons">
                    <button class="btn" type="submit" name="answer" value="Answer1">Answer1</button>
                    <button class="btn" type="submit" name="answer" value="Answer2">Answer2</button>
                    <button class="btn" type="submit" name="answer" value="Answer3">Answer3</button>
                    <button class="btn" type="submit" name="answer" value="Answer4">Answer4</button>
            </div>
        </div>
    </div>
     <!---Footer--->
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