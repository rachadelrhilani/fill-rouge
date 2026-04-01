<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getStatsData(): JsonResponse
    {
        $stats = $this->dashboardService->getAdminDashboardStats();
        return response()->json($stats);
    }
}