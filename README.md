# Pure PHP with TailwindCSS Documentation

### Create Project Folder
1. mkdir my-project
2. cd my-project
3. mkdir public
4. Create index.php
   
```php
<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with TailwindCSS</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="bg-blue-500 text-white p-5">Hello, TailwindCSS with PHP!</div>
</body>
</html>';
?>
```
### Tailwind Configurations

5. npm init -y
6. npm install tailwindcss postcss autoprefixer
7. npx tailwindcss init
8. Add tailwind.config.js
```
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php", "./public/**/*.html"],
  theme: {
    extend: {},
  },
  plugins: [],
};
```
### Create CSS Files
9. mkdir public/css
10. Create public/css/styles.css
11. Add styles.css
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```

12. npx tailwindcss -i ./public/css/styles.css -o ./public/css/tailwind-output.css --watch
13. Add index.php

### Add CSS 
<link rel="stylesheet" href="css/tailwind-output.css">

### Run Loacal Host
14. http://localhost/my-project/public/index.php
