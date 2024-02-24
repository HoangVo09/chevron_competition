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

    Hydrogen (H2) is considered to be an alternative fuel source for domestic resources. These resources can involve vehicles such as buses, industrial vehicles and even may include standard vehicles we use everyday. These vehicles are known as FCEVs (Fuel Cell Electric Vehicles). Furthermore, hydrogen fuel cells can also be used for internal combustion engines, however, unlike FCEVs, it produces more tailpipe emissions and is less efficient. So it is not entirely useless but not useful for the environment. 

    <br>Hydrogen Gas:<br>

    When it comes to hydrogen gas energy, 2.2 pounds of hydrogen gas is equivalent to 1 gallon (6.2 pounds) of gasoline. The reason for this is that since Hydrogen has a low volumetric energy density, it is stored onboard the vehicle as a compressed gas to achieve the proper driving range or a conventional vehicle. Currently this gas is being stored in high-pressure tanks that are capable of storing around 5,000 to 10,000 pounds per square inch (PSI). In the graph demonstrated below we have the average fueling times for FCEVs. As we can clearly see for the standard refueling time, it is estimated to take around 4 minutes to fill up the tank with hydrogen. 
    </p>
    <center><img url='Image/Fueling Times.png'/></center>
    <center><p>Figure 1: FCEV Fueling Times</p></center>

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