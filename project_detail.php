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
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .carousel-inner{
        height: auto;
        min-width: 400px;
        border-radius: 7px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    } 

    .carousel-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container.my-5 .projects {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 70px;
        margin-top: 20px;
        width: 100%;
    }

    .project-details {
        width: 100%;
        min-width: 800px;
        margin-left: 20px;
        padding: 20px;
        background-color: #3a2b70;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .project-details h1 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #feffbf;
    }

    .project-details p {
        font-size: 1rem;
        color: #f8f9fa;
        padding: 0 10px 10px;
    }

    .project-details ul {
        list-style-type: none;
        padding: 0;
    }


    .project-details a {
        text-decoration: none;
        color: rgb(71, 151, 255);
        font-size: 1rem;
        padding: 5px 0;
    }

    .project-details a:hover {
        text-decoration: underline;
    }

    .project-details h2 {
        font-size: 1.5rem;
        margin: 10px 0;
        color: #feffbf;
    }

    .project-details .list-group {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: start;
        gap: 10px;
        margin: 25px 0;
    }

    .list-group .list-group-item {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    padding: 5px 7px;
    border-radius: 5px;
    border: none;
    background-color: #f8f9fa;
    color: #007bff;
    font-weight: bold;
    text-align: center;
    max-width: 120px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, color 0.3s;
}

.list-group-item:hover {
    background-color: #007bff;
    color: #fff;
    transition: 0.3s;
    cursor: pointer;
}

    .project-details a {
        text-decoration: none;
        color: rgb(71, 151, 255);
        font-size: 1rem;
        transition: scale 0.3s ease;
    }

    .project-details a:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .project-details .btn-primary {
        background-color: rgb(71, 151, 255);
        border-color: rgb(71, 151, 255);
        margin-top: 20px;
    }

    .project-details .btn-primary:hover {
        background-color: rgb(50, 130, 200);
        border-color: rgb(50, 130, 200);
    }

    .project-details .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(71, 151, 255, 0.5);
    }

    /* adapt it for small screens */
    @media (max-width: 1000px) {
        .container.my-5 {
        min-height: 70vh;
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .carousel-inner{
        height: 70vh;
        min-width: 100%;
        max-width: 100%;
        border-radius: 7px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    } 

    .carousel-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container.my-5 .projects {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 70px;
        margin-top: 20px;
        width: 100%;
    }

    .project-details {
        width: 100%;
        min-width: 100%;
        max-width: 100%;
        margin-left: 20px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    }

    
</style>
<body>
    

<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- page content -->

<div class="container my-5">


    <!-- bootstrap image carousel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- carousel container for image  start -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/jonathan1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/jonathan2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/jonathan1.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <!-- carousel container for image end -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- project details -->
    <div class="project-details">
        <h1>Project Title</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <h2>Technologies Used</h2>
        <ul class="list-group ">
            <li class="list-group-item">HTML</li>
            <li class="list-group-item">CSS</li>
            <li class="list-group-item">JavaScript</li>
            <li class="list-group-item">PHP</li>
        </ul>
        <h2>Project Link</h2>
        <a href="#">View Project</a>
        <h2>GitHub Repository</h2>
        <a href="#">View Code</a>
        <h2>Live Demo</h2>
        <a href="#">View Live Demo</a>
    </div>
    <!-- project details end -->


</div>

<!-- footer section  -->
<?php include './include/footer.php'; ?>

</body>
</html>