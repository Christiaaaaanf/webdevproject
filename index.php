<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<htlm>
    <head>
        <title> Sample Crud </title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php">Add Subject</a><br/><br/>
        <table width ='100%' border= 1>
            <tr bgcolor= '#CCCCCC'>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>
            </tr>
            <?php
                while($res = mysqli_fetch_array($result))
                {
                    echo "<tr>"
                    echo "<td>".$res['Subject_id']."</td>";
                    echo "<td>".$res['Subject_code']."</td>";
                    echo "<td>".$res['Subject_name']."</td>";
                    echo "<td> <a href="\forms/editform.php?id=$res[subject_id]\"Edit</a> |
                        <a href=\"functions/delete.php?id=$res[subject_id]\"
                        onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
            ?>
        </table>
    </body> 
</html>
