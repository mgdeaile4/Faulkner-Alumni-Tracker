<?php

/* 
 * Header/Nav bar for Administrator
 * 
 * @author: Robert Vines
 */
?>
<html>
    <head>
        <title>Faulkner Alumni Tracker</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/AlumniTracker/CSS/AlumniTracker.css" type="text/css"/>
    </head>
    <body>
    <header>
        <img style="float:left; z-index: 1;" src="/AlumniTracker/Images/AlumniTrackerLogo.jpg" alt="Faulkner University Alumni 
             Tracker" id="logo">
        <div id="nav">
            <ul>
                <li><a href="AdminHome.php">Home</a></li>
                <li><a href="Account.php">Accounts</a></li>
                <li><a href="Major.php">Major</a></li>
                <li><a href="Department.php">Department</a></li>
                <li><a href="Employer.php">Employer</a></li>
                <li><a href="University.php">University</a></li>
                <li><a href="Alumni.php">Alumni</a></li>
                <ul style="float:right; list-style-type:none;">
                    <li><a  href="Logout.php">Log out</a></li>
                </ul>
            </ul>    
        </div>
        <hr noshade />
    </header>
        