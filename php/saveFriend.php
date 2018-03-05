<html>
<body>


Welcome <?php echo $_POST["f_name"]?> <?php echo $_POST["l_name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
your favoite number is: <?php echo $_POST["fnumber"]; ?><br>
your birthday is: <?php echo $_POST["birthday"]; ?><br>

<?php 

$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$email=$_POST['email'];
$fnumber=$_POST['fnumber'];
$birthday=$_POST['birthday'];

// sql to create table
$sql = "CREATE TABLE MyFriends (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(15) NOT NULL,
lastname VARCHAR(15) NOT NULL,
fnumber INT(),
email VARCHAR(50),
birthday DATE()
)";
?>	


</body>
</html>