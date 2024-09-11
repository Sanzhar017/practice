<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id','company','contract_date'];

    protected $dates = ['contract_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
