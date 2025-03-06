<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Job Portal</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="<?= base_url('auth/process_login'); ?>" method="post">

            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="<?= base_url('register'); ?>">Register here</a></p>
    </div>
</body>
</html>
