<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Student Login</h1>
        <form action="login.php" method="post">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
    <?php
session_start();

$host = 'localhost';
$db = 'school_management';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $student_id = $_POST['student_id'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare('SELECT * FROM students WHERE student_id = :student_id');
        $stmt->execute(['student_id' => $student_id]);
        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($student && password_verify($password, $student['password'])) {
            $_SESSION['student_id'] = $student_id;
            header('Location: dashboard.php');
            exit;
        } else {
            echo '<p>Invalid credentials. Please try again.</p>';
        }
    }
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

</body>
</html>

