<?php
$servername = "db";
$username = "php_docker";
$password = "13579";
$dbname = "php_docker";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all of your categories
$sql = "SELECT * FROM Categories";
$result = $conn->query($sql);

// Loop through each category and generate the HTML for it
while ($row = $result->fetch_assoc()) {
    $category_id = $row['category_id'];
    $category_name = $row['category_name'];

    // Retrieve the apps for the current category
    $sql = "SELECT * FROM Apps WHERE category_id = $category_id";
    $app_result = $conn->query($sql);

    // Generate the HTML for the current category
    echo '<li class="homepage-app-section">';
    echo '<h2>' . $category_name . '</h2>';
    echo '<ul class="list-unstyled">';

    while ($app_row = $app_result->fetch_assoc()) {
        echo '<label class="checkboxstyle" title="' . $app_row['download_link'] . '">';
        echo '<input type="checkbox" id="' . $app_row['name_id'] . '"><img src="images/Icon/' . $app_row['name_id'] . '.png">' . $app_row['app_name'] . '</label>';
        echo '<br>';
    }
    echo '</ul>';
    echo '</li>';
	
}

// Generate the script for generating
$sql = "SELECT * FROM Apps";
$app_result = $conn->query($sql);
echo '<script>';
echo 'function generate() {';

	while ($app_row = $app_result->fetch_assoc()) {
		echo 'var checkBox' . $app_row['name_id'] . ' = document.getElementById("' . $app_row['name_id'] . '");';
		echo 'if (checkBox' . $app_row['name_id'] . '.checked == true){window.open("' . $app_row['download_link'] . '");}';
	}

echo '}';
echo '</script>';

// Close your database connection
$conn->close();

?>