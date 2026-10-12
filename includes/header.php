
<?php
$pageTitle = $pageTitle ?? 'Hotel Charaideo | Kaziranga';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#08090b">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<header class="site-header">
  <nav class="site-nav">
    <a class="brand" href="/index.php">HOTEL CHARAIDEO</a>
    <button class="menu-toggle" id="menuToggle"
      aria-label="Open menu" aria-expanded="false">☰</button>
    <div class="nav-links" id="navLinks">
      <a href="/index.php">Home</a>
      <a href="/rooms.php">Room Facilities</a>
      <a href="/contact.php">Contact</a>
    </div>
  </nav>
</header>
<main>
