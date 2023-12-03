<?php
session_start();
require "connection.php";
require "validator.php";

$errors = [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section>
        <div class="bg-gray-100 flex justify-center h-screen">
        <div class="w-1/2 h-screen hidden lg:block">
                <img src="assets/images/blog-2.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
            </div>
            <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
                <h1 class="text-2xl font-semibold mb-4">Register</h1>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $_SESSION["name"] = $name = validate($_POST['Name']);
                    $username = validate($_POST['username']);
                    $email = validate($_POST['Email']);
                    $password = validate($_POST['password']);
                    $address = validate($_POST['address']);

                    if (empty($name)) {
                        $errors[] = "Name is required.";
                    } elseif (empty($username)) {
                        $errors[] = "Username is required.";
                    } elseif (
                        empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)
                    ) {
                        $errors[] = "Invalid email address.";
                    } elseif (empty($password)) {
                        $errors[] = "Password is required.";
                    }

                    if (empty($errors)) {

                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        $insertQuery = $pdo->prepare("INSERT INTO customer (userName, email, password,address) VALUES (:userName,:email,:password,:address)");

                        $insertQuery->bindParam(':userName', $username);
                        $insertQuery->bindParam(':email', $email);
                        $insertQuery->bindParam(':password',  $hashedPassword);
                        $insertQuery->bindParam(':address', $address);
                        $insertQuery->execute();
                        header("Location: login.php");
                    }
                }
                ?>
                <form action="register.php" method="POST">
                    <?php if (count($errors) > 0) : ?>
                        <div class="font-regular rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 p-4 text-base leading-5 text-white opacity-100">
                            <?php foreach ($errors as $error) : ?>
                                <i class="fas fa-exclamation mr-1"></i>
                                <?= $error; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-4">
                        <label for="Name" class="block text-gray-600">Name</label>
                        <input type="text" id="Name" name="Name" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="username" class="block text-gray-600">Username</label>
                        <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="block text-gray-600">Email</label>
                        <input type="text" id="Email" name="Email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="block text-gray-600">Address</label>
                        <input type="text" id="Email" name="address" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600">Password</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
                </form>
                <div class="mt-6 text-blue-500 text-center">
                    <a href="login.php" class="hover:underline">Log in Here</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>