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
    <title>Test</title>
    <link rel="stylesheet" href="style/Test.css">
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

    <h2>Cited work</h2>
    <p>
        [1]   U.S. Department of Energy, “Alternative Fuels Data Center: Hydrogen Basics,” Energy.gov, 2019. https://afdc.energy.gov/fuels/hydrogen_basics.html

        <br><br>[2]   “Alternative Fuels Data Center: Maps and Data - Greenhouse Gas Emissions by Economic Sector,” afdc.energy.gov. https://afdc.energy.gov/data/10802 (Figure One)

        <br><br>[3]   U.S Department of State, “Alternative Fuels Data Center: Maps and Data - Clean Cities Coalition Locations,” afdc.energy.gov, Oct. 03, 2023. https://afdc.energy.gov/data/10379  (accessed Feb. 24, 2024). (Figure 2)

        CCUS (Carbon Capture, Utilization, and Storage)

        <br><br>[4]   S. Budinis, M. Fajardy, and C. Greenfield, “Carbon Capture, Utilisation and Storage - Energy System,” IEA, Jul. 11, 2023. https://www.iea.org/energy-system/carbon-capture-utilisation-and-storage 

        <br><br>[5]   IEA, “Capacity of current and planned large-scale CO2 capture projects vs. the Net Zero Scenario, 2020-2030 – Charts – Data & Statistics,” IEA, Jul. 11, 2023. https://www.iea.org/data-and-statistics/charts/capacity-of-current-and-planned-large-scale-co2-capture-projects-vs-the-net-zero-scenario-2020-2030  (accessed Feb. 24, 2024). (Figure 2)

        Carbon Credits

        <br><br>[6]   Carbon Credits, “The Ultimate Guide to Understanding Carbon Credits,” Carbon Credits, Jan. 26, 2022. https://carboncredits.com/the-ultimate-guide-to-understanding-carbon-credits/

        <br><br>[7]   Carbon Offset Guide, “What is a Carbon Offset?,” Carbon Offset Guide. https://www.offsetguide.org/understanding-carbon-offsets/what-is-a-carbon-offset/  (accessed Feb. 24, 2024). 

        <br><br>[8]   A. Solomon, “A Guide to Compliance Carbon Credit Markets,” Carbon Credits, Apr. 08, 2022. https://carboncredits.com/a-guide-to-compliance-carbon-credit-markets/ 

        Renewable Energy and Fuel

        <br><br>[9]   PNNL, “Renewable Fuels | PNNL,” www.pnnl.gov. https://www.pnnl.gov/explainer-articles/renewable-fuels#:~:text=Renewable%20fuels%20are%20fuels%20produced  (accessed Feb. 24, 2024). 

        <br><br>[10]   U.S Department of Energy, “Alternative Fuels Data Center: Maps and Data - Renewable Fuel RFS2 Mandates and Net RINs Generated,” afdc.energy.gov, Feb. 24, 2023. https://afdc.energy.gov/data/10424  (accessed Feb. 24, 2024). (Figure 1)

        <br><br>[11]   R. F. Association, “Annual Ethanol Production,” Renewable Fuels Association, 2022. https://ethanolrfa.org/markets-and-statistics/annual-ethanol-production (Figure 2)

        <br><br>[12]   A. Lewis, “RFA Trade Monitor: December 2023 Exports,” Renewable Fuels Association, Feb. 07, 2024. https://myemail.constantcontact.com/RFA-Trade-Monitor--December-2023-Exports.html?soid=1126117148810&aid=KKcfrZUIkNA  (accessed Feb. 24, 2024). (Figure 3)

    </p>
    

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