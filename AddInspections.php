<div id="AddInspections">
    <h2>Add Inspections</h2>
    <form action="" method="post">
        <label>Inspection Number :</label>
        <input type="number" name="inspectionnum" /><br><br>
        <label>Staff Member:</label>
        <input type="text" name="staffmember"/><br><br>
        <label>Inspection Date :</label>
        <input type="date" name="date"/><br><br>
        <label>Satisfactory Condition:</label>
        <input type="text" name="scondition"/><br><br>
        <label>Comments:</label>
        <input type="text" name="comments"/><br><br>

        <br><br>
        <input type="submit" value=" Submit Details " name="submit"/><br />
    </form>
</div>
<?php
if(isset($_POST["submit"])){
    include 'dbconfig.php';
    $sql = "INSERT INTO flat_inspections (INSPECTIONID, STAFF_MEMBER, INSPECTION_DATE, SATISFACTORY_CONDITION, ADDITIONAL_COMMENTS)
VALUES ('".$_POST["inspectionnum"]."','".$_POST["staffmember"]."','".$_POST["date"]."','".$_POST["scondition"]."','".$_POST["comments"]."')";
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