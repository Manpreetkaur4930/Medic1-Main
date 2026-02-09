<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }
        .box {
            background: #fff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Sample PHP Form</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter name" required>
        <input type="email" name="email" placeholder="Enter email" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // PHP code starts here
    if (isset($_POST['submit'])) {
        $name  = $_POST['name'];
        $email = $_POST['email'];

        echo "<h3>Submitted Data</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }
    ?>
</div>
<!-- kuch bhi nahi hai -->
</body>
</html>
<!-- byeee -->