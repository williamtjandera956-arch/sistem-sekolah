<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>        
<!-- Header -->
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah </a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!--Main-->
    <main class="bg-gray-100 grow container mx-auto ">
        <div class="at-8 space-y-4">
            <!--Card Header-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-xl font-bold">Tambah Siswa</h1>
                <p>Menampilkan daftar Siswa yang terdaftar</p>
            </div>
        <div class="bg-white shadow rounded-lg p-4">
    <form action="" class="p-4 grid grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="block font-bold" for="name">Nama</label>
            <input class="w-full border rounded-lg py-2 px-4" type="text" name="name" id="name" placeholder="Masukkan nama">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="nis">NIS</label>
            <input class="w-full border rounded-lg py-2 px-4" type="text" name="nis" id="nis" placeholder="Masukkan nis">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="kelas">Kelas</label>
            <input class="w-full border rounded-lg py-2 px-4" type="text" name="kelas" id="kelas" placeholder="Masukkan kelas">
        </div>
        <div class="space-y-2">
            <label class="block font-bold" for="phone_number">No Telepon</label>
            <input class="w-full border rounded-lg py-2 px-4" type="text" name="phone_number" id=phone_number" placeholder="Masukkan no telepon">
        </div>
    </form>
            </div>
        </div>
    </main>
<!--Card Header End-->
<!--Card Content-->
<div class="bg-white shadow rounded-lg">
 
</div>
    </main>
<!-- Footer -->
    <footer class="bg-gray-800 text-white">
            <div class="text-center p-4">
                &copy <?= date("Y")?> - Sistem Sekolah SMK KRISTEN IMMANUEL
            </div>
    </footer>
    <!-- The End Of Footer -->
   
</body>
 
</html>
 