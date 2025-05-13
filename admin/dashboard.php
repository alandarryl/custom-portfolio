

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM8d7x1z5l5e5c5e5e5e5e5e5e5e5e5e5e5e5" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
        }
        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .sidebar a.active {
            background-color: #007bff;
            color: #fff;
        }
        .content {
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar">
            <h3>Admin Panel</h3>
            <a href="#" class="load-content" data-target="./manage/manage_project.php">Manage Projects</a>
            <a href="#" class="load-content" data-target="./manage/manage_skills.php">Manage Skills</a>
            <a href="#" class="load-content" data-target="./manage/manage_message.php">Manage Messages</a>
            <a href="#" class="load-content" data-target="./manage/setting.php">Settings</a>
            <a href="logout.php" class="btn btn-danger" style="color: #fff;" >Logout</a>
        </div>
        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 content">
            <h1 class="mb-4">Welcome to the Admin Dashboard</h1>
            <div id="dynamic-content">
                <!-- Le contenu chargé dynamiquement apparaîtra ici -->
                <p>Select an option from the sidebar to manage your portfolio.</p>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- autres script -->
     <script src="../admin/manage/manage_script.js" ></script>
</body>
</html>