<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="./Test.css">
    <link rel="stylesheet" href="script.js">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">Chevron Educational</a></div>
            <ul class="links">
                <li><a href="hero">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="service">Problem</a></li>
                <li><a href="contact">Contact us</a></li>
            </ul>
            <a href="#" class="action_btn">Get started</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="hero">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="service">Service</a></li>
            <li><a href="contact">Contact us</a></li>
            <li> <a href="#" class="action_btn">Get started</a></li>
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
                <button class="btn">Answer1</button>
                <button class="btn">Answer2</button>
                <button class="btn">Answer3</button>
                <button class="btn">Answer4</button>
            </div>
            <button id="next-btn">Next</button>
        </div>
    </div>
    <script src="script.js"></script>
    <footer>
        <div class="footer" style="background-image: url('')">
            <div class="footer-top section">
                <div class="container grid-list">
                    <div class="footer-brand">
                        <a href="#" class="logo">
                            <img src="./Images/182_chevron_corporation.jpg" width="162" height="100" alt="">
                        </a>
                        <p class="footer-brand-text">This website serves as a guide to navigate through innovative solutions pertaining to diverse <br>
                            and environmentally friendly energy options for Chevron.</p>
                            <div class="wrapper">
                                <span class="span">Add: </span>
                                <address class="address">70-80 Upper St Norwich NR2</address>
                            </div>
                        
                            <div class="wrapper">
                                <span class="span">Call: </span>

                                <a href="tel:+01123456789" class="footer-link">+01 123 456 789</a>
                            </div>

                            <div class="wrapper">
                                <span class="span">Email: </span>

                                <a href="mailto: son2522004@gmail.com" class="footer-link">son2522004@gmail.com</a>
                            </div>
                    </div>
                    
                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">Online Platform</p>
                        </li>

                        <li>
                            <a href="#" class="footer-link">About</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Course</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Instructor</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Events</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Instructor profile</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Purchase guide</a>
                        </li>
                    </ul>

                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">Links</p>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Contact us</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Gallery</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">News & article</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">FAQ'S</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Sign in</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Coming soon</a>
                        </li>
                    </ul>

                    <div class="footer-list">
                        <p class="footer-list-title">Contacts</p>

                        <p class="footer-list-text">
                            Enter your email address to register to our newsletter subcription
                        </p>

                       <form action="" class="newsletter-form">
                        <input type="email" name="email_adress" placeholder="your email" required 
                        class="input-filed">

                        <button type="submit" class="btn has-before">
                            <span class="span">Subscribe</span>
                        </button>
                       </form>

                       <ul class="social-list">

                        <li>
                            <a href="#" class="social-link"></a>
                            <ion-icon name="logo-facebook"></ion-icon> 
                        </li>

                       </ul>
                    </div>


                </div>
            </div>
        </div>
    </footer>
</body>
</html>