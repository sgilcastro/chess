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
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
            Player ranking</h2>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Player
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Range
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Score
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT alias,rang FROM user ORDER BY rang";
                    $res = sqlsrv_query($con, $query);

                    while ($row = sqlsrv_fetch_array($res)) {
                    ?>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $row[0] ?>
                            </th>
                            <td class="py-4 px-6">
                                <?= $row[1] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?= $row[1] ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <a href="index.php"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Go
                back</button>

    </div>

</body>

</html>