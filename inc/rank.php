<?php
// Include config file
require "config.php";

// Query variables
if (isset($_POST['rank'])) {
    $rank = $_POST['rank'];
}

// Search button
if (isset($_POST['buscar'])) {

    if (isset($_POST['rank'])) {
        if ($_POST['rank'] == "" || $_POST['rank'] == "All ranks") {
            $where = "";
        } else {
            $where = "WHERE rang BETWEEN " . getPunctuationFromRank($rank)[0] . " AND " . getPunctuationFromRank($rank)[1];
        }
    }
}

// Db query
if (isset($_POST['rank'])) {
    $query = "SELECT alias,rang FROM user $where ORDER BY rang DESC";
} else {
    $query = "SELECT alias,rang FROM user ORDER BY rang DESC";
}

// Connection to db
$res = mysqli_query($link, $query);

// Methods
function getRang($num)
{
    if ($num > 1000 && $num < 1399) {
        return 'Principiante';
    } else if ($num > 1400 && $num < 1599) {
        return 'Aficionado';
    } else if ($num > 1600 && $num < 1799) {
        return 'Jugador de club medio';
    }
}

function getPunctuationFromRank($rank)
{
    if ($rank == 'Principiante')
        return [1000, 1399];
    if ($rank == 'Aficionado')
        return [1400, 1599];
    if ($rank == 'Jugador de club medio')
        return [1600, 1799];
}

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
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto ">
            <h1
                class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">
                Player ranking</h1>
            <section>
                <form method='post'>
                    <select name="rank">
                        <option value="">Rangos</option>
                        <option value="All ranks">Todos los rangos</option>
                        <option value="Principiante">Principiante</option>
                        <option value="Aficionado">Aficionado</option>
                        <option value="Jugador de club medio">Jugador de club medio</option>
                        <?
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<option value="' . $row[1] . '"</option>';
                    }
                    ?>
                    </select>
                    <button name="buscar" type="submit" class="py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </form>
            </section>
            <div class="overflow-x-auto relative m-6 w-1/3 h-80">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-fixed">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Jugador
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Rango
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Puntuación
                            </th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $row[0] ?>
                            </th>
                            <td class="py-4 px-6 ">
                                <?php
                        echo getRang($row[1]);
                                ?>
                            </td>
                            <td class="py-4 px-6 text-center">
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
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">Menú</a>

        </div>
    </section>
</body>

</html>