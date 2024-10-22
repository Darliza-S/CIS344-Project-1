



<?php
// Project1join.php - This file contains the form for users to join the Mist Book Club.
?>
<!DOCTYPE html>
<html>
<head>

<?php // Link to external CSS file for styling ?>
    <title>Mist Book Club - Join Us</title>
    <link href="styles.css" type="text/css" rel="stylesheet">

</head>
<body>

<?php // header ?>
    <?php include 'Project1header.php'; ?>

    <?php //Main content section for the 'Join the Book Club' page ?>
    <section>
        <h2>Join the Book Club</h2>

        <p>  Join us today and become part of a growing community of book enthusiasts who celebrate the magic of storytelling. Together, let’s embark on countless literary adventures!  </p>

        <p> Membership is free, and it only takes a minute to join. </p>

        <p> Our book club meets once a month, giving members plenty of time to read, reflect, and prepare for in-depth conversations. Here's everything you need to know about our meetings:</p>
        <p>Meeting Time: We gather every Tuesday or Thursday of the month at 7:50 PM. </p>
        <p>Location: Currently, we are hosting both in-person and virtual meetings to accommodate all our members. </p>
        <p>  In-Person Location: Cozy up with us at The Mist Café, located at 344 Book Street, Literary Town. We’ve reserved a private space where you can grab a drink, settle in with your fellow readers, and dive deep into our latest book pick!</p>
        <p>  Virtual Option: Can’t make it in person? No problem! Join our discussion via Zoom. The meeting link and details are shared through our email newsletter. </p>
        <p> </p>
        <p> </p>

        <?php //Start of the form for new members to join the club ?>
        <form action="Project1processorder.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <?php //cool Dropdown menu with 5 options for selecting a favorite genre ?>
            <label for="favorite_genre">Favorite Genre:</label>
            <select id="favorite_genre" name="favorite_genre" required>
                <option value="">Select a genre</option>
                <option value="fiction">Fiction</option>
                <option value="nonfiction">Non-Fiction</option>
                <option value="mystery">Mystery</option>
                <option value="fantasy">Fantasy</option>
                <option value="biography">Biography</option>
                
            </select>

            <?php //Submit button to send the form data ?>
            <input type="submit" value="Join Now">
        </form>
    </section>


    
    <?php //Footer ?>
    <?php include 'Project1footer.php'; ?>

</body>
</html>