<?php

namespace App\Models;

use App\Models\details;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mileage extends Model
{
    use HasFactory;

    protected $fillable = ['details_id','primary_km','secondary_km','fuel_injected'];

    public function detail_id():BelongsTo{
        return $this->belongsTo(details::class);
    }

    public function bike_model():BelongsTo{
        return $this->belongsTo(models::class,'details_id');
    }

    public function getMileagePerLiterAttribute(){
        return number_format(($this->secondary_km - $this->primary_km)/$this->fuel_injected,2);
    }
    
}
