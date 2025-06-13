<?php
session_start();

//sample data
$currentUser = [
    'name' => 'Admin user',
    'avatar' => 'https://via.placeholder.com/40',
    'role' => 'Administrator',
];

//sample dashboard data
$stats = [
    'total_users' => 400,
    'active_users' => 50,
    'new_orders' => 30,
    'revenue' => 'UGX 50000'
];

//SAMPLE RECENT ACTIVITIES DATA
$recentActivity = [
    ['icon' => 'user-plus', 'text' => 'New Registered User', 'time' =>  '10 mins ago'],
    ['icon' => 'shopping-cart', 'text' => 'Order #7683 placed', 'time' => '24 mins ago'],
    ['icon' => 'box', 'text' => 'Product updated', 'time' => '16  mins ago'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-shield-alt    "></i>
                <span>Admin Panel</span>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active">
                        <a href="#"> <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"> <i class="fas fa-users"></i>
                            <span>Users</span></a>
                    </li>
                    <li>
                        <a href="#"> <i class="fas fa-box"></i>
                            <span>New Products</span></a>
                    </li>
                    <li>
                        <a href="#"> <i class="fas fa-chart-bar"></i>
                            <span>Reports</span></a>
                    </li>
                    <li>
                        <a href="#"> <i class="fas fa-cog"></i>
                            <span>Settings</span></a>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <div class="user-profile">
                    <span><?= $currentUser['role'] ?></span>
                </div>
            </div>
            <a href="#" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </aside>

        <main class="main-content">
            <!-- top-bar -->
            <header class="topbar">
                <div class="search-bar">g byujhi8k
                    <i class="fas fa-search"></i> <input type="text" placeholder="Search here...">
                </div>
                <div class="topbar-actions">
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i> <span class="badge">40</span>
                    </button>
                </div>
                <div class="user-menu">
                    <div class="user-profile">
                        <span> <?= $currentUser['role'] ?></span>
                    </div>
                </div>
            </header>
        </main>
    </div>
</body>

</html>