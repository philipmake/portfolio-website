
<?php

require '../blog/config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']); 
    $author = $conn->real_escape_string($_POST['author']); 
    $date = $conn->real_escape_string($_POST['date']); 
    $content = $conn->real_escape_string($_POST['content']); 

    $query = "INSERT INTO posts(title, author, date, content)
    VALUES('$title', '$author', '$date', '$content')";

    if ($conn->query($query) === TRUE) {
        echo "New post added";
    } else {
        echo "Error:" .$query ."<br>" . $conn->error;
    }
}
$conn->close();

?>
