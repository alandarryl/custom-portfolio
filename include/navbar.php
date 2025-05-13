<!-- filepath: c:\xampp\htdocs\PHP\projet personal\CUSTOM PORTFOLIO\include\navbar.php -->
<style>

    .container .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #feffbf;
        transition: color 0.3s ease;
    }
    .container .navbar-brand:hover {
        color: #0abdf8;
    }
    .container .navbar-brand span {
        /* color: #007bff; */
        color: #0abdf8;
    }
    .navbar-nav .nav-link {
        font-size: 1.4rem;
        margin-right: 20px;
        color: #feffbf;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
        color: #0abdf8;
    }
    .language-selector {
        margin-left: 20px;
        display: flex;
    }
    .language-selector button {
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        background-color: #6c757d;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .language-selector button.active {
        background-color: #007bff;
    }
    .language-selector button:hover {
        background-color: #0056b3;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php"><span>J</span>onathan</a>
        
        <!-- Burger Menu Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <!-- Language Selector -->
            <div class="language-selector">
                <form method="GET" action="">
                    <button type="submit" name="lang" value="en" class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'active' : ''; ?>">English</button>
                    <button type="submit" name="lang" value="fr" class="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'fr') ? 'active' : ''; ?>">Français</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>