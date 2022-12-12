 <?php
$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("No podemos conectar a la DB:".mysqli_error($conn));
}
if (@mysqli_connect_errno()) {
    die("No podemos conectar la DB error de datos:".mysqli_connect_errno(). ':' . @mysqli_connect_errno());
}
?>
