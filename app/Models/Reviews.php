<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = ['product_id','review','review_status','review_count'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
