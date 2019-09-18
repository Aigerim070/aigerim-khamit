<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="interface.css">
</head>
<body>

<?php
require('connect.php');

$query = "SELECT * FROM Users";
$result = mysqli_query($conn, $query) or die("Invalid query");

$result2 = $conn->query($query);

if ($result2->num_rows > 0) {
?>
    <h2>Users database</h2>
 <table class="table">
  <tr>
   <th>ID</th>
   <th>Name</th>
   <th>Surname</th>
   <th>E-mail</th>
   <th><img class="img-delete" src=""></th>
   <th><img class="img-update" src=""></th>
  </tr>
  <?php
  while($row = $result->fetch_assoc()){
      ?>
      <tr>
       <td><?php echo $row['ID']; ?></td>
       <td><?php echo $row['Name']; ?></td>
       <td><?php echo $row['Surname']; ?></td>
       <td><?php echo $row['Email']; ?></td>
       <td class="delete"><a href='delete.php?id="<?php echo $row['ID']; ?>"'>Delete</a></td>  
       <td class="update"><a href='update.php?id="<?php echo $row['ID']; ?>"'>Update</a></td>  
      </tr>
      <?php
  }
  ?>
 </table>
<?php
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

<?php
require('connect.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];

 $sql = "INSERT INTO Users (Name, Surname, Email) VALUES ('$name', '$surname', '$email')";
 $result = mysqli_query($conn, $sql);
    
 if ($result) {
        header('Location: main.php'); 
        exit;
 } else {
        echo "Error!!!";
 }
}
?> 
   <div class="container">
       <form class="insert" method="POST">
         <h5>Fill in the required fields</h5>
         <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
         <input type="text" class="form-control" name="surname" placeholder="Enter your surname" required>
         <input type="email" class="form-control" name="email" placeholder="Enter your E-mail" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">GO</button>
       </form>
   </div>
</body>
</html>