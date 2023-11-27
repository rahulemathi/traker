<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class models extends Model
{
    use HasFactory;

    protected $fillable  = ['brand_id','name','model_year','factory_tested_mileage','image'];

    public function brand():BelongsTo{
        return $this->belongsTo(brand::class);
    }
}
