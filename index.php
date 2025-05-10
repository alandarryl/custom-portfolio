<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './include/bootstrap.php'; ?>
    <title>Document</title>
</head>
<style>


    .container_wrapper{
        max-width: 100%;
        min-height: 90vh;
        margin: 0 90px;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    img {
        width: 270px;
        height: auto;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgb(71, 151, 255);
        margin-right: 25px;
    }

    .container_text {
        max-width: 600px;
    }

    .container_text h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .container_text p {
        font-size: 1.2rem;
        margin-bottom: 20px;
        color: #555;
    }

    .text_button {
        display: flex;
        gap: 20px;
    }

    /* adapter la taille de la page */
    @media (max-width: 768px) {
        .container_wrapper {
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
        }

        img {
            margin-right: 0;
            margin-bottom: 20px;
        }

        .container_text {
            text-align: center;
        }

        .text_button {
        display: flex;
        /* justify-content: space-around; */
        flex-direction: column;
        align-items: center;
    }
    }


</style>
<body>
    

<!-- navigation barre -->
<?php include './include/navbar.php'; ?>
<!-- page content -->

<div class="container_wrapper">
    <!-- <div class="container"> -->
        
    <img src="./assets/images/jonathan1.jpg" alt="">
    <div class="container_text">
        <h2>hello, i am a web developer</h2>
        <p>Nice to meet you i am okana jonathan a junior web developer and currently a student in paris in the school ECE.
            if you have any question about me or my work, please do not hesitate to contact me. I will be happy to answer you.
        </p>
        <div class="text_button">
            <a href="contact.php" class="btn btn-primary">Contact Me</a>
            <a href="about.php" class="btn btn-primary" >learn more about me</a>
        </div>
    </div>
</div>

<!-- footer section  -->
<?php include './include/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>