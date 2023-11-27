<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class details extends Model
{
    use HasFactory;

    protected $fillable = ['model_id','user_id','user_tested_mileage'];

    public function bike_model():BelongsTo{
        return $this->belongsTo(models::class,'model_id');
    }

    public function users():BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }
}
