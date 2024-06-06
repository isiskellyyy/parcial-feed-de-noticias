<!DOCTYPE html>
<html lang="en">
<?php
include_once ('database.php');
?>
<head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Lista de Notícias</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Imagem</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Título</th>
                        <th class="w-2/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data</th>
                    </tr>
                </thead>
                <tbody>
                <?php

$rs = $con->query("SELECT * FROM noticias ");
while ($row = $rs->fetch(PDO::FETCH_OBJ)) {

    echo '
    
    <tr class="border-b">
    <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="'. $row->imagem .'" alt="Notícia 1"></td>
    <td class="py-2 px-4 text-sm text-gray-700">'. $row->titulo .'</td>
    <td class="py-2 px-4 text-sm text-gray-700"> '. $row->descricao.'</td>
    <td class="py-2 px-4 text-sm text-gray-700" > '. $row->data.'</td>
</tr>
';
}
?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
