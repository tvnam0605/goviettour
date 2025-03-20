<?php

namespace App\Models\clients;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "tbl_booking";

    public function createBooking($data) {
        //chèn dlieu và trả về ID của bản vừa tạo
        return DB::table($this->table)->insertGetId($data);
    }
}