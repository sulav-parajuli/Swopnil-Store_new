<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    use HasFactory;
    protected $table = 'ledger';
    protected $fillable = ['ledger_id','company_id','debit','credit','date','description'];

    public function owner()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
