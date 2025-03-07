<?php

namespace App\Models\clients;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class Home extends Model
{
    use HasFactory;

    protected $table = 'tbl_tours';

    public function getHomeTours(): Collection{
        //lấy thông tin tour
        $tours = DB::table('tbl_tours')->get();

        foreach ($tours as $tour)
        {
            //lấy danh sách hình ảnh tour
            $tour->images = DB::table('tbl_images')
                ->where( 'tourId', $tour->tourId)
                ->pluck( 'imageUrl');
        }
            //lấy danh sách timeline
/*         $tour->timeline = DB::table('tbl_timeline')
            ->where('tourId', $tour->tourId)
            ->pluck('title') */;

        return $tours;

    }
}
