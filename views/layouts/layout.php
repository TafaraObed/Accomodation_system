<?php 
 function route($route, $id=null){  
    if($id){
        return "?route=$route&id=$id";
    }
    return "?route=" . $route;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My App'; ?></title>
    <!-- Add your stylesheets here -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="/students">Students</a></li>
                <li><a href="/login">Login</a></li>
                <!-- Add other navigation links -->
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <?php include($content); ?>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My App</p>
    </footer>

    <!-- Add your scripts here -->
</body>
</html>
