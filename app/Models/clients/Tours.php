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
    public function getAllTours(){
        $allTours = DB::table($this->table)->get();
        foreach ($allTours as $tour)
        {
            //lấy danh sách hình ảnh tour
            $tour->images = DB::table('tbl_images')
                ->where( 'tourId', $tour->tourId)
                ->pluck( 'imageUrl');
        }
        return $allTours;
    }
    //Lấy chi tiết Tour
    public function getTourDetail($id)
    {
        $getTourDetail = DB::table($this->table)
        ->where('tourId', $id)
        ->first();

        if ($getTourDetail){
            //lấy danh sách hình ảnh thuộc về tour
            $getTourDetail->images = DB::table('tbl_images')
                ->where( 'tourId', $getTourDetail->tourId)
                ->limit(5)
                ->pluck( 'imageUrl');
        
            /*lấy danh sách timeline thuộc về tour*/
         $getTourDetail->timeline = DB::table('tbl_timeline')
            ->where('tourId', $getTourDetail->tourId)
            ->get() ;
        }
        return $getTourDetail;
    }

}
