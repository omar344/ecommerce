<?php
require('include/config.php');
$errors = [];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <section>
        <div class="bg-gray-100 flex justify-center items-center h-screen">
            <div class="w-1/2 h-screen hidden lg:block">
                <img src="assets/images/blog-2.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
            </div>
            <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
                <h1 class="text-2xl font-semibold mb-4">Login</h1>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if (!empty($username) && !empty($password)) {
                        $sql = 'SELECT * FROM customer WHERE userName = ?'; //->
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('s', $username);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows === 1) {
                            $user = $result->fetch_assoc();
                            $storedPassword = $user['password'];

                            if (password_verify($password, $storedPassword)) {

                                header("Location: receipt.php");
                            } else {
                                array_push($errors, 'Invalid username or password.');
                            }
                        } else {
                            array_push($errors, 'User not found.');
                        }
                    } else {
                        array_push($errors, 'Both username and password are required.');
                    }
                }
                ?>
                <form action="login.php" method="POST">
                    <?php if (count($errors) > 0) : ?>
                        <div class="font-regular rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 p-4 text-base leading-5 text-white opacity-100">
                            <?php foreach ($errors as $error) : ?>
                                <i class="fas fa-exclamation mr-1"></i><?php echo $error; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-4">
                        <label for="username" class="block text-gray-600">Username</label>
                        <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600">Password</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
                </form>
                <div class="mt-6 text-blue-500 text-center">
                    <a href="register.php" class="hover:underline">Sign up Here</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>