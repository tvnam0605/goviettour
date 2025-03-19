<?php

namespace App\Models\clients;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "tbl_booking";

    public function createBooking($data) {
        return DB::table($this->table)->insert($data);
    }
}