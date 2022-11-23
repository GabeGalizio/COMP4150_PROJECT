<div id="AddStudentFlats">
    <h2>Add Student Flats</h2>
    <form action="" method="post">
        <label>Flat Number:</label>
        <input type="number" name="flatnum"/><br><br>
        <label>Address :</label>
        <input type="text" name="address"/><br><br>
        <label>Single Rooms :</label>
        <input type="number" name="singlerooms"/><br><br>

        <br><br>
        <input type="submit" value=" Submit Details " name="submit"/><br />
    </form>
</div>
<?php
if(isset($_POST["submit"])){
    include 'dbconfig.php';
    $sql = "INSERT INTO student_flats (FLAT_NUMBER, ADDRESS, SINGLE_ROOMS)
VALUES ('".$_POST["flatnum"]."','".$_POST["address"]."','".$_POST["singlerooms"]."')";
    if ($conn->query($sql) === TRUE) {
        echo "
 <script type= 'text/javascript'>
alert('New record created successfully');
 </script>";
    }
    else
    {
        echo
            "<script type= 'text/javascript'>
 alert('Error: " . $sql . "<br>" . $conn->error."');
 </script>";
    }
    $conn->close();
}
?>