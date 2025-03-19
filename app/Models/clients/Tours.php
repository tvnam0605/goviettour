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
    //Lấy khu vực đến b-t-n

    function getDomain() {
        return DB::table($this->table)
            ->select('domain', DB::raw('COUNT(*) as count'))
            ->whereIn('domain', ['b', 't', 'n'])
            ->groupBy('domain')
            ->get();
    }
    // Filter tours
    public function filterTours($filters = [], $sorting =null, $perPage = null){

        DB::enableQueryLog();
        $getTours = DB::table($this-> table);

        if(!empty($filters)) {

            $getTours = $getTours->where($filters);
        }

        if (!empty($sorting) && isset($sorting[0]) && isset($sorting[1])) {
            $getTours = $getTours->orderBy($sorting[0], $sorting[1]);
        }
        
        $tours = $getTours->get();

        $queryLog = DB::getQueryLog();

        foreach ($tours as $tour)
        {
            //lấy danh sách hình ảnh tour
            $tour->images = DB::table('tbl_images')
                ->where( 'tourId', $tour->tourId)
                ->pluck( 'imageUrl');
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
    }

