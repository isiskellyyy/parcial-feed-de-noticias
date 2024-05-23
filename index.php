<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
                    <tr class="border-b">
                        <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="Notícia 1"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">Título da Notícia 1</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Descrição breve da notícia 1.</td>
                        <td class="py-2 px-4 text-sm text-gray-700">22/05/2024</td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="Notícia 2"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">Título da Notícia 2</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Descrição breve da notícia 2.</td>
                        <td class="py-2 px-4 text-sm text-gray-700">21/05/2024</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="https://via.placeholder.com/150" alt="Notícia 3"></td>
                        <td class="py-2 px-4 text-sm text-gray-700">Título da Notícia 3</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Descrição breve da notícia 3.</td>
                        <td class="py-2 px-4 text-sm text-gray-700">20/05/2024</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
