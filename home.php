<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Indian Art</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(155, 176, 190);
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .art-section {
            margin: 20px 0;
            padding: 20px;
            border-bottom: 2px solid #ddd;
        }
        img {
            width: 300px;
            height: 375px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <h2>Explore Indian Art</h2>
        
        <div class="art-section">
            <h3>Mandala Art</h3>
            <img src="mandala.jpg" alt="Mandala Art">
            <p>Mandala art is a geometric design that holds spiritual significance in Hindu and Buddhist cultures. It represents the universe and is often used for meditation.</p>
            <p><strong>Rate:</strong> ₹2,500</p>
        </div>
        
        <div class="art-section">
            <h3>Madhubani Painting</h3>
            <img src="madhubani.jpg" alt="Madhubani Painting">
            <p>Madhubani is a folk painting style from Bihar, India. It is known for its intricate patterns and depictions of mythological stories and nature.</p>
            <p><strong>Rate:</strong> ₹3,200</p>
        </div>
        
        <div class="art-section">
            <h3>Warli Art</h3>
            <img src="warli.jpg" alt="Warli Art">
            <p>Warli art originates from Maharashtra and features tribal paintings that depict daily life, animals, and nature using basic geometric shapes.</p>
            <p><strong>Rate:</strong> ₹1,800</p>
        </div>
        
        <div class="art-section">
            <h3>Pattachitra Painting</h3>
            <img src="Pattachitra.jpg" alt="Pattachitra Painting">
            <p>Pattachitra is a traditional scroll painting style from Odisha and West Bengal. It showcases mythological stories with intricate detailing.</p>
            <p><strong>Rate:</strong> ₹4,000</p>
        </div>
        
        <div class="art-section">
            <h3>Kalamkari Art</h3>
            <img src="Kalamkari.jpg" alt="Kalamkari Art">
            <p>Kalamkari is a hand-painted or block-printed textile art from Andhra Pradesh. It often depicts epic stories from Indian mythology.</p>
            <p><strong>Rate:</strong> ₹3,500</p>
        </div>
        
        <h2><a href="logout.php">Logout</a></h2>
    </div>
</body>
</html>
