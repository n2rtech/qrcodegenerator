<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\File;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = "enquiries";

    protected $fillable = ['product_type', 'pti_no', 'job_no', 'panel_name', 'construction_type', 'rating', 'customer_details'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files()
    {
        return $this->hasMany(File::class, 'enquiry_id');
    }
}
