<div id="AddStaffMember">
    <h2>Add Staff Member</h2>
    <form action="" method="post">
        <label>Staff Number :</label>
        <input type="number" name="staffnum"/><br><br>
        <label>First Name :</label>
        <input type="text" name="firstname"/><br><br>
        <label>Last Name :</label>
        <input type="text" name="lastname"/><br><br>
        <label>Street:</label>
        <input type="text" name="street"/><br><br>
        <label>City :</label>
        <input type="text" name="city"/><br><br>
        <label>Postal Code :</label>
        <input type="text" name="postcode" /><br><br>
        <label>Birthday :</label>
        <input type="date" name="birthdate"/><br><br>
        <select name="gender" required>
            <option value=""> Select Gender </option>
            <option value="M"> Male </option>
            <option value="F"> Female </option>
        </select>
        <br><br>
        <label>Position:</label>
        <input type="text" name="position" /><br><br>
        <label>Location:</label>
        <input type="text" name="location" /><br><br>

        <br><br>
        <input type="submit" value=" Submit Details " name="submit"/><br />
    </form>
</div>

<?php
if(isset($_POST["submit"])){
    include 'dbconfig.php';
    $sql = "INSERT INTO hostel_staff (STAFF_NUM, F_NAME, L_NAME, STREET,CITY,POSTCODE,BIRTHDAY, GENDER,H_POSITION,H_LOCATION)
VALUES ('".$_POST["staffnum"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["street"]."','".$_POST["city"]."','".$_POST["postcode"]."','".$_POST["birthdate"]."','".$_POST["gender"]."','".$_POST["position"]."','".$_POST["location"]."')";
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
