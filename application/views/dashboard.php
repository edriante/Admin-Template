<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Job Portal</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/table.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sm_screen.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2 class="logo" id="sidebarTitle">Job Portal</h2>
            <i class="fas fa-bars toggle-btn" id="toggleBtn"></i>
        </div>
        <ul class="nav-links">
            <li><a href="#"><i class="fas fa-tachometer-alt"></i><span class="link-text">Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-briefcase"></i><span class="link-text">Job Listings</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i><span class="link-text">Users</span></a></li>
            <li><a href="#"><i class="fas fa-envelope"></i><span class="link-text">Applications</span></a></li>
            <li><a href="#"><i class="fas fa-cogs"></i><span class="link-text">Settings</span></a></li>
            <li><a href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i><span class="link-text">Logout</span></a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <header>
        <h1>Dashboard</h1>
<div class="header-actions">
<button class="add-job-btn" onclick="window.location.href='<?php echo site_url('dashboard/insert_job'); ?>'">
    <i class="fas fa-plus"></i> <span>Add Job</span>
</button>
        </header>
     <div class = "container-content">
        <section class="dashboard-overview">
            <div class="cards">
                <div class="card">
                    <i class="fas fa-briefcase"></i>
                    <h3>15</h3>
                    <p>Job Listings</p>
                </div>
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3>120</h3>
                    <p>Users</p>
                </div>
                <div class="card">
                    <i class="fas fa-envelope"></i>
                    <h3>45</h3>
                    <p>Applications</p>
                </div>
                <div class="card">
                    <i class="fas fa-cogs"></i>
                    <h3>Settings</h3>
                    <p>Manage</p>
                </div>
            </div>
        </section>
        
    <div class="unique-card-container">
    <div class="unique-card">
        <h3>Job Listings 1</h3>
        <table class="unique-table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>$100,000</td>
                </tr>
                <tr>
                    <td>Data Analyst</td>
                    <td>San Francisco</td>
                    <td>$90,000</td>
                </tr>
            </tbody>
        </table>
        <button class="unique-add-job-btn">
            <i class="fas fa-plus"></i> Add Job
        </button>
    </div>
    <div class="unique-card">
        <h3>Job Listings 2</h3>
        <table class="unique-table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Developer</td>
                    <td>Los Angeles</td>
                    <td>$95,000</td>
                </tr>
                <tr>
                    <td>Project Manager</td>
                    <td>Chicago</td>
                    <td>$110,000</td>
                </tr>
            </tbody>
        </table>
        <button class="unique-add-job-btn">
            <i class="fas fa-plus"></i> Add Job
        </button>
    </div>
</div>
    </div>
</div>

    <script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sm_screen.js'); ?>"></script>
</body>
</html>
