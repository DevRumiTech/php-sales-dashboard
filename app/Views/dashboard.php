<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sales Dashboard</title>
  <link rel="stylesheet" href="/styles.css">
</head>
<body>

<header class="topbar">
  <div class="container">
    <h1>Sales Dashboard</h1>
    <span>Internal Reporting</span>
  </div>
</header>

<main class="container">

  <section class="kpi">
    <h2>Total Revenue</h2>
    <div class="kpi-value">$<?= number_format($totalRevenue, 2) ?></div>
  </section>

  <div class="grid">
    <section>
      <h2>Revenue by Product</h2>
      <table>
        <thead>
          <tr>
            <th>Product</th>
            <th>Revenue</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($revenueByProduct as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td>$<?= number_format($row['revenue'], 2) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>

    <section>
      <h2>Revenue by Category</h2>
      <table>
        <thead>
          <tr>
            <th>Category</th>
            <th>Revenue</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($revenueByCategory as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td>$<?= number_format($row['revenue'], 2) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>

</main>

</body>
</html>
