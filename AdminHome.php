<?php
/* 
 * Home page for an admin
 * 
 * @author: Robert Vines
 */
    include('UserSession_Admin.php');
    include('Config.php');
?>

<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="AlumniTracker.css" type="text/css"/>
    </head>
    <body>
        <?php include('AdminHeader.php'); ?>
        <div id="body">
          <h2>Hello</h2>
          <p align="center">Department: 
              <select name="DeptName">
                    <?php 
                        $sql = "SELECT DeptName FROM department";
                        $result = $pdo->query($sql);

                        while ($val = $result->fetch()):

                        $deptName = $val['DeptName'];    
                        {
                            echo "<option>" . $deptName . "</option>";
                        }endwhile;
                    ?>
                    </select></p>
              <p align="center">Last Name: <input type="text"></p>
        </div>
    </body>
</html>