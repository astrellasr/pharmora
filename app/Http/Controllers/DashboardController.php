<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        private DashboardService $dashboardService
    ) {}

    public function __invoke(): View
    {
        return view(
            'dashboard',
            $this->dashboardService->getDashboardData()
        );
    }
}