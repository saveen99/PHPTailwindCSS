<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "My PHP Project"; ?></title>
    <!-- TailwindCSS -->
    <link rel="stylesheet" href="css/tailwind-output.css">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">My PHP Project</h1>
            <nav class="mt-2">
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="hover:underline">Home</a></li>
                    <li><a href="about.php" class="hover:underline">About</a></li>
                    <li><a href="contact.php" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
