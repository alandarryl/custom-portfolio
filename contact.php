<?php

// contact.php
// Include database connection
include './include/db.php';

// Check if the form is submitted

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
    <?php include './include/bootstrap.php'; ?>
    <title>Document</title>
</head>
<style>
    .container.my-5 {
        min-height: 70vh;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container.my-5 form {
        width: 100%;
        max-width: 600px;
        margin-top: 20px;
    }

    .container.my-5 form .form-label {
        font-weight: bold;
    }

    .container.my-5 form .btn-primary {
        background-color: rgb(71, 151, 255);
        border-color: rgb(71, 151, 255);
    }
</style>
<body>
    

<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- page content form -->

<div class="container my-5">
    <h1>Contact Me</h1>
    <form action="contact.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- footer section  -->
<?php include './include/footer.php'; ?>

</body>
</html>