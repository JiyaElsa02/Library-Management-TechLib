<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechLib</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<style>
.header {
  overflow: hidden;
  background-color: #000000;
  padding: 20px 15px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
    </style>

<body>
<div class="header">
  <a href="#default" class="logo">TechLib</a>
  <div class="header-right">
    <a href="book.php"><u>Books</a>
    <a href="login.php"><u>Login</a>
    <a href="signin.php"><u>SignUp</a>
    <a href="contact.php"><u>Contact Us</a>
  </div>
</div>
</body>
</html>