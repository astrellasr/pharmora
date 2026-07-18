<?php

namespace App\Services;

class DashboardService
{
    public function getDashboardData(): array
    {
        return [
            'totalProducts'   => 0,
            'totalCategories' => 0,
            'totalSuppliers'  => 0,
            'totalInventory'  => 0,
            'lowStockCount'   => 0,
            'outOfStockCount' => 0,

            'inventoryAnalytics' => [],

            'lowStockProducts' => [],

            'recentActivities' => [],

            'topCategories' => [],
        ];
    }
}