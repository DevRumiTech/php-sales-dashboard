<?php

class Reports
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTotalRevenue(): float
    {
        $stmt = $this->db->prepare(
            'SELECT SUM(quantity * sale_price) FROM order_items'
        );
        $stmt->execute();

        return (float) $stmt->fetchColumn();
    }

    public function getRevenueByProduct(): array
    {
        $stmt = $this->db->prepare(
            'SELECT p.name, SUM(oi.quantity * oi.sale_price) AS revenue
             FROM order_items oi
             JOIN products p ON p.id = oi.product_id
             GROUP BY p.name
             ORDER BY revenue DESC'
        );
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRevenueByCategory(): array
    {
        $stmt = $this->db->prepare(
            'SELECT c.name, SUM(oi.quantity * oi.sale_price) AS revenue
             FROM order_items oi
             JOIN product_category pc ON pc.product_id = oi.product_id
             JOIN categories c ON c.id = pc.category_id
             GROUP BY c.name
             ORDER BY revenue DESC'
        );
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
