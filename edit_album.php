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
        $id = $_GET['id'];
        include 'action/connect.php';

        $sql = "SELECT * FROM Albums WHERE Album_id= '$id' ";
        $result = mysqli_query($con, $sql);
        $Albums = mysqli_fetch_assoc($result);
    ?>

    <div class="main-content">
        <h1 class="page-title">Edit Album</h1>

        <div class="edit-layout">
            <div class="edit-preview">
                <img id="coverPreview" src="<?= $Albums['album_cover'] ?>" alt="<?= $Albums['title'] ?>">
            </div>

            <form action="action/update_album.php" method="post" class="edit-form">
                <div class="form-group">
                    <label for="album_id">Album ID</label>
                    <input type="text" id="album_id" name="album_id" value="<?=$Albums['Album_id'] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="title">Album Name</label>
                    <input type="text" id="title" name="title" value="<?=$Albums['title'] ?>">
                </div>

                <div class="form-group">
                    <label for="release_date">Release Date</label>
                    <input type="date" id="release_date" name="release_date" value="<?=$Albums['release_date'] ?>">
                </div>

                <div class="form-group">
                    <label for="album_cover">Cover Link</label>
                    <input type="text" id="album_cover" name="album_cover" value="<?=$Albums['album_cover'] ?>" oninput="document.getElementById('coverPreview').src = this.value">
                </div>

                <button type="submit" class="btn-save">Save Changes</button>
            </form>
        </div>
    </div>

    <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2026 Y.K.SEEMEINSOMEONE. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>