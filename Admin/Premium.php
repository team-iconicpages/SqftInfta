<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQFTinfra | Pro Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include './Components/Slider.php'?>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include './Components/Navbar.php'?>

            <main class="flex-1 overflow-y-auto p-6">    
                 <?php include './Components/Premium.php'?>
            </main>
            
        </div>
    </div>

    

    <script src="./script/script.js"></script>
</body>
</html>