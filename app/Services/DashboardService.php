<?php

namespace App\Services;

use App\Models\Category;
use App\Models\InventoryMovement;
use App\Models\Product;
use App\Models\Supplier;

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

    /**
     * Get inventory analytics for dashboard chart.
     */
    private function getInventoryAnalytics(): array
    {
        $movements = InventoryMovement::query()
            ->select([
                'movement_type',
                'quantity',
                'created_at',
            ])
            ->where('created_at', '>=', now()->subMonths(6))
            ->orderBy('created_at')
            ->get()
            ->groupBy(fn ($movement) => $movement->created_at->format('M'));

        $labels = [];
        $stockIn = [];
        $stockOut = [];

        foreach ($movements as $month => $records) {
            $labels[] = $month;

            $stockIn[] = $records
                ->where('movement_type', 'stock_in')
                ->sum('quantity');

            $stockOut[] = $records
                ->where('movement_type', 'stock_out')
                ->sum('quantity');
        }

        return [
            'labels' => $labels,
            'stockIn' => $stockIn,
            'stockOut' => $stockOut,
        ];
    }
}