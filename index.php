<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="photo.css">
  <title>Photos | Kishan Tattoo
  </title>
</head>
<body>
<nav>
  <a href="index.php" class="logo">KISHAN TATTOO</a>
  <div class="menu-toggle" id="menuToggle">&#9776;</div>
  <div class="nav-links" id="navLinks">
    <div class="close-btn" id="closeBtn">&times;</div>
    <a href="index.php">photo</a>
    <a href="about.php">about</a>
    <a href="contact.php">contact</a>
  </div>
</nav>

<div class="container">
  <div class="photo-gallery">
    <?php
    $result = $conn->query("SELECT * FROM tattoos ORDER BY id DESC");
    $columns = [[], [], []];
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $columns[$i % 3][] = $row;
        $i++;
    }
    foreach ($columns as $col) {
        echo '<div class="column">';
        foreach ($col as $item) {
            echo '<div class="photo"><img src="images/' . $item['image_path'] . '" alt="' . htmlspecialchars($item['title']) . '"></div>';
        }
        echo '<div class="photo no-image"></div>';
        echo '</div>';
    }
    ?>
  </div>
</div>

<div class="lightbox" id="lightbox">
  <span class="close-btn" id="closeLightbox">&times;</span>
  <img id="lightboxImage" src="" alt="Full Screen View">
</div>

<footer>
  <div class="footer-left">
    <p>KISHAN TATTOO</p>
    <a href="https://www.instagram.com/kishantattooer" target="_blank" class="instagram-icon"><i class="fab fa-instagram"></i></a>
    <a href="https://www.facebook.com/kishanparilla/" target="_blank" class="facebook-icon"><i class="fab fa-facebook"></i></a>
  </div>
  <div class="footer-right">
    <p><a href="tel:+639653440309">📞 +63 965 344 0309</a></p>
  </div>
</footer>

<script>
  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('navLinks');
  const closeBtn = document.getElementById('closeBtn');
  menuToggle.addEventListener('click', () => navLinks.classList.add('active'));
  closeBtn.addEventListener('click', () => navLinks.classList.remove('active'));
  const photo = document.querySelectorAll('.photo img');
  const lightbox = document.getElementById('lightbox');
  const lightboxImage = document.getElementById('lightboxImage');
  const closeLightbox = document.getElementById('closeLightbox');
  photo.forEach(item => item.addEventListener('click', () => {
    lightboxImage.src = item.src;
    lightbox.classList.add('active');
  }));
  closeLightbox.addEventListener('click', () => lightbox.classList.remove('active'));
  lightbox.addEventListener('click', e => { if (e.target !== lightboxImage) lightbox.classList.remove('active'); });
</script>
</body>
</html>