<!DOCTYPE html>
<html>
<head>
    <title>La Chouette</title>
    <link rel="stylesheet" type="text/css" href="include/style/style.css">
</head>
<body>
    <header>
        <h1>La Chouette</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?page=about">A propos</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'about') {
                include('about.php');
            } elseif ($page == 'contact') {
                include('contact.php');
            } else {
                include('home.php');
            }
        } else {
            include('home.php');
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2020 La Chouette</p>
    </footer>
</body>
</html>