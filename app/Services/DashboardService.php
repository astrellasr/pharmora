<?php

namespace App\Services;

use App\Models\Category;
use App\Models\InventoryMovement;
use App\Models\Product;
use App\Models\Supplier;
use Carbon\CarbonPeriod;

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
     * Get inventory analytics for the last six months.
     */
    private function getInventoryAnalytics(): array
    {
        $startDate = now()->subMonths(5)->startOfMonth();
        $endDate = now()->endOfMonth();

        $movements = InventoryMovement::query()
            ->select([
                'movement_type',
                'quantity',
                'created_at',
            ])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(fn ($movement) => $movement->created_at->format('Y-m'));

        $labels = [];
        $stockIn = [];
        $stockOut = [];

        $period = CarbonPeriod::create($startDate, '1 month', $endDate);

        foreach ($period as $date) {
            $monthKey = $date->format('Y-m');
            $monthLabel = $date->format('M');

            $records = $movements->get($monthKey, collect());

            $labels[] = $monthLabel;

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