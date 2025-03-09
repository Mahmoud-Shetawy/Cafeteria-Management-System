<?php session_start(); ?>
<?php require "../config/config.php" ?>
<?php include '../include/header.php' ?>
<?php
$query = "SELECT * FROM users";
$result = $conn->prepare($query);
$result->execute();
$users = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="./css/myorder.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        /* Coffee-Themed Styles (Scoped to Avoid Bootstrap Conflicts) */
        .bod {
            font-family: 'Georgia', serif;
            background-color:rgb(241, 239, 239); /* Dark espresso */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .custom-container {
            width: 80%;
            max-width: 1000px;
            background: #efebe9; /* Latte cream */
            padding: 20px;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            color: #5d4037; /* Rich coffee brown */
            margin-bottom: 20px;
        }

        .btn-custom {
            display: inline-block;
            background: #795548; /* Mocha brown */
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .btn-custom:hover {
            background: #4e342e; /* Dark roasted coffee */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #efebe9; /* Latte cream */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        thead {
            background: #6d4c41; /* Deep espresso brown */
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #bcaaa4; /* Soft cappuccino border */
        }

        th {
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background: #d7ccc8; /* Warm coffee foam */
        }

        tbody tr:hover {
            background: #a1887f; /* Light caramel brown */
        }

        td img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
            /* border: 2px solid #6d4c41; */
        }

        .delete-btn {
            background: #d84315; /* Burnt orange coffee roast */
            color: white;
            border: none;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background 0.3s ease-in-out;
        }

        .delete-btn:hover {
            background: #bf360c; /* Dark roasted bean */
        }

        @media (max-width: 768px) {
            .custom-container {
                width: 95%;
                padding: 15px;
            }

            th, td {
                padding: 8px;
                font-size: 14px;
            }

            .btn-custom {
                padding: 8px 12px;
            }
        }
    </style>
</head>

<body>
<div class="bod">
<div class="custom-container">
    <h1>All Users</h1>
    <a href="./addUser.php" class="btn btn-custom">Add User</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Image</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['user_id']); ?></td>
                    <td><?= htmlspecialchars($user['username']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td>
                        <img src="<?= htmlspecialchars($user['user_img']); ?>" alt="User Image">
                    </td>
                    <td>
                        <form action="./allUser.php" method="GET" onsubmit="return confirm('Are you sure you want to delete this user?');">
                            <input type="hidden" name="id" value="<?= $user['user_id']; ?>">
                            <button type="submit" class="delete-btn">🚫 Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include '../include/footer.php'; ?>