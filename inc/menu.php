<?php
// Include config file
require "config.php";

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
    <section>
        <div class="flex flex-col items-center justify-center px-20 py-40 mx-auto ">
            
            <div class="flex flex-col items-center justify-center px-20 py-10 mx-auto ">
                <p
                class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
                    <a href="index.php?page=game" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">New play</a>
                </p>            
            </div>
            
            <div class="flex flex-col items-center justify-center px-20 py-10 mx-auto ">
                <p
                class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
                    <a href="index.php?page=" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">My games</a>
                </p>
            </div>
            
            <div class="flex flex-col items-center justify-center px-20 py-10 mx-auto ">
                <p
                class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
                    <a href="index.php?page=rank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ranking</a>
                </p>
            
            </div>

        </div>

    </section>

</body>

</html>