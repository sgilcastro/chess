<?php 
  require 'config.php';
//   $alias = $_POST['alias'];
//   $password = $_POST ['password'];
//   $sql = "SELECT * FROM user WHERE alias = '".$alias."' and password = '".$password."'";
//   $result = $link->query($sql);
//   $row = $result->fetch_assoc();
// while($row = $result->fetch_assoc()){
//   echo "
//   <tr>
//   <td>$row[id_user]</br></td>
//   <td>$row[name]</br></td>
//   <td>$row[lastname]</br></td>
//   <td>$row[alias]</br></td>
//   <td>$row[email]</br></td>
//   <td>$row[nationality]</br></td>
//   </tr>
//   ";
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
<?php include "header-tailwind.php" ?>
<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  <h1>Profile</h1>

  
  <form method= "post">
    <div class="form-group mb-6">
      <label class="form-label inline-block mb-2 text-gray-700">Name</label>
      <input type="text" name ="name" value="<?php echo $row['name']; ?> "class="form-control 
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
      <input type="text" name ="lastname"  value="<?php echo $row['lastname']; ?> "class="form-control
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
      <input type="text" value="<?php echo $row['alias'];  ?> "name ="alias" class="form-control
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
      <label class="form-label inline-block mb-2 text-gray-700">Country</label>
      <input type="text" value="<?php echo $row['nationality'];  ?> " name="nationality"class="form-control
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
      <input type="email" value="<?php echo $row['email'];  ?> " name="email"class="form-control
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
      ease-in-out mb-6">Change Password
      </button>
    </div>
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
<?php include "footer-tailwind.php" ?>
</html>