<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $fillable = ['company_id','company_name','company_image','company_description'];

    public function ledger()
    {
        return $this->hasMany(Ledger::class, 'company_id');
    }
}
