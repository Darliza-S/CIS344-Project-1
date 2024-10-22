


<!DOCTYPE html>
<html>
<head>

<?php // Link to external CSS file for styling ?>
    <title>The Mist Book Club - Contact</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <?php //Header ?>
    <?php include 'Project1header.php'; ?>

    <?php //Main content section for the Contact page ?>
    <section>
        <h2>Contact Us</h2>

        <p>If you have any questions or need help, feel free to reach out to us!</p>
        <p>Phone: (248) 434-5508<br>Email: MistBookclub@gmail.com<br>Or use the form below!</p>

        <?php //Contact form where users can enter their details and send a message ?>
        <form action="Project1processorder.php" method="post">

        <?php //Input field for the user's name ?>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <?php //Input field for the user's email ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <?php //Text area for the user to enter their message ?>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <?php //Submit button to send the form data ?>
            <input type="submit" value="Send Message">
        </form>
    </section>


    <?php //Footer ?>
    <?php include 'Project1footer.php'; ?>

</body>
</html>