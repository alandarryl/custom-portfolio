
<style>

    /* Basic styles for the navigation bar */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: #333;
        color: white;
        padding: 20px;
    }

    nav h1 {
        display: inline-block;
        margin: 0;
    }

    nav h1 a {
        color: white;
        text-decoration: none;
    }

    nav h1 span {
        color:rgb(71, 151, 255); /* Tomato color for the letter 'J' */
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        float: right;
    }

    nav ul li {
        display: inline;
        margin-left: 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }
</style>

<nav>
    <h1><a href="#"><span>J</span>onathan</a></h1>
    <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

