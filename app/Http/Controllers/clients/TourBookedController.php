<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Booking;
use App\Models\clients\Tours;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TourBookedController extends Controller
{
    private $tour;
    private $booking;

    public function __construct()
    {
        $this->tour = new Tours();
        $this->booking = new Booking();
    }
    public function index(Request $req)
    {
        $title = "Tour đã đặt";

        $bookingId = $req->input('bookingId');
        $checkoutId = $req->input('checkoutId');
        $tour_booked = $this->tour->tourBooked($bookingId, $checkoutId);

        // Check if the tour_booked has valid data before accessing properties
        if ($tour_booked && $tour_booked->startDate) {
            $today = Carbon::now();

            $startDate = Carbon::parse($tour_booked->startDate);

            // Calculate the difference in days
            $diffInDays = $startDate->diffInDays($today);

            // Set 'hide' based on the condition
            $hide = $diffInDays < 7 ? 'hide' : '';
        } else {
            $hide = '';
        }

        // dd($tour_booked);
        return view("clients.tour-booked", compact('title', 'tour_booked', 'hide', 'bookingId'));
        // $title = "Tour đã đặt";

        // $bookingId = $req->input('bookingId');
        // $checkoutId = $req->input('checkoutId');
    
        // // Kiểm tra xem giá trị có nhận đúng không
        // dd(compact('bookingId', 'checkoutId'));
    }
}
