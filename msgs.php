<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James Obong'o | Professional Portfolio</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
</html>
<?php
    include 'config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['username'];
        $rating= trim($_POST['rating']);
        $comment = $_POST['comment'];

        if($rating>0){
            $sqli = $conn->prepare("INSERT INTO dev_rating (Username, stars, comment) VALUES (?, ?, ?)");
            $sqli->bind_param('sis', $name, $rating, $comment);

            if ($sqli->execute()) {
                            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                           <script>
                            Swal.fire({
                            title: 'Received!',
                            text: 'thank you for your feedback😊.',
                            background: '#000e23ff',
                            icon: 'success',
                            confirmButtonText: 'OK'
                            }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'index.php';
                            }
                            });
                          </script>;";
            } else {
                // Error - handled by JavaScript
                echo"Swal.fire({
                        title: 'Error!',
                        text: 'There was an error in sending the feedback. Please try again later.',
                        icon: 'error',
                        background: '#0a192f',
                        color: '#e6f1ff',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#ffd700'
                    });";
            }
            }else{
                
                echo"<script> alert('Please select atleast one star'); window.history.back();</script>";
            }
        $conn->close();
    }
?>