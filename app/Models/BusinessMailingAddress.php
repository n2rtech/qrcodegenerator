<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class BusinessMailingAddress extends Model
{
    use HasFactory;

    protected $table = "business_mailing_address";

    protected $fillable = ['address_1', 'address_2', 'city', 'state', 'zipcode', 'country'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
