<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Job | Job Portal</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css'); ?>">
</head>
<body>
    <h1>Add Job</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <form action="<?= site_url('dashboard/process_insert_job'); ?>" method="post">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" required></textarea>

        <button type="submit">Add Job</button>
    </form>

    <a href="<?= site_url('dashboard'); ?>">Back to Dashboard</a>
</body>
</html>
