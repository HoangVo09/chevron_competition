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
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../cited_work.php">Citation</a></li>
            <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
            <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
            <li><a href="../php/logout.php">Logout</a></li>
        </div>
    </header>

    <h2>2.2. Carbon Credits</h2>
    <h3>Introduction:</h3>

    <p><br>Carbon credits are known as carbon allowances, similar to how permission slips work but for emissions. A company can purchase carbon credits, usually from the government, and gain permission to generate one ton of CO2 emissions. It is similar to how you decide to buy storage for your mobile device to be able to keep more items. Companies tend to sell their carbon credits to other companies when they exceed the cap of carbon emissions they can emit. To truly understand how Carbon credits function, it is important to look into the standpoint of it.
    <br> For starters, the average American generates 16 tons of CO2 a year doing motions of everyday life. This makes it so that one ton of carbon is actually more than what a person would think or expect. So after knowing this information on how much one ton is worth. Companies and facilities produce more tons of CO2 and are emitted into the atmosphere. Now there are different markets that must be kept in mind. There are 4 Carbon markets:
    <br><br><b>Regulated Market</b> - It is considered a “cap and trade” that is regulated at a regional and state level. 
    <br><b>Voluntary Market</b> - This market is intended for businesses and individuals to buy credits to offset carbon emissions. For example, Company 1 and Company 2 are limited to only emit 400 tons of CO2, however, Company 1 emits 500 tons of CO2 while Company 2 only emits 300 tons. Company 1 can buy off the credits that Company 2 still has remaining so that it is considered to not go over the limit. When it comes to this market, it was roughly estimated that it was worth around $400 million dollars and is forecasted to be worth $10-25 Billion by 2030. This all depends on how many countries actually try to pursue and tackle these issues on Greenhouse gasses.
    <br><b>Global Compliance Market</b> - It is the world-wide market for carbon credits. According to Refintiv the total market size is 261 Billion USD, which represents around 10.3 Gt CO2 in equivalent trades in 2020.
    <br><b>Carbon Compliance Market</b> - This market is dependent on the nation that is being recorded. As previously mentioned, this market is only defined in one region of the world. For example, there are Carbon Compliance Markets in China, European Union, and the United States.
    </p>

    <center><img class='graphs' src='../image/globalmarket.png'></center>
    <center><p>Figure 1: Demonstrates Global Compliance Market between 2017-2020</p></center><br>

    <p><br>Now that Carbon Markets have been described. We now go into further detail on what is considered a Carbon Offset or Carbon Credit. When it comes to carbon offsets, they are considered forms or technologies of removing Greenhouse Gasses (GHGs) from the atmosphere. Also generally are transacted to the Voluntary Carbon Market. A good example of Carbon offsetting is carbon capture because it is removing GHGs from the atmosphere and being used in alternative energy or being stored underground. While carbon credits are considered a reduction in GHGs released into the atmosphere. This is generally transacted in the Carbon Compliance Market. A good example of carbon credits is imagining them as a credit card. You are borrowing money that you later pay back. Like what was given about the two companies, they are considered carbon credits because they are not removing carbon but instead reducing between each other.
    </p>
    <center><img class='graphs' src='../image/carboncredit.png'></center>
    <center><p>Figure 2: This demonstrates how many Carbon credits were issued and retired in the Voluntary Carbon Market from 2007 to 2021</p></center><br>
    <p><br>Since carbon markets are used by large companies and major corporations, it is unlikely that you are able to purchase carbon offsets as a single individual directly from a company like Chevron. Yet there are different alternative websites that are considered third-party companies that allow you to buy carbon offsets as intermedians. So it is not completely impossible to join the rest of companies that purchase carbon offsets, it is just unlikely and might be considered a scam. Therefore, when it comes to Carbon credits and how the market of carbon functions, it benefits companies to be able to purchase carbon credits and be able to purchase carbon offsets because it prevents companies from over emitting tons of carbon and at the same time invests into carbon offsets to continue the road to Zero Net Emissions.
    </p>
    <?php
        if (isset($_POST['submit'])) {
            $answer = "Answer4"; // Change this to the correct answer
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
            <h2 id="question">How much carbon does the average American generate per year?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit[Answer1]" value="Answer1">19 tons</button>
                    <button class="btn" type="submit" name="submit[Answer2]" value="Answer2">14 tons</button>
                    <button class="btn" type="submit" name="submit[Answer3]" value="Answer3">10 tons</button>
                    <button class="btn" type="submit" name="submit[Answer4]" value="Answer4">16 tons</button>
                    <button class="btn" type="submit" name="submit[Answer5]" value="Answer5">17 tons</button>
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
            <h2 id="question">How many different types of carbon markets are there in the world?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit1[Answer1]" value="Answer1">1</button>
                    <button class="btn" type="submit" name="submit1[Answer2]" value="Answer2">4</button>
                    <button class="btn" type="submit" name="submit1[Answer3]" value="Answer3">3</button>
                    <button class="btn" type="submit" name="submit1[Answer4]" value="Answer4">2</button>
                    <button class="btn" type="submit" name="submit1[Answer5]" value="Answer5">5</button>
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
            <h2 id="question">Which of these can companies create offsets in carbon?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit2[Answer1]" value="Answer1">Investing in Renewable Energy</button>
                    <button class="btn" type="submit" name="submit2[Answer2]" value="Answer2">More fossil fuels</button>
                    <button class="btn" type="submit" name="submit2[Answer3]" value="Answer3">Increase Mass Production of Gas Vehicles</button>
                    <button class="btn" type="submit" name="submit2[Answer4]" value="Answer4">Improving energy efficiency by increasing the production of energy with burning fossil fuels</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
        if (isset($_POST['submit3'])) {
            $answer = "Answer1"; // Change this to the correct answer
            $selected_answer = array_keys($_POST['submit3'])[0];
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
        <h1>Question 4</h1>
        <div class="quiz">
            <h2 id="question">Can anyone buy carbon from companies?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit3[Answer1]" value="Answer1">True</button>
                    <button class="btn" type="submit" name="submit3[Answer2]" value="Answer2">False</button>
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