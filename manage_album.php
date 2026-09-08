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
        <a href="index.php" class="brand-logo">BTS ALBUMS INDEX</a>
         <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="add_album.php">Add Albums</a></li>
            <li><a href="manage_album.php">Manage Albums</a></li>  
        </ul> 
    </div>
</nav>

<?php
include 'action/connect.php';
$sql = "SELECT * FROM Albums";
$result = mysqli_query($con, $sql);
?>

<div class="main-content">
    <h1 class="page-title">Manage Albums</h1>
    <div class="album-grid">
        <?php
        foreach($result as $Albums){ ?>
        <div class="album-card manage-card">
            <div class="album-cover">
                <img src="<?= $Albums["album_cover"] ?>" alt="<?= $Albums["title"] ?>">
                <div class="card-actions">
                    <a href="edit_album.php?id=<?=$Albums['Album_id']?>" class="btn-edit">Edit</a>
                    <a href="action/delete_album.php?id=<?=$Albums['Album_id']?>" class="btn-delete">Delete</a>
                </div>
            </div>
            <div class="album-info">
                <span class="album-id"><?= $Albums["Album_id"] ?></span>
                <h3 class="album-title"><?= $Albums["title"] ?></h3>
                <p class="album-meta"><?= $Albums["release_date"] ?> · <?= $Albums["Artists_id"] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2026 Y.K.SEEMEINSOMEONE. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>