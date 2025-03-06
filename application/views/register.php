<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | Job Portal</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css'); ?>">
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>
        <form action="<?= base_url('auth/process_register'); ?>" method="post">

            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="<?= base_url('login'); ?>">Login here</a></p>
    </div>
</body>
</html>
