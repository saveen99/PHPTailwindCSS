<?php
// Example: Include a header
include 'header.php';

// Example: Dynamic content
$greeting = "Welcome to My PHP Project!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Project</title>
    <!-- TailwindCSS -->
    <link rel="stylesheet" href="css/tailwind-output.css">
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-500 text-white p-4">
        <h1 class="text-xl font-bold"><?php echo $greeting; ?></h1>
    </header>

    <main class="p-4">
        <p class="text-lg">This is your project's main content area.</p>
        <p>Today's date is: <strong><?php echo date('l, F j, Y'); ?></strong></p>
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; <?php echo date('Y'); ?> My PHP Project. All rights reserved.</p>
    </footer>

</body>
</html>

