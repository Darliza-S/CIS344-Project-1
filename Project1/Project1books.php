
<?php
// Project1books.php - contains all the books the club has read with a try-catch to handle potential errors
?>
<!DOCTYPE html>
<html>
<head>

<?php // Link to external CSS file for styling ?>
    <title>Mist Book Club - Books</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php // Header ?>
    <?php include 'Project1header.php'; ?>

    <section>
        <h2>Current and Past Selections</h2>
        <ul>
            <?php
            // Defines an array of books
            $booksArray = array(
                "October 2024: <em>The Housemaid</em> by Freida McFadden",
                "September 2024: <em>The Inheritance Games</em> by Jennifer Lynn Barnes",
                "August 2024: <em>Rock, Paper, Scissors</em> by Alice Feeny",
                "July 2024: <em>Arcanum</em> by Alisa C",
                "June 2024: <em>Legend of The Willow</em> by Alexander D.",
                "May 2024: <em>The Perfect Marriage</em> by Jeneva Rose",
                "April 2024: <em>The Midnight Library</em> by Matt Haig",
                "March 2024: <em>Where the Crawdads Sing</em> by Delia Owens",
                "February 2024: <em>Educated</em> by Tara Westover",
                
            );

            // Use try-catch to handle potential errors
            try {
                // Check if the books array is not empty
                if (empty($booksArray)) {
                    throw new Exception("No books available.");
                }

                // Iterate through the books array
                foreach ($booksArray as $book) {
                    echo "<li><strong>" . $book . "</strong></li>";
                }
            } catch (Exception $e) {
                // Handle the exception by displaying an error message
                echo "<li><strong>Error: " . $e->getMessage() . "</strong></li>";
            } finally {
                // This block always runs even if there is nothing
                echo "<li>Thank you for checking our book selections!</li>";
            }
            ?>
        </ul>
    </section>

    <?php // Footer ?>
    <?php include 'Project1footer.php'; ?>

</body>
</html>