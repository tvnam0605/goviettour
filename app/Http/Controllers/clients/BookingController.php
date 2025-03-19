<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Booking;
use App\Models\clients\Tours;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private $tour;
    private $booking;

    public function __construct()
    {
        $this->tour = new Tours();
        $this->booking = new Booking();
    }

    public function index($id)
    {
        $title = 'Đặt Tour';
        $tour = $this-> tour->getTourDetail($id);
        return view('clients.booking', compact('title','tour'));
    }

    public function createBooking (Request $req) {
        $address = $req->input('address');
        $email = $req->input('email');
        $fullName = $req->input('fullName');
        $numAdults = $req->input('numAdults');
        $numChildren = $req->input('numChildren');
        $paymentMethod = $req->input('paymentMethod');
        $tel = $req->input('tel');
        $totalPrice = $req->input('totalPrice');
        $tourId = $req->input('tourId');
        $userId = $this->getUserId();

        $dataBooking = [
            'tourId' => $tourId,
            'userId' => $userId,
            'address' => $address,
            'fullName' => $fullName,
            'email' => $email,
            'numAdults' => $numAdults,
            'numChildren' => $numChildren,
            'phoneNumber' => $tel,
            'totalPrice' => $totalPrice,
        ];

        $booking = $this->booking->createBooking($dataBooking);
        return;
    }
}
