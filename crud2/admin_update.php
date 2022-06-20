<?php

include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_personal'])){

   $name = $_POST['name'];
   $salary = $_POST['salary'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   if(empty($name) || empty($salary) || empty($image)){
      $message[] = 'Por favor, rellena todos los campos';    
   }else{

      $update_data = "UPDATE empleados SET name='$name', salary='$salary', image='$image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($image_tmp_name, $image_folder);
         header('location:admin_page.php');
      }else{
         $$message[] = 'Por favor, rellena todos los campos'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM empleados WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">Actualizar empleado</h3>
      <input type="text" class="box" name="name" value="<?php echo $row['name']; ?>" placeholder="Ingrese nombre">
      <input type="number" min="0" class="box" name="salary" value="<?php echo $row['salary']; ?>" placeholder="Ingrese salario">
      <input type="file" class="box" name="image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update personal" name="update_personal" class="btn">
      <a href="admin_page.php" class="btn">Volver</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>