<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $preferredDate = $_POST['preferred_date'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name, email, phone, preferred_date, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $email, $phone, $preferredDate, $message);
    $stmt->execute();
    $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="contact.css">
  <title>Contact | Kishan Tattoo</title>
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
  <div class="heading-section"><h1>book an appointment</h1>
  <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4802.280180012514!2d121.10756288554025!3d14.312213450405446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d9742cf175af%3A0xeb4b8137cf827d01!2sOlways%20tattoo!5e1!3m2!1sen!2sph!4v1747982232979!5m2!1sen!2sph"
      width="70%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
<br><h2>shop opens at:</h2>
  <br><p>Monday – Sunday<br>12:00 AM – 8:30 PM</p>
 
</div>
  <div class="form-section">
    <form method="POST">
      <div class="form-group">
        <label for="firstName">Name *</label>
        <input type="text" id="firstName" name="firstName" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone *</label>
        <input type="tel" id="phone" name="phone" class="no-arrow" placeholder="Phone" required>
      </div>
      <div class="form-group">
          <label for="preferred_date">Preferred Date *</label>
          <input type="date" id="preferred_date" name="preferred_date" required>
      </div>
      <div class="form-group">
        <label for="message">Message *</label>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
        <?php if (!empty($submitted)) echo "<p>Message sent successfully!</p>"; ?>
      </div>
    </form>
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