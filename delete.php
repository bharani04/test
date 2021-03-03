
<?php
    $conc = new mysqli("localhost", "root", "", "form1");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from info WHERE id='$id'";
        $data = mysqli_query($conc, $sql);

    }
    header('location:index.php');
?>