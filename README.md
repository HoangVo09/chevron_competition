#Chevron_competition
Author: Le Hoang Vo, Emmanuel Maqueda, Nick Misleh
This is the github repository for the Chevron coding competition at Colorado school of Mines. The purpose of this github is to create an educational site for highschoolers, college student to understand more about the new and innovative ways to use/store/gain energy more efficiently by Chevron and it partner companies. We have impliment a quiz/reading page for student to read and engage in doing fun quiz and gain points, students get to compete by gaining more points and be placed on the leaderboard using mainly PHP and HTML/CSS. We have used a localhost SQL database to store username, Id, Email, Score, and Password in order to create a login/sign up page to keep track of student points. We have created a localhost database by using an app called XAMPP, and by typing the code below in SQL:
CREATE TABLE users (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(200),
    Email VARCHAR(200),
    Score INT,
    Password VARCHAR(200)
);
