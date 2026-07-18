<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\InventoryMovement;
use Illuminate\Support\Facades\DB;

class DashboardService
{
    /**
     * Get all dashboard data.
     */
    public function getDashboardData(): array
    {
        return array_merge(
            $this->getStatistics(),
            [
                'inventoryAnalytics' => $this->getInventoryAnalytics(),
                'lowStockProducts'   => [],
                'recentActivities'   => [],
                'topCategories'      => [],
            ]
        );
    }

    /**
     * Get dashboard statistics.
     */
    private function getStatistics(): array
    {
        return [
            'totalProducts' => Product::query()->count(),

            'totalCategories' => Category::query()->count(),

            'totalSuppliers' => Supplier::query()->count(),

            'totalInventory' => Product::query()->sum('current_stock'),

            'lowStockCount' => Product::query()
                ->whereColumn('current_stock', '<=', 'minimum_stock')
                ->count(),

            'outOfStockCount' => Product::query()
                ->where('current_stock', 0)
                ->count(),
        ];
    }
}