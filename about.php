

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

    .container.my-5 .img-container{
        display: flex;
        justify-content: center;
        align-items: start;
        margin-right: 20px;
        margin-bottom: 20px;
        max-width: 300px;
    }

    img.img-fluid {
        width: 100%;
        max-width: 300px;
        border-radius: 7px;
        border: 2px solid rgb(71, 151, 255);
    }


    .top-content p {
        font-size: 1.2rem;
        color: #f8f9fa;
    }

    .top-content, .middle-content, .bottom-content {
        margin: 20px 0;
    }

    .middle-content label {
        font-weight: bold;
        color: #f8f9fa;
    }

    .middle-content .list-group {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .list-group .list-group-item {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    background-color: #3a2b70;
    border: none;
    color: #007bff;
    font-weight: bold;
    text-align: center;
    max-width: 120px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, color 0.3s;
}

.list-group-item:hover {
    background-color: #0abdf8;
    color: #fff;
    transition: 0.3s;
    cursor: pointer;
}


    .bottom-content ul {
        list-style-type: none;
        padding: 0;
    }

    .bottom-content ul li {
        font-size: 1rem;
        color: #f8f9fa;
        margin: 10px 0;
    }

    .timeline {
        list-style-type: none;
        padding: 0;
    }

    .timeline li {
        font-size: 1rem;
        color: #f8f9fa;
        margin: 10px 0;
    }

</style>
<body>
    
<!-- Navigation Bar -->
<?php include './include/navbar.php'; ?>

<!-- Content of the page about me -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Left Side: Image -->
        <div class="col-md-4 img-container">
            <img src="./assets/images/jonathan2.jpg" alt="Profile Picture" class="img-fluid shadow">
        </div>
        <!-- Right Side: Content -->
        <div class="col-md-8">
            <div class="top-content mb-4" id="intro">
                <h2 class="text-primary">Hello, I'm Jonathan</h2>
                <p>
                    Nice to meet you! I am Okana Jonathan, a junior web developer and currently a student in Paris at ECE. 
                    If you have any questions about me or my work, please do not hesitate to contact me. I will be happy to answer you.
                </p>
            </div>
<!-- filepath: c:\xampp\htdocs\PHP\projet personal\CUSTOM PORTFOLIO\about.php -->
<div class="middle-content mb-4" id="skills">
    <h3 class="text-secondary">Practical Skills</h3>
    <div class="practice-skills">
        <div class="mb-3">
            <label for="html" class="form-label">HTML</label>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="css" class="form-label">CSS</label>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="javascript" class="form-label">JavaScript</label>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="php" class="form-label">PHP</label>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="mysql" class="form-label">MySQL</label>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="react" class="form-label">React</label>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="laravel" class="form-label">Laravel</label>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
        <div class="mb-3">
            <label for="bootstrap" class="form-label">Bootstrap</label>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
        </div>
    </div>
</div>
            <div class="middle-content mb-4" id="skills">
                <h3 class="text-secondary">Soft Skills</h3>
                <ul class="list-group soft-skills">
                    <li class="list-group-item">Git</li>
                    <li class="list-group-item">GitHub</li>
                    <li class="list-group-item">Figma</li>
                    <li class="list-group-item">Canva</li>
                    <li class="list-group-item">UI/UX Design</li>
                    <li class="list-group-item">Responsive Design</li>
                    <li class="list-group-item">Team Collaboration</li>
                    <li class="list-group-item">Problem Solving</li>
                    <li class="list-group-item">Time Management</li>
                    <li class="list-group-item">Communication</li>
                    <li class="list-group-item">Adaptability</li>
                    <li class="list-group-item">Creativity</li>
                </ul>
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