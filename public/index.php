<?php

require_once __DIR__ . '/../app/Database.php';
require_once __DIR__ . '/../app/Reports.php';

$db = Database::getConnection();
$reports = new Reports($db);

// Fetch report data
$totalRevenue = $reports->getTotalRevenue();
$revenueByProduct = $reports->getRevenueByProduct();
$revenueByCategory = $reports->getRevenueByCategory();

// Render view
require_once __DIR__ . '/../app/Views/dashboard.php';
