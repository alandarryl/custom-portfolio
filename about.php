

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <!-- Bootstrap CSS -->
    <?php include './include/bootstrap.php'; ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/about_style.css">
</head>
<style>
    .container.my-5 {
        min-height: 70vh;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    img.img-fluid {
        width: 100%;
        max-width: 300px;
        border-radius: 7px;
        border: 2px solid rgb(71, 151, 255);
    }
</style>
<body>
    
<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- Content of the page about me -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Left Side: Image -->
        <div class="col-md-4 text-center">
            <img src="./assets/images/jonathan2.jpg" alt="Profile Picture" class="img-fluid shadow">
        </div>
        <!-- Right Side: Content -->
        <div class="col-md-8">
            <div class="top-content mb-4" id="intro">
                <h2 class="text-primary">Hello, I'm Jonathan</h2>
                <p class="text-muted">
                    Nice to meet you! I am Okana Jonathan, a junior web developer and currently a student in Paris at ECE. 
                    If you have any questions about me or my work, please do not hesitate to contact me. I will be happy to answer you.
                </p>
            </div>
            <div class="bottom-content" id="timeline">
                <h3 class="text-secondary">My Journey</h3>
                <ul class="timeline">
                    <li>2023 - Started studying at ECE Paris</li>
                    <li>2024 - Completed my first web development project</li>
                    <li>2025 - Interned at a tech company</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include './include/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>