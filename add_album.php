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

<div class="main-content">
    <h1 class="page-title">Add New Album</h1>

    <div class="edit-layout">
        <div class="edit-preview">
            <img id="coverPreview" src="" alt="Cover preview" onerror="this.style.opacity=0" onload="this.style.opacity=1">
            <div class="preview-placeholder" id="previewPlaceholder">No cover yet</div>
        </div>

        <form action="action/insert_album.php" method="post" class="edit-form">
            <div class="form-group">
                <label for="album_id">Album ID</label>
                <input type="text" id="album_id" name="Album_id" placeholder="e.g. B04">
            </div>

            <div class="form-group">
                <label for="title">Album Title</label>
                <input type="text" id="title" name="title" placeholder="e.g. Map of the Soul: 7">
            </div>

            <div class="form-group">
                <label for="release_date">Release Date</label>
                <input type="date" id="release_date" name="release_date">
            </div>

            <div class="form-group">
                <label for="album_cover">Cover Link</label>
                <input type="text" id="album_cover" name="album_cover" placeholder="Paste image URL"
                       oninput="document.getElementById('coverPreview').src = this.value; document.getElementById('previewPlaceholder').style.display = this.value ? 'none' : 'flex';">
            </div>

            <button type="submit" class="btn-save">Add Album</button>
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