 <?php

/* 
 * Show major information to be edited or deleted
 * 
 * @author: Robert Vines
 */

    $connString = "mysql:host=localhost;dbname=alumnitracker";
    $user ="root";
    $pass ="root";
    
    $pdo = new PDO($connString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
    if(isset($_GET['delete_id']))
    {               
        $degreeID = $_GET['delete_id'];
        
        $sql= "DELETE FROM degree WHERE DegreeID=".$degreeID;
        $pdo->query($sql);
 
        header("Location: EditMajor.php");
    }
?>

<html>
    <head>
        <title>Edit Major</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="AlumniTracker.css" type="text/css"/>
    </head>
    <body>
        <img src="Images/AlumniTrackerLogo.jpg" alt="Faulkner University Alumni 
             Tracker" id="logo">
        <div id="header"></div>
        <div id="nav">
            <ul>
                <li><a id="user" href="EditUser.php">User</a></li>
                <li><a href="EditMajor.php"><span id="current">Major</span></a></li>
                <li><a href="EditDepartment.php">Department</a></li>
                <li><a href="EditEmployer.php">Employer</a></li>
                <li><a href="EditUniversity.php">University</a></li>
            </ul>
        </div>
        <div id="body">
            <h2>Select Major to Edit</h2>
            <p><a href="CreateMajor.php"><button id="button">Add Major</button></a></p>
            <table>
                <tr id="tableHead">
                    <td>Type</td>
                    <td>Major</td>
                    <td>Department</td>
                    <td> </td>
                    <td> </td>
                </tr>
                <?php
                    $sql2 = "SELECT degree.DegreeID, degree.Type, degree.Major, department.DeptName"
                            . " FROM degree "
                            . "JOIN department "
                            . "ON degree.Department_DepartmentID = department.DepartmentID ";
                    $result = $pdo->query($sql2);
                       
                    while($val=$result->fetch()):
                    
                    $degreeID = $val['DegreeID'];
                    $degreeType = $val['Type'];
                    $degreeMajor = $val['Major'];
                    $deptName = $val['DeptName'];
                ?>
                <tr id="tablebody">
                    <td><?php echo $degreeType; ?></td>
                    <td><?php echo $degreeMajor; ?></td>
                    <td><?php echo $deptName; ?></td>
                    <td><a href="EditMajorForm.php?edit_id=<?php echo $degreeID ?>"><button type="button">Edit</button></a></td>
                    <td><a href="EditMajor.php?delete_id=<?php echo $degreeID ?>" onclick="return confirm('Are you sure you want to delete this major?');"><input type="submit" value="Delete"></td>
                </tr>
                <?php
                    endwhile;
                ?>
            </table>
        </div>
    </body>
</html>
