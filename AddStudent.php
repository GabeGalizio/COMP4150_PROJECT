<div id="AddStudent">
    <link rel="stylesheet" href="pageStyle.css">
    <div class="login-box">
        <div class="titleStyle">
            <h2>Add Student</h2>
        </div>
        <br> <br> <br>
        <form action="" method="post">
            <div class="bodyStyling">
                <div class="group1">
                    <label>Student Number :</label>
                    <input type="number" name="studentnum" required placeholder="Please Student Number"/><br><br>
                    <label>First Name :</label>
                    <input type="text" name="firstname"/><br><br>
                    <label>Last Name :</label>
                    <input type="text" name="lastname"/><br><br>
                    <label>Address:</label>
                    <input type="text" name="address"/><br><br>
                    <label>Birthdate :</label>
                    <input type="date" name="birthdate"/><br><br>
                    <select name="gender" required>
                        <option value=""> Select Gender</option>
                        <option value="M"> Male</option>
                        <option value="F"> Female</option>
                    </select>
                    <br><br>
                </div>
                <div class="group2">

                    <label>Academic Year :</label>
                    <input type="text" name="academicyear"/><br><br>
                    <label>Nationality :</label>
                    <input type="text" name="nationality"/><br><br>
                    <label>Special Needs :</label>
                    <input type="text" name="specialneeds"/><br><br>
                    <label>Comments:</label>
                    <input type="text" name="comments"/><br><br>
                    <label>Student Status:</label>
                    <input type="text" name="studentstatus"/><br><br>
                    <label>Course:</label>
                    <input type="text" name="course"/><br><br>
                </div>
            </div>
            <br><br>
            <input  class="button" type="submit" value=" Submit Details " name="submit"/><br/>
        </form>
    </div>
</div>

<?php
if (isset($_POST["submit"])) {
    include 'dbconfig.php';
    $sql = "INSERT INTO students (S_NUM, F_NAME, L_NAME, ADDRESS,BIRTHDATE, GENDER,ACADEMIC_YEAR,NATIONALITY,SPECIAL_NEEDS,COMMENTS,S_STATUS,COURSE)
VALUES ('" . $_POST["studentnum"] . "','" . $_POST["firstname"] . "','" . $_POST["lastname"] . "','" . $_POST["address"] . "','" . $_POST["birthdate"] . "','" . $_POST["gender"] . "','" . $_POST["academicyear"] . "','" . $_POST["nationality"] . "','" . $_POST["specialneeds"] . "','" . $_POST["comments"] . "','" . $_POST["studentstatus"] . "','" . $_POST["course"] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "
 <script type= 'text/javascript'>
alert('New record created successfully');
 </script>";
    } else {
        echo
            "<script type= 'text/javascript'>
 alert('Error: " . $sql . "<br>" . $conn->error . "');
 </script>";
    }
    $conn->close();
}
?>
