<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Personal Info
$name = "Yasmin Ivy M. Ilagan";
$course = "Bachelor of Science in Computer Science";
$school = "Batangas State University TNEU - Alangilan Campus";
$gradYear = "2023 - 2027";

$birthday = "December 27, 2004";
$age = "20 years old";

$email = "23-03792@g.batstate-u.edu.ph";
$phone = "09551584360";
$address = "Mapulo, Taysan, Batangas";

$skills = ["Python (basic)", "JavaScript (basic)", "PHP", "HTML & CSS", "Microsoft Office", "Teamwork", "Communication"];

$achievements = [
    "Junior Philippine Computer Society - Member",
    "Association of Committed Computer Science Students - Member",
    "Dean's Lister"
];
$hobbies = ["Coding small projects", "Reading", "Solving Problems", "Cooking and Baking", "Volunteering"];

$education = [
    "Elementary: Taysan Central School, Taysan, Batangas (2011 - 2016)",
    "Junior High: Our Lady of Mercy Academy Inc., Taysan, Batangas (2017 - 2020)",
    "Senior High: Our Lady of Mercy Academy Inc., Taysan, Batangas (2020 - 2023)",
    "College: Batangas State University TNEU - Alangilan Campus (2023 - 2027)"
];

$projects = [
    "Mental Health Journal App (Java, OOP concepts, DBMS integration)",
    "Smart Parking System (Arduino, Physics-driven innovation)",
    "Greenhouse Gas Tracker (Web app for carbon footprint tracking)"
];

$certifications = [
    "Introduction to Python – Coursera",
    "Web Development Bootcamp – Udemy",
    "Database Management Basics – SoloLearn"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <!-- LEFT -->
        <div class="left">
            <?php 
                echo "<img src='images/picture.jpg' alt='My Photo'>";
                echo "<h2>Personal Info</h2>";
                echo "<p><b>Name:</b> $name</p>";
                echo "<p><b>Birthday:</b> $birthday</p>";
                echo "<p><b>Age:</b> $age</p>";
                echo "<p><b>Email:</b> $email</p>";
                echo "<p><b>Phone:</b> $phone</p>";
                echo "<p><b>Address:</b> $address</p>";
                echo "<p><b>GitHub:</b> <a href='https://github.com/YasminIlagan' target='_blank'>github.com/YasminIlagan</a></p>";

                echo "<h2>Skills</h2><ul>";
                foreach ($skills as $skill) { echo "<li>$skill</li>"; }
                echo "</ul>";

                echo "<h2>Hobbies</h2><ul>";
                foreach ($hobbies as $hobby) { echo "<li>$hobby</li>"; }
                echo "</ul>";
            ?>
        </div>

        <!-- RIGHT -->
        <div class="right">
            <?php
                echo "<h1>$name</h1>";
                echo "<p class='course'>$course</p>";
            ?>

            <h2>Career Objective</h2>
            <p class="justify">
                A motivated Computer Science student eager to apply programming and problem-solving skills in real-world projects, 
                while continuously learning and contributing to innovative solutions. My goal is to develop impactful applications 
                that make people’s lives easier.
            </p>

            <h2>Education</h2>
            <ul><?php foreach ($education as $edu) echo "<li>$edu</li>"; ?></ul>

            <h2>Achievements & Activities</h2>
            <ul><?php foreach ($achievements as $achieve) echo "<li>$achieve</li>"; ?></ul>

            <h2>Projects</h2>
            <ul><?php foreach ($projects as $proj) echo "<li>$proj</li>"; ?></ul>

            <h2>Certifications</h2>
            <ul><?php foreach ($certifications as $cert) echo "<li>$cert</li>"; ?></ul>

            <!-- Buttons -->
            <div class="btn-section">
                <a href="download.php" class="btn">⬇ Download PDF</a>
                <a href="logout.php" class="btn danger">⎋ Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
