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

    .container.my-5 h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #feffbf;
    }

    .container.my-5 .projects {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 15px;
        margin-top: 20px;
        width: 100%;
    }

    .container.my-5 .projects .project {
        width: 370px;
        text-align: center;
        border-radius: 7px;
        background-color: #3a2b70;
        color: #feffbf;
        /* border: 2px solid rgb(71, 151, 255); */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: start;
    }

    .projects .project img {
        width: 100%;
        height: auto;
        border-radius: 7px 7px 0 0;
        margin-bottom: 10px;
        object-fit: cover;
        height: 200px;
    }

    .projects .project h2 {
        font-size: 1.5rem;
        color: #feffbf;
        padding: 10px;
        margin: 10px 0;
    }

    .projects .project p {
        font-size: 1rem;
        color: #feffbf;
        padding: 0 10px 10px;
    }


    .container.my-5 .projects a {
        text-decoration: none;
        color: inherit;
        transition: scale 0.3s ease;
    }

    .container.my-5 .projects .project:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    @media (max-width: 768px) {
        .container.my-5 .projects {
            flex-direction: column;
            align-items: center;
        }

        .container.my-5 .projects .project {
            width: 100%;
            max-width: 370px;
        }
    }

</style>
<body>
    

<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- page content -->

<div class="container my-5">
    <h1>My Projects</h1>
    <div class="projects">
        <a href="project_detail.php">
            <div class="project">
                <img src="./assets/images/jonathan1.jpg" alt="">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="project">
                <img src="./assets/images/jonathan2.jpg" alt="">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="project">
                <img src="./assets/images/jonathan1.jpg" alt="">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="project">
                <img src="./assets/images/jonathan1.jpg" alt="">
                <h2>Project 1</h2>
                <p>Description of project 1.</p>
            </div>
        </a>

        <a href="#">
            <div class="project">
                <img src="./assets/images/jonathan1.jpg" alt="">
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