<?php
include('../controller/isAdmin.php');
include('../model/databaseConnection.php');

$qry = "SELECT * FROM users WHERE user_role='NONE'";

$result = $connection->query($qry);



?>
<div class="tableContainer">
    <table  >
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i =1;
        if($result->num_rows >=1){
            while($row=$result->fetch_assoc()){
                echo"
                            <tr>
                                <td> $i </td>
                                <td>". $row['user_name'] ."</td>
                            </tr>
                ";
                $i++;
            }
        }
        ?>  
        </tbody>
    </table>
</div>