<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UkraineBridgeFacility extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ukraine_bridge_facility';
    protected $guarded = [];
}
