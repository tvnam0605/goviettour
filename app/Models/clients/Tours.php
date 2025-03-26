<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tours extends Model
{
    use HasFactory;

    protected $table = 'tbl_tours';
    //Lấy tất cả
    public function getAllTours()
    {

        $allTours = DB::table($this->table)->get();
        foreach ($allTours as $tour) {
            //lấy danh sách hình ảnh tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl');
        }

        return $allTours;
    }
    //Lấy chi tiết Tour
    public function getTourDetail($id)
    {
        $getTourDetail = DB::table($this->table)
            ->where('tourId', $id)
            ->first();

        if ($getTourDetail) {
            //lấy danh sách hình ảnh thuộc về tour
            $getTourDetail->images = DB::table('tbl_images')
                ->where('tourId', $getTourDetail->tourId)
                ->limit(5)
                ->pluck('imageUrl');

            /*lấy danh sách timeline thuộc về tour*/
            $getTourDetail->timeline = DB::table('tbl_timeline')
                ->where('tourId', $getTourDetail->tourId)
                ->get();
        }
        return $getTourDetail;
    }
    //Lấy khu vực đến b-t-n

    function getDomain()
    {
        return DB::table($this->table)
            ->select('domain', DB::raw('COUNT(*) as count'))
            ->whereIn('domain', ['b', 't', 'n'])
            ->groupBy('domain')
            ->get();
    }
    // Filter tours
    public function filterTours($filters = [], $sorting = null, $perPage = null)
    {

        DB::enableQueryLog();
        $getTours = DB::table($this->table);

        if (!empty($filters)) {

            $getTours = $getTours->where($filters);
        }

        if (!empty($sorting) && isset($sorting[0]) && isset($sorting[1])) {
            $getTours = $getTours->orderBy($sorting[0], $sorting[1]);
        }

        $tours = $getTours->get();

        $queryLog = DB::getQueryLog();

        foreach ($tours as $tour) {
            //lấy danh sách hình ảnh tour
            $tour->images = DB::table('tbl_images')
                ->where('tourId', $tour->tourId)
                ->pluck('imageUrl');
        }
        //dd($queryLog);
        return $tours;
    }

    public function updateTours($tourId, $data)
    {
        $update = DB::table($this->table)
            ->where('tourId', $tourId)
            ->update($data);

        return $update;
    }
     //Lấy detail tour đã đặt
     public function tourBooked($bookingId, $checkoutId)
     {
         $booked = DB::table($this->table)
             ->join('tbl_booking', 'tbl_tours.tourId', '=', 'tbl_booking.tourId')
             ->join('tbl_checkout', 'tbl_booking.bookingId', '=', 'tbl_checkout.bookingId')
             ->where('tbl_booking.bookingId', '=', $bookingId)
             ->where('tbl_checkout.checkoutId', '=', $checkoutId)
             ->first();
 
         return $booked;
     }
     public function toursRecommendation($ids)
     {
 
         if (empty($ids)) {
             // Return an empty collection to avoid executing the query with an empty `FIELD` clause
             return collect();
         }
 
         $toursRecom = DB::table($this->table)
             ->where('availability', '1')
             ->whereIn('tourId', $ids)
             ->orderByRaw("FIELD(tourId, " . implode(',', array_map('intval', $ids)) . ")") // Chuyển tất cả các giá trị sang kiểu int và giữ thứ tự
             ->get();
         foreach ($toursRecom as $tour) {
             // Lấy danh sách hình ảnh thuộc về tour
             $tour->images = DB::table('tbl_images')
                 ->where('tourId', $tour->tourId)
                 ->pluck('imageUrl');
             // Lấy số lượng đánh giá và số sao trung bình của tour
             $tour->rating = $this->reviewStats($tour->tourId)->averageRating;
         }
 
         return $toursRecom;
     }
 
     //Get tour có số lượng booking và hoàn thành nhiều nhất để gợi ý
     public function toursPopular($quantity)
     {
         $toursPopular = DB::table('tbl_booking')
             ->select(
                 'tbl_tours.tourId',
                 'tbl_tours.title',
                 'tbl_tours.description',
                 'tbl_tours.priceAdult',
                 'tbl_tours.priceChild',
                 'tbl_tours.time',
                 'tbl_tours.destination',
                 'tbl_tours.quantity',
                 DB::raw('COUNT(tbl_booking.tourId) as totalBookings')
             )
             ->join('tbl_tours', 'tbl_booking.tourId', '=', 'tbl_tours.tourId')
             ->where('tbl_booking.bookingStatus', 'f') // Chỉ lấy các booking đã hoàn thành
             ->groupBy(
                 'tbl_tours.tourId',
                 'tbl_tours.title',
                 'tbl_tours.description',
                 'tbl_tours.priceAdult',
                 'tbl_tours.priceChild',
                 'tbl_tours.time',
                 'tbl_tours.destination',
                 'tbl_tours.quantity'
             )
             ->orderBy('totalBookings', 'DESC')
             ->take($quantity)
             ->get();
 
 
         foreach ($toursPopular as $tour) {
             // Lấy danh sách hình ảnh thuộc về tour
             $tour->images = DB::table('tbl_images')
                 ->where('tourId', $tour->tourId)
                 ->pluck('imageUrl');
             // Lấy số lượng đánh giá và số sao trung bình của tour
             $tour->rating = $this->reviewStats($tour->tourId)->averageRating;
         }
         return $toursPopular;
     }
}
