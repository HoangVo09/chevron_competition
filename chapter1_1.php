<?php
    session_start();
    include("config.php");

    // Check if the user is logged in
    if (!isset($_SESSION['valid'])) {
        header("Location: index.php");
        exit;
    }


    if (isset($_POST['submit'])) {
        $answer = "Answer2"; // Change this to the correct answer
        $selected_answer = array_keys($_POST['submit'])[0];
        $id = $_SESSION['id'];
        $result = mysqli_query($con, "SELECT Score FROM users WHERE Id=$id");
        $row = mysqli_fetch_assoc($result);
        $score = $row['Score'];

        if ($selected_answer == $answer) {
            $score = $score + 5;
        } else {
            if ($score >= 1) {
                $score = $score - 1;
            }
        }

        $edit_query = mysqli_query($con, "UPDATE users SET Score='$score' WHERE Id=$id") or die("Error occurred");

        if ($edit_query) {
            echo "<div class='message'>
                    <p>Your total score is $score</p>
                </div> <br>";
            echo "<a href='chapter1_1.php'><button class='btn'>Go Back</button>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="Test.css">
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
    <p>Introduction:<br>

    <br>Hydrogen (H2) is considered to be an alternative fuel source for domestic resources. These resources can involve vehicles such as buses, industrial vehicles and even may include standard vehicles we use everyday. These vehicles are known as FCEVs (Fuel Cell Electric Vehicles). Furthermore, hydrogen fuel cells can also be used for internal combustion engines, however, unlike FCEVs, it produces more tailpipe emissions and is less efficient. So it is not entirely useless but not useful for the environment. 

    <br><br>Hydrogen Gas:<br>

    <br>When it comes to hydrogen gas energy, 2.2 pounds of hydrogen gas is equivalent to 1 gallon (6.2 pounds) of gasoline. The reason for this is that since Hydrogen has a low volumetric energy density, it is stored onboard the vehicle as a compressed gas to achieve the proper driving range or a conventional vehicle. Currently this gas is being stored in high-pressure tanks that are capable of storing around 5,000 to 10,000 pounds per square inch (PSI). In the graph demonstrated below we have the average fueling times for FCEVs. As we can clearly see for the standard refueling time, it is estimated to take around 4 minutes to fill up the tank with hydrogen. 
    </p>
    <center><img class='graphs' src='Image/fuelgraph.png'></center>
    <center><p>Figure 1: FCEV Fueling Times</p></center><br>
    <p>
    Creating Hydrogen:<br>

    <br>Currently there are 4 different methods of producing hydrogen: 

    <br><br>Natural Gas Reforming - Synthesis gas is a mixture of hydrogen and carbon monoxide, and a small amount of carbon dioxide and is created with high-temperature steam. This makes it so that the chemical reaction produces hydrogen when it is reacted with water. With incorporating carbon capture it makes it effective to produce hydrogen.
    <br>Electrolysis - It is the process of using electric currents to split water into hydrogen and oxygen. Since the current goal is to make renewable energy, such as solar or wind, getting hydrogen from this method would be considered renewable as it would provide more opportunities for hydrogen powered projects.
    <br>Biomass-Derived Liquid Reforming - They are renewable liquid fuels, such as ethanol, that are reacted in high-temperature steam to produce hydrogen when it is near the end of its life.
    <br>Microbial Biomass Conversion - This method uses biomass to then convert it into sugar-rich feedstocks that are later fermented to make hydrogen.

    <br><br>There different ways are currently used as they are fully researched and are proven to be effective in production, however, there 3 methods that are in development:

    <br><br>Thermochemical Water Splitting - This method would use high temperatures generated by solar concentrators or nuclear reactors that create chemical reactions to be able to then split water to produce hydrogen
    <br>Photobiological Water Splitting - Microbes, such as green algae, consume water in the presence of sunlight that produce hydrogen as a byproduct.
    <br>Photoelectrochemical Water Splitting - This process produces hydrogen from water using special semiconductors and energy from sunlight.

    <br><br>These methods will prove to be useful and effective with other methods of producing renewable energy. It will be able to provide alternatives within each of the following categories. Every method will boost the efficiency and reduce the emissions from multiple sources that highly produce carbon emissions.

    <br><br>Methods of Transporting Hydrogen:

    <br><br>Not currently with the research that has been done, there are 3 distributing methods that are crucial for safely transporting hydrogen, however, each method has its disadvantages due to either the costs or due to the limitations and conditions. 

    <br><br>Pipeline - This form of distribution is considered the least-expensive method of delivering large volumes of hydrogen gas. Yet the capacity is limited due to there only being about 1,600 miles of pipelines in the United States. These pipelines are mainly located near large petroleum refineries and chemical plants in Illinois, California, and the Gulf Coast.
    <br>High-Pressure Tube Trailers - This method would be similar to how we transport gallons of gasoline, using boats, railcars and trailers, however, each vehicle must be containing highly expensive high-pressure tubes that are limited to only 200 or less miles.
    <br>Liquified Hydrogen Tankers - This method uses Cryogenic liquefaction which is the process that cools hydrogen to a temperature where it becomes a liquid. Although the liquefaction process is expensive, it enables hydrogen to be transported more efficiently over longer distances. This can be accomplished by using trucks, ships, or even barges. As another side of this, the hydrogen delivery and consumption rates must be carefully matched.

    <br><br>Hydrogen Storage and Stations:

    <br><br>When it comes to the U.S Department of Energy (DOE), their research and development team wants to improve technology to be able to safely and store enough FCEVs. The purpose of this project is to be able to substitute conventional vehicles by making them be able to run for at least 300 miles without making these vehicles contain excessive space or adding unnecessary weight to the vehicle.

    <br><br>Furthermore, around half of the U.S population lives in areas where air pollution levels are higher than the recommended safety level for human health. Such emissions from gasoline and diesel vehicles which include nitrogen oxides, hydrocarbons and particulate matter. So when it comes to FCEVs, they do not emit any of these substances that cause damage to the environment, only water (H20) and warm air.

    </p>
    <center><iframe style="width: 900px; height: 664.594px;" src="https://afdc.energy.gov/data/widgets/10802" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></center>
    <center><p>Figure 2: Represents the Emissions for Greenhouse Gases</p></center><br>
    <center><iframe style="width: 900px; height: 708.354px;" src="https://afdc.energy.gov/data/widgets/10379" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></center>
    <center><p>Figure 3: Demonstrates the cities of the U.S that are considered clean</p></center><br>
    <p><br>Additionally, FCEVs are powered by hydrogen. As mentioned previously, FCEVs do not produce any harmful emissions and are looking at implementing a system almost similar to how we currently use gas stations and charging stations for electric vehicles. The U.S Department of Energy is working on developing affordable FCEVs and safe for transportation but most importantly environmental friendly.</p>

    <div class="app">
        <h1>Simple Question</h1>
        <div class="quiz">
            <h2 id="question">Question go here</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit[Answer1]" value="Answer1">Answer1</button>
                    <button class="btn" type="submit" name="submit[Answer2]" value="Answer2">Answer2</button>
                    <button class="btn" type="submit" name="submit[Answer3]" value="Answer3">Answer3</button>
                    <button class="btn" type="submit" name="submit[Answer4]" value="Answer4">Answer4</button>
                </form>
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