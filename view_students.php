<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Students</h1>
    <a href="add_student.php" class="btn btn-success mb-3">Add New Student</a>
    <div class="row">
        <?php foreach ($students as $student): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($student['name']); ?></h5>
                    <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($student['email']); ?></p>
                    <p class="card-text"><strong>Age:</strong> <?php echo htmlspecialchars($student['age']); ?></p>
                    <p class="card-text"><strong>Course:</strong> <?php echo htmlspecialchars($student['course']); ?></p>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
