<?php
#session_start();..
require('config/aunt_bill.php');
require('config/conn.php');

$conn->set_charset('utf8');

$sqlInsert = "INSERT INTO Nota10 (id,carnet,nombre,apellido,Nota)
 VALUES ('611501207','61-1501-2017','Rudy','Gudiel','10') ";
$datos = $conn->query("SELECT * FROM Nota10");




?>

<!--<table border="1px">
    <thead>
        <th>id</th>
        <th>carnet</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>Nota</th>
    </thead>
    <tbody>
        /*<?php while ($user = mysqli_fetch_array($datos)) {?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?php echo $user['carnet'];?></td>
                <td><?php echo $user['nombre'];?></td>
                <td><?php echo $user['apellido'];?></td>
                <td><?php echo $user['Nota'];?></td>
            </tr>
       <?php } ?>
    </tbody>
</table>

        -->