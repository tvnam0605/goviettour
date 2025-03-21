<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\DashboardModel;

use App\Http\Controllers\Controller;
use App\Models\admin\ToursModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    private $dashboard;
    public function __construct()
    {
        $this->dashboard = new DashboardModel();
    }
    public function index()
    {
        $title = 'Admin Dashboard';
        $summary = $this->dashboard->getSummary();
        $valueTour = (new DashboardModel())->getValueDomain()->toArray(); // Chuyển thành mảng

        $dataDomain = [
            'values' => [
                $valueTour['b'] ?? 0,
                $valueTour['t'] ?? 0,
                $valueTour['n'] ?? 0
            ]
        ];
        $paymentStatus = $this->dashboard->getValuePayment();
        $toursBooked = $this->dashboard->getMostTourBooked();
        $newBooking = $this->dashboard->getNewBooking();
        // dd($paymentStatus);


        return view('admin.dashboard', compact('title', 'summary', 'dataDomain','paymentStatus','toursBooked','newBooking'));
    }
}
