<?php 
    session_start();

    if(!isset($_SESSION["fname"])){
        header("location:login.php");
        exit;
    }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="brand-logo"> BTS ALBUMS INDEX</a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="add_album.php">Add Albums</a></li>
            <li><a href="manage_album.php">Manage Albums</a></li>  
        </ul> 
    </div>
</nav>

 
    <div class="hero">
    <img src="https://i.pinimg.com/1200x/9b/61/23/9b61230e43c5dba828fb4372463d21e4.jpg" alt="BTS" class="hero-bg">
    <div class="hero-overlay">
        <h1 class="hero-title">The Album Archive</h1>
        <p class="hero-sub">Every era, every release, all in one place</p>
    </div>
</div>
<div class="container">
        <h1>Hey, <?= $_SESSION["fname"]?></h1>
        <a href="logout.php">Logout</a>
    </div>
    <?php
        include 'action/connect.php';
        $sql = "SELECT * FROM Albums";
        $result = mysqli_query($con,$sql);
    ?>

<div class="main-content">
    <div class="album-grid">
        <?php
            foreach($result as $Albums){
                ?>
                <div class="album-card">
                    <div class="album-cover">
                        <img src="<?= $Albums["album_cover"] ?>" alt="<?= $Albums["title"] ?>">
                    </div>
                    <div class="album-info">
                        <span class="album-id"><?= $Albums["Album_id"] ?></span>
                        <h3 class="album-title"><?= $Albums["title"] ?></h3>
                        <p class="album-meta"><?= $Albums["release_date"] ?></p>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>

    <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2026 Y.K.SEEMEINSOMEONE. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>