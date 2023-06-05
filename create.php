<?php 
if(isset($_POST['Submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    include_once("config.php");
    $result=mysqli_query($mysqli,"INSERT INTO student (name ,email,mobile) VAlUE('$name','$email','$mobile')");
    echo"USer adderd successfully";
}
?>
<html>
<head>
<title>ADD Student</title>
</head>
<body>
    <a href="index.php">go to home</a>
    <br></br>
    <form action="create.php"method="post"name ="from">
        <table width="25%"border="0">
        <tr>
            <td>Name</td>
            <td><input type ="text" name ="name"></td>
        </tr>
        <tr>
            <td>mobile</td>
            <td><input type ="text" name ="mobile"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type ="text" name ="email"></td>
        </tr>
    
        <tr>
        <td></td>
         <td><input type="Submit" name ="Submit"value="Add"></td>
        </tr>
    </table>
    </form>
</body>
</html>