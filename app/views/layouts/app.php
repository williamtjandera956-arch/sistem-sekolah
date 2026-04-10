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
    <?php require_once '../app/views/layouts/partials/header.php'?>
    <!-- Main -->
    <main class="flex-grow container mx-auto p-8 space-y-6">
        <?php include $content; ?>
    </main>
    <!-- Footer -->
        <?php require_once '../app/views/layouts/partials/footer.php'?>

</body>
</html>

