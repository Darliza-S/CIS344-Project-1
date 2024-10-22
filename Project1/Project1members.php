

<?php
// Project1members.php - displays all the members in the club with their favorite book and the order switches everytime
?>
<!DOCTYPE html>
<html>
<head>

    <title>Mist Book Club - Members</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php // header that is in all the pages ?>

    <?php include 'Project1header.php'; ?>

    <section>
        <h2>Our Members</h2>

        <?php // random image for aesthetic ?>
        <img src="BK.jpg" style="height: 140px; width: 140px; border-radius: 50%; object-fit: cover;" />

        <ul>
            <?php
            // Defines array of members by name and favorite book with tittle slanted
            $membersArray = array(
                "Lizbeth C. : Favorite Book - <em>The Great Gatsby</em> by F. Scott Fitzgerald",
                "Chris E. : Favorite Book - <em>1984</em> by George Orwell",
                "Maya A. : Favorite Book - <em>The Alchemist</em> by Paulo Coelho",
                "Brenda E. : Favorite Book - <em>A Good Girl's Guide to Murder</em> by Holly Jackson",
                "Dianna C. : Favorite Book - <em>Shatter Me</em> by Tahereh Mafi",
                "Bruno M. : Favorite Book - <em>Harry Potter and the Philosopher's Stone</em> by J.K. Rowling",
                "Kaelyn G. : Favorite Book - <em>Pride and Prejudice</em> by Jane Austen",
                "Darliza S. : Favorite Book - <em>The Silent Patient</em> by Alex Michaelides"
            );

            // Shuffle the members array
            shuffle($membersArray);

            // Iterate through the shuffled members array and display each member
            foreach ($membersArray as $member) {
                echo "<li><strong>" . $member . "</strong></li>";
            }
            ?>
        </ul>
    </section>

    <?php // Footer that is in all the pages ?>
    <?php include 'Project1footer.php'; ?>

</body>
</html>