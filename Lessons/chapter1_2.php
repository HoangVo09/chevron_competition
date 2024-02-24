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
            <a href="chapter2_1.php" class="action_btn">Next lesson</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../cited_work.php">Citation</a></li>
            <li><a href="https://www.chevron.com/who-we-are/our-brands/fuel-stations">Service</a></li>
            <li><a href="https://www.chevron.com/who-we-are/contact">Contact us</a></li>
            <li> <a href="chapter2_1.php" class="action_btn">Next lesson</a></li>
            <li><a href="../php/logout.php">Logout</a></li>
        </div>
    </header>

    <h2>1.2. Renewable Energy</h2>
    <h3>Introduction:</h3>

    <p><br>There are numerous forms of renewable energy and fuels. For energy the fist things to come to mind are solar and wind energy. For fuels we have electric powered vehicles and ethanol. These energies can be produced using multiple different techniques. For example when it comes to renewable fuels, they can be produced from a variety of feedstocks that include municipal waste that potentially reduces the amount of waste that reaches landfills. So exploring different forms of renewable energy and fuels becomes more efficient at accomplishing the task.
    <br> Currently, research is being done on how to potentially find a substitute for petroleum and other petroleum based fuels. Petroleum based fuels tend to release methane, which is a potent greenhouse gas, into the atmosphere. Not only this but more CO2 is included in these fuels which causes more emissions to be emitted into the atmosphere. Methane is considered a municipal waste which can be converted into biogasses and renewable natural fuels, which can be further used in existing natural gas pipelines. This mainly would impact transportation as it is one of the largest industries that emit the most greenhouse gasses. Since when it comes to solar and wind based energy, it is not deemed practical for many types of vehicle transportation. A good example of renewable fuels is hydrogen fuel cell vehicles.
    <center><iframe style="width: 900px; height: 617.531px;" src="https://afdc.energy.gov/data/widgets/10424" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></center>
    <center><p>Figure 1: Demonstrates the number of the renewable fuels that have been mandated and given Renewable Identification Number [RIN] given by different Agencies</p></center><br>

    <p>Furthermore, renewable fuels are not just limited to cars and boats but can be involved in aviation where airplanes can be powered by biomass-based fuels fit for aviation standards. The major challenge is the cost that comes with creating such fuels. Until more markets and having an increased demand in such fuels, there will be no profit or be used in any sort of form. Biorefineries can convert biomass and waste resources into value-added chemicals but must still compete against petroleum, which is already the go to option. However this is not considered to be the end of the hope of getting renewable fuels into the world. More research is being done to further reduce the costs of production and convince the people on the reliability of such fuels in the world. A great feat when it comes to renewable energy was in October 2018, where a commercial flight that contained 4,000 gallons of high-quality jet fuel made from ethanol (another fuel that is renewable) was in testing. This was an official flight that successfully flew across the Atlantic from Orlando, Florida to London, United Kingdom. 
    </p>
    <center><img class='graphs' src='../image/ethanolpie.png'></center>
    <center><p>Figure 2: Demonstration of Annual World Fuel Ethanol Production in 2020.</p></center><br>
    
    <h3>Set of fun facts from the Bottom Figure:</h3><br>

    <p>
    <br>Total U.S exports for the year were 1.43 gallons, which was the third highest volume on record.
    <br>In December U.S ethanol exports shot up 34% to 155.6 million gallons.
    <br>Shipments totaled 43.6 million gallons where 92% of that was denatured ethanol.
    <br>So as further research is developed on different renewable fuels, the numbers are impressive how much is being produced and exported to multiple parts across the world.
    </p>
    <center><img class='graphs' src='../image/ethanolimport.png'></center>
    <center><p>Figure 3: Demonstration of Monthly U.S Ethanol Imports and Exports In 2023</p></center><br>
    <?php
        if (isset($_POST['submit'])) {
            $answer = "Answer2"; // Change this to the correct answer
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
            <h2 id="question">There has been any commercial flights that have used biofuels to complete a flight?</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit[Answer1]" value="Answer1">Yes, but it wasn't full of people during the test flight.</button>
                    <button class="btn" type="submit" name="submit[Answer2]" value="Answer2">Yes, it was an official commercial flight carrying multiple people overseas.</button>
                    <button class="btn" type="submit" name="submit[Answer3]" value="Answer3">No, because simply biofuels are not effective as standard fuels.</button>
                    <button class="btn" type="submit" name="submit[Answer4]" value="Answer4">No, because why do we want to do that.</button>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php
        if (isset($_POST['submit1'])) {
            $answer = "Answer1"; // Change this to the correct answer
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
            <h2 id="question">Can renewable fuel come from municipal waste?</h2>
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
            $answer = "Answer3"; // Change this to the correct answer
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
            <h2 id="question">There is only current research being done for vehicles and transportation</h2>
            <div id="answer-buttons">
                <form method="post">
                    <button class="btn" type="submit" name="submit2[Answer1]" value="Answer1">Yes and it is advancing rapidly creating new forms of alternative fuels.</button>
                    <button class="btn" type="submit" name="submit2[Answer2]" value="Answer2">Yes but it is having some delays due to the safety of the public</button>
                    <button class="btn" type="submit" name="submit2[Answer3]" value="Answer3">No as there is further research when it comes to discovering different things hydrogen can accomplish but it is still a issue of safety</button>
                    <button class="btn" type="submit" name="submit2[Answer4]" value="Answer4">No because who doesn't want to find more renewable energy</button>
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