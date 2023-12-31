<!-- home.php -->
<?php
$pageTitle = "Home";
$pageContent = "home-content.php";
include "template.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Background</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    overflow: hidden; /* Hide any overflowing content */
  }

  video {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; /* Use width instead of min-width for responsiveness */
    height: 100%; /* Use height instead of min-height for responsiveness */
    object-fit: cover; /* Maintain video aspect ratio and cover the entire viewport */
    z-index: -1; /* Place the video behind other content */
  }

  /* Add styles for the menu bar */
  .menu {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background */
    padding: 1rem;
    box-sizing: border-box;
    z-index: 1; /* Place menu above video content */
    display: flex;
    justify-content: space-between;
    align-items: center;
    opacity: 0; /* Start with opacity 0 for fade-in animation */
    animation: fadeIn 1s forwards; /* Apply fade-in animation */
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  .menu a {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.2s ease;
    cursor: pointer; /* Add a pointer cursor on hover */
  }

  .menu a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: scale(1.1);
  }

  /* Add additional styling for your content */
  .content {
    position: relative;
    z-index: -1; /* Place content above the video and menu */
    text-align: center;
    padding: 20vh 5%; /* Adjust padding for better mobile display */
    transform: translateY(-20px); /* Start with a higher position for slide-down animation */
    animation: slideDown 1s forwards; /* Apply slide-down animation */
  }

  @keyframes slideDown {
    to {
      transform: translateY(0);
    }
  }

  h1 {
    color: white;
    font-size: 4vw; /* Use viewport units for font size */
    margin-bottom: 1rem; /* Add some spacing between heading and paragraph */
  }

  p {
    color: white;
    font-size: 1.6vw; /* Use viewport units for font size */
  }
</style>
</head>
<body>
  <video autoplay muted loop>
    <source src="lake_-_91562 (1080p).mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="menu">
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="services.html">Services</a>
    <a href="contact.html">Contact</a>
    <a href="login.html" class="login-button">Login</a> <!-- Add the login button to the menu -->
  </div>
  
  <div class="content">
    <h1>Welcome to My Website</h1>
    <p>This is some content on top of the video background.</p>
  </div>
</body>
</html>
