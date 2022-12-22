<?php
require ('config.php');
session_start();
// $id_user;
// $alias = "";
// $name ="";
// $lastname= "";
// $email ="";
// $password ="";
// $rang =0;
// $win_games=0;
// $lose_games=0;
// $draw_games=0;
// $nationality ="";
// $created_at= date('Y-M-D');
// $errorMsg="";
// $successMsg ="";

// if ($_SERVER['REQUEST_METHOD']=='GET') {
//     if (!isset($_GET['id_user'])) {
//         header("location: index.php");
//         exit;
//     }
//     $id_user= $_GET['id_user'];
//     $sql= "SELECT * FROM user WHERE id_user = $id_user";
//     $result= $link->query($sql);
//     $row= $result->fetch_assoc(); 
//     if (!$row) {
//         header("location: index.php");
//     }
    
// }else {
//     $nationality =$_POST['nationality'];
//     $name =$_POST['name'];
//     $lastname =$_POST['lastname'];
//     $nationality=$_POST['nationality'];
//     $alias =$_POST['alias'];
//     $email =$_POST['email'];  
//     $password =$_POST['password'];
//     do {
//         if (empty($name) || empty($lastname) || empty($alias) || empty($email) || empty($password) || empty($nationality)) {
//             $errorMsg= 'Please fill all empty fields';
//             break;
//         }
//         $sql = "UPDATE user " . "SET name = '$name', lastname = '$lastname',email = '$email', alias = '$alias', nationality ='$nationality', password ='$password' "."WHERE id_user = $id_user" ;
//         $result= $link->query($sql); 

//         $successMsg = "Player added succesfully";
//         header("location: index.php");
//         exit;
//     } while (false);
// }

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="input.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  <h1>Modify User</h1>

  <?php 
  if (!empty($errorMsg)) {
    echo "
    <div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
    <strong >.$errorMsg.</strong>
    <span class='block sm:inline'>Something seriously bad happened.</span>
    <span class='absolute top-0 bottom-0 right-0 px-4 py-3'>
      
    </span>
  </div>";
  }
  ?>
  <form method= "post">
    <input type ="hidden" name ="id_user" value ="<?php echo $id_user; ?>">
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Name</label>
      <input type="text" name ="name" value="<?php echo $name; ?> "class="form-control 
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
        placeholder="Name">
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Lastname</label>
      <input type="text" name ="lastname"  value="<?php echo $lastname; ?> "class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
         placeholder="Lastname">
    </div>
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Alias</label>
      <input type="text" value="<?php echo $alias; ?> "name ="alias" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
         placeholder="Alias">
    </div>
    <div class="form-group mb-6">
      <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
      <input type="country" value="<?php echo $country; ?> " name="email"class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
         placeholder="Enter country">
    </div>
    <div class="form-group mb-6">
      <label for="inputEmail" class="form-label inline-block mb-2 text-gray-700">Email address</label>
      <input type="email" value="<?php echo $email; ?> " name="email"class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
         placeholder="Enter email">
    </div>
    
    <div class="form-group mb-6">
      <label for="InputPassword1" class="form-label inline-block mb-2 text-gray-700">Password</label>
      <input type="password" value="<?php echo $password; ?> " name="password" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="Password">
    </div>
    <?php
    if (!empty($successMsg)) {
      echo "
    <div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
    <strong >.$successMsg.</strong>
    <span class='block sm:inline'>Something seriously bad happened.</span>
    <span class='absolute top-0 bottom-0 right-0 px-4 py-3'>
      
    </span>
  </div>";
    }
    ?>
    <div class= "flex justify-between">
      <button type="submit" class="
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out">Submit
      </button>
      <button type="button" class="inline-block 
      px-6 
      py-2.5
      bg-red-600
       text-white 
       font-medium
       text-xs 
       leading-tight 
       uppercase 
       rounded 
       shadow-md
       hover:bg-red-700 hover:shadow-lg
       focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
       active:bg-red-800 active:shadow-lg 
       transition duration-150 ease-in-out"><a href ="index.php?page=">Cancel</a></button>
    </div>
    
  </form>
</div>

</body>
</html>