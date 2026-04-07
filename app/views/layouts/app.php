<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Sekolah</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg hover:bg-gray-100">+ Tambah Siswa</a>
        </div>
    </header>
    <!-- Main -->
    <main class="flex-grow container mx-auto p-8 space-y-6">
        <?php include $content; ?>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-auto">
        <div class="text-center p-4">
            &copy; <?= date("Y") ?> - Sistem Sekolah SMK KRISTEN IMMANUEL
        </div>
    </footer>
</body>
</html>

