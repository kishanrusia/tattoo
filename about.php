<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="about.css">
  <title>Kishan Tattoo</title>
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
  <div class="image-section">
    <img src="images/kishan.jpg" alt="Portfolio Image">
  </div>
  <div class="text-section">
    <p>Kishan Rusia is a self-taught tattoo artist based in Santa Rosa City, Laguna. I’ve been tattooing for a few months now and constantly working on improving my skills through real client work and daily practice.

My style is mostly blackwork, with influences from American traditional, Japanese traditional, and cybersigilism. I like bold lines, strong contrast, and designs that stand out on skin. I’m still learning and growing, but I take every piece seriously and always aim to create tattoos that feel personal and well thought out.</p>
  </div>
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
</script>
</body>
</html>