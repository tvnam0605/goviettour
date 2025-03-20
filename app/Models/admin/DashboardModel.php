<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    //
    use HasFactory;
    public function getSummary()
    {
        $tourWorking = DB::table('tbl_tours')
            ->where('availability', 1)
            ->count();
        $countBooking = DB::table('tbl_booking')
            ->where('bookingStatus', '!=', 'c')
            ->count();
        $totalAmount = DB::table('tbl_checkout')
            ->where('paymentStatus', 'y')
            ->sum('amount');
        $totalUsers = DB::table('tlb_users') // Thay 'tbl_users' bằng tên bảng người dùng của bạn
            ->count();
         // Trả về mảng chứa các dữ liệu tổng hợp
         return [
            'tourWorking' => $tourWorking,
            'countBooking' => $countBooking,
            'totalAmount' => $totalAmount,
            'totalUsers' => $totalUsers,
        ];
    }

    public function getValueDomain()
    {
        // Lấy số lượng tours cho mỗi miền (b, t, n)
        return DB::table('tbl_tours')
            ->select(DB::raw('domain, COUNT(*) as count'))
            ->whereIn('domain', ['b', 't', 'n'])  // Chỉ lấy các miền có domain b, t, n
            ->groupBy('domain')  // Nhóm theo domain
            ->get()
            ->pluck('count', 'domain');  // Trả về mảng với key là domain và value là count
    }
    public function getValuePayment()
    {
        return DB::table('tbl_checkout')
            ->select('paymentMethod', DB::raw('COUNT(*) as count'))
            ->groupBy('paymentMethod')
            ->get()
            ->toArray();
    }
    public function getMostTourBooked()
    {
        return DB::table('tbl_tours')
            ->join('tbl_booking', 'tbl_tours.tourId', '=', 'tbl_booking.tourId')
            ->select('tbl_tours.tourId', 'tbl_tours.title', 'tbl_tours.quantity', DB::raw('SUM(tbl_booking.numAdults + tbl_booking.numChildren) as booked_quantity'))
            ->groupBy('tbl_tours.tourId', 'tbl_tours.quantity', 'tbl_tours.title')
            ->orderByDesc(DB::raw('SUM(tbl_booking.numAdults + tbl_booking.numChildren)')) // Sắp xếp theo số lượng đặt tour giảm dần
            ->take(3) // Lấy 3 tour có số lượng đặt cao nhất
            ->get();
    }

}
