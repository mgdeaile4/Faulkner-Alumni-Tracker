 <?php

/* 
 * Form to create an university.
 * 
 * @author: Robert Vines
 */
 
    include('Header.php');
?>
<style>
    td {
        font-weight: bold;
    }
</style>

<div id='page'>
    <h1>Create University</h1>
        <div id="body">
            <form method='post' action="/AlumniTracker/Controller/CreateUniversityController.php">
                <table id="formTable">
                    <tr>
                        <td>University Name:</td><td><input type="text" name="UniName" /></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Create University">
            </form>
    </div>
</div>
</body>
</html>
