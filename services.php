<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    .container.my-5 .services {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 70px;
        margin-top: 20px;
        width: 100%;
    }

    .container.my-5 .services .service {
        width: 300px;
        text-align: center;
        border-radius: 7px;
        /* border: 2px solid rgb(71, 151, 255); */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }



    .services .service h2 {
        font-size: 1.5rem;
        margin: 10px 0;
    }

    .services .service p {
        font-size: 1rem;
        color: #555;
        padding: 0 10px 10px;
    }

    .container.my-5 .servicess a {
        text-decoration: none;
        color: inherit;
        transition: scale 0.3s ease;
    }

    .container.my-5 .services .service:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

</style>
<body>
    

<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- page content -->

<div class="container my-5">
    <h1>My Projects</h1>
    <div class="projects">
        <a href="#">
            <div class="service">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="service">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="service">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="service">

                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="service">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>
    </div>
</div>

<!-- footer section  -->
<?php include './include/footer.php'; ?>

</body>
</html>