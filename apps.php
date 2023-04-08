<?php

// Connect to your database
$servername = "localhost";
$username = "php_docker";
$password = "13579";
$dbname = "php_docker";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the category ID from the URL
$category_id = $_GET['category_id'];

// Retrieve the name of the specified category
$sql = "SELECT category_name FROM Categories WHERE category_id = $category_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$category_name = $row['category_name'];

// Retrieve the apps for the specified category
$sql = "SELECT * FROM Apps WHERE category_id = $category_id";
$result = $conn->query($sql);

// Generate the HTML for your page
echo '<li class="homepage-app-section">';
echo '<h2>' . $category_name . '</h2>';
echo '<ul class="list-unstyled">';

while ($row = $result->fetch_assoc()) {
    echo '<label class="checkboxstyle" title="' . $row['download_link'] . '">';
    echo '<input type="checkbox" name="app[]" value="' . $row['app_name'] . '"><img src="' . $row['image_url'] . '">' . $row['app_name'];
    echo '</label>';
    echo '<br>';
}

echo '</ul>';
echo '</li>';

// Close your database connection
$conn->close();

?>