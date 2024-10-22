

<?php
// Project1processorder.php - Should Handle both join form and contact form submissions?
?>
<!DOCTYPE html>
<html>
<head>
    <title>The Mist Book Club - Submission Results</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php // Header that goes on all the pages ?>
    <?php include 'Project1header.php'; ?>

    <section>
        <h2>Submission Results</h2> 
        <?php
        // Set document root and output file path got that from chapter 1
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        $date = date('H:i, jS F Y');

        // Check if form data is received
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prepares output string for newmembers.txt
            $outputstring = '';

            // Determines the form type based on submitted fields
            if (isset($_POST['fullname'])) {

                // Join Form Submission
                $fullname = htmlspecialchars(trim($_POST['fullname']));
                $email = htmlspecialchars(trim($_POST['email']));
                $favorite_genre = htmlspecialchars(trim($_POST['favorite_genre']));

                // Display confirmation message
                echo '<p>Thank you, <strong>' . $fullname . '</strong>, for joining the Mist Book Club!</p>';
                echo '<ul><li>Full Name: ' . $fullname . '</li>';
                echo '<li>Email Address: ' . $email . '</li>';
                echo '<li>Favorite Genre: ' . ucfirst($favorite_genre) . '</li></ul>';
                
                // Output string for join form
                $outputstring = $date . "\tJoin Form\t" . $fullname . "\t" . $email . "\t" . $favorite_genre . "\n";

            } elseif (isset($_POST['name'])) {
                // Contact Form Submission
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $message = htmlspecialchars(trim($_POST['message']));

                // should Display confirmation message
                echo '<p>Thank you, <strong>' . $name . '</strong>, for contacting us!</p>';
                echo '<p>Your message:</p>';
                echo '<p>' . nl2br($message) . '</p>';
                
                //output string for contact form
                $outputstring = $date . "\tContact Form\t" . $name . "\t" . $email . "\tMessage: " . $message . "\n";
            } else {
                echo '<p>Invalid form submission.</p>';
            }

            // Saves the output to the newmembers.txt file
            if ($outputstring) {
                // Open newmembers.txt for appending
                @$fp = fopen("$document_root/../newmembers.txt", 'ab');

                if (!$fp) {
                    echo "<p><strong> Your submission could not be processed at this time. Please try again later.</strong></p>";
                    exit;
                }

                // Writes to file or displays an error message
                flock($fp, LOCK_EX);
                fwrite($fp, $outputstring, strlen($outputstring));
                flock($fp, LOCK_UN);
                fclose($fp);

                echo "<p>Your submission has been saved.</p>";
            }
        } else {
            echo '<p>No form data received.</p>';
        }
        ?>    
    </section>

    <?php // Footer ?>
    <?php include 'Project1footer.php'; ?>

</body>
</html>