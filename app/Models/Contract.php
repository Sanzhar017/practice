<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id','company_id','contract_date','contract_type_id'];

    protected $dates = ['contract_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
