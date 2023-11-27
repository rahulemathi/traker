<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class brand extends Model
{
    use HasFactory;

    protected $fillable = ['brand'];

    public function brands():HasMany{
        return $this->hasMany(models::class);
    }
}
