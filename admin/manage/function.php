<!-- filepath: c:\xampp\htdocs\PHP\projet personal\CUSTOM PORTFOLIO\admin\manage\function.php -->
<?php
// Connexion à la base de données
function connectDB() {
    $host = 'localhost';
    $dbname = 'portfolio';
    $username = 'root';
    $password = '';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

// Fonction pour enregistrer un utilisateur
function registerUser($username, $email, $password) {
    $pdo = connectDB();
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $email, $hashedPassword]);
}

// Fonction pour vérifier les informations de connexion
function loginUser($username, $password) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

// Fonction pour récupérer tous les projets
function getProjects() {
    $pdo = connectDB();
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter un projet
function addProject($title, $description, $image) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("INSERT INTO projects (title, description, image) VALUES (?, ?, ?)");
    return $stmt->execute([$title, $description, $image]);
}

// Fonction pour supprimer un projet
function deleteProject($projectId) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    return $stmt->execute([$projectId]);
}

// Fonction pour récupérer toutes les compétences
function getSkills() {
    $pdo = connectDB();
    $stmt = $pdo->query("SELECT * FROM skills ORDER BY level DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour ajouter une compétence
function addSkill($name, $level) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("INSERT INTO skills (name, level) VALUES (?, ?)");
    return $stmt->execute([$name, $level]);
}

// Fonction pour supprimer une compétence
function deleteSkill($skillId) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("DELETE FROM skills WHERE id = ?");
    return $stmt->execute([$skillId]);
}

// Fonction pour récupérer les informations de contact
function getContactInfo() {
    $pdo = connectDB();
    $stmt = $pdo->query("SELECT * FROM contact_info LIMIT 1");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Fonction pour mettre à jour les informations de contact
function updateContactInfo($email, $phone, $address) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("UPDATE contact_info SET email = ?, phone = ?, address = ? WHERE id = 1");
    return $stmt->execute([$email, $phone, $address]);
}
?>