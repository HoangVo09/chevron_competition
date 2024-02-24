<?php
    session_start();
    include("../php/config.php");

    // Check if the user is logged in
    if (!isset($_SESSION['valid'])) {
        header("Location: ../index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="../style/Test.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="../home.php">Chevron Educational</a></div>
            <ul class="links">
                <li><a href="../home.php">Home</a></li>
                <li><a href="../cited_work.php">Citation</a></li>
                <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
                <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
                <li><a href="../php/logout.php">Logout</a></li>
            </ul>
            <a href="chapter2_2.php" class="action_btn">Next lesson</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../cited_work.php">Citation</a></li>
            <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
            <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
            <li> <a href="chapter2_2.php" class="action_btn">Next lesson</a></li>
            <li><a href="../php/logout.php">Logout</a></li>
        </div>
    </header>

    <h2>2.1. Carbon capture, utilization, and storage (CCUS)</h2>
    <h3>Introduction:</h3>

    <p><br>When it comes to the emissions around the globe, it varies between agriculture, transportation and other industries. Furthermore, these emissions are massively affecting the global population. These greenhouse gasses are causing global warming and an increase in carbon dioxide emissions in our atmosphere. So one of the solutions that are being implemented consists of carbon capture and storage.  

    </p><br><h3>What is Carbon Capture?</h3><br>

    <p>Carbon capture is capturing carbon dioxide from the atmosphere or from our industrial facilities. This is accomplished by separating the carbon dioxide from various gasses similar to how refineries work. After this is done, it is then processed and compressed to be easily transported through pipes to then be permanently stored more than 8,000 ft underground. This carbon can be used to create other products such as cement in order to prevent it from returning to the atmosphere.    </p>
    <center><img class='graphs' src='../image/carboncapture.png'></center>
    <center><p>Figure 1: Carbon Capture Process simplified</p></center><br>
    
    <p><br>When it comes to Carbon Capture, utilization, and storage (CCUS) facilities, they currently are capturing around 45 Megatons (Mt) of CO2 annually. There are nearly around 40 commercial capture facilities that are operational globally. Furthermore, 7 new large facilities became fully operational in January 2022 that capture around 100,000 tons of CO2 per year. Everywhere across the world, there are different capturing facilities being projected to be able to have the same common goal of creating a world with zero carbon emissions. Where 50 new capture facilities is the current target for 2030 across the world.
    <center><img class='graphs' src='../image/planning.png'></center>
    <center><p>Figure 2: Represents the Capacity of Current and Planned CCUS Facilities</p></center><br>

    <p><br>These are a few countries that are on their mission to further increase the amount of CCUS facilities:

    <br><br><b>United States</b> -  In 2021, the US passed the Infrastructure Investment and Jobs Act (IIJA), which gives 12 Billion USD across all of the CCUS value chain through 2026. Furthermore the Department of Energy has been actively working on and is currently working on announcing the Carbon Management Challenge which is making companies and industries try to find better ways to remove more carbon emissions.
    <br><b>United Kingdom</b> -Under the Spring Budget 2023, 20 Billion GBP in funding was announced to be used for the development of CCUS. Particularly on the East Coast and in the North West of England and North Wales.
    <br><b>Japan</b> - In January 2023, Japan had issued a CCUS roadmap which gives an annual CO2 storage target of 6-12 Mt CO2 per year for 2030 and 120-140 Mt CO2 per year in 2050.

    </p><br><h3>Conclusion:</h3>

    <p><br>With around 40 commercial facilities being in operation applying CCUS to industrial processes, fuel transformation and power generation. With over 500 projects in various different stages across the world, with ambitions to better the world and climate. Even if it is at the lowest of development, CCUS deployments would make around a third of the estimated 1.2 Gigatons (Gt) CO2 per year that require Zero Net Emissions by 2050. Which is Chevron’s ultimate goal. However, without a scaled development of CCUS and other carbon dioxide removal technologies, the goal of Zero Net Emissions is highly unlikely. Which is why so many people across the globe are working together to make this goal achievable.

    </p>

    <?php
        if (isset($_POST['submit'])) {
            $answer = "Answer1"; // Change this to the correct answer
            $selected_answer = array_keys($_POST['submit'])[0];
            $id = $_SESSION['id'];
            $result = mysqli_query($con, "SELECT Score FROM users WHERE Id=$id");
            $row = mysqli_fetch_assoc($result);
            $score = $row['Score'];

            if ($selected_answer == $answer) {
                $score = $score + 1;
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
            }
        }else{
    ?>
    <div class="app">
        <h1>Question 1</h1>
        <div class="quiz">
            <h2 id="question">Where is the majority of the captured carbon stored?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit[Answer1]" value="Answer1">Underground</button>
                    <button class="btn" type="submit" name="submit[Answer2]" value="Answer2">Containers</button>
                    <button class="btn" type="submit" name="submit[Answer3]" value="Answer3">Under the Sea</button>
                    <button class="btn" type="submit" name="submit[Answer4]" value="Answer4">In the atmosphere</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
        if (isset($_POST['submit1'])) {
            $answer = "Answer2"; // Change this to the correct answer
            $selected_answer = array_keys($_POST['submit1'])[0];
            $id = $_SESSION['id'];
            $result = mysqli_query($con, "SELECT Score FROM users WHERE Id=$id");
            $row = mysqli_fetch_assoc($result);
            $score = $row['Score'];

            if ($selected_answer == $answer) {
                $score = $score + 1;
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
            }
        }else{
    ?>
    <div class="app">
        <h1>Question 2</h1>
        <div class="quiz">
            <h2 id="question">We cannot use captured carbon for other purposes (Such as vehicles, energy, etc.).</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit1[Answer1]" value="Answer1">True</button>
                    <button class="btn" type="submit" name="submit1[Answer2]" value="Answer2">False</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
        if (isset($_POST['submit2'])) {
            $answer = "Answer1"; // Change this to the correct answer
            $selected_answer = array_keys($_POST['submit2'])[0];
            $id = $_SESSION['id'];
            $result = mysqli_query($con, "SELECT Score FROM users WHERE Id=$id");
            $row = mysqli_fetch_assoc($result);
            $score = $row['Score'];

            if ($selected_answer == $answer) {
                $score = $score + 1;
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
            }
        }else{
    ?>
    <div class="app">
        <h1>Question 3</h1>
        <div class="quiz">
            <h2 id="question">Carbon can be captured by taking it directly from the atmosphere or preventing it from entering the atmosphere.</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit2[Answer1]" value="Answer1">True</button>
                    <button class="btn" type="submit" name="submit2[Answer2]" value="Answer2">False</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
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