<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    // relasi ke tabel travel_packages
    public function travel_package()
    {
        return $this->hasOne(TravelPackage::class, 'id', 'travel_packages_id');
    }
}
