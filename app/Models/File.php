<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enquiry;
class File extends Model
{
    use HasFactory;
    protected $table = "files";

    protected $fillable = ['filename'];
    public $timestamps = true;

    public function enquiries()
    {
        return $this->belongsTo(Enquiry::class);
    }
}
