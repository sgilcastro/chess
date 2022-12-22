<?php
// Include config file
require "config.php";
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale-1, maximun-scale-1">
  <link href="css/board.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<?php include "header-tailwind.php" ?>
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto ">
    <div>
      <h1 class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
        Play</h1>
    </div>
    <div id="body_tablero">
      <table id="tablero">
        <tr>
          <td>&#9820;</td>
          <td>&#9822;</td>
          <td>&#9821;</td>
          <td>&#9819;</td>
          <td>&#9818;</td>
          <td>&#9821;</td>
          <td>&#9822;</td>
          <td>&#9820;</td>
        </tr>
        <tr>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
          <td>&#9823;</td>
        </tr>
        <tr>
          <td>&#9820;</td>
          <td>&#9822;</td>
          <td>&#9821;</td>
          <td>&#9819;</td>
          <td>&#9818;</td>
          <td>&#9821;</td>
          <td>&#9822;</td>
          <td>&#9820;</td>
        </tr>
      </table>
    </div>
    <a href="index.php?page=menu"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center m-6">End game</a>

        </div>
</body>
<?php include "footer-tailwind.php" ?>
</html>