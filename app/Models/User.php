<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\BusinessMailingAddress;
use App\Models\Enquiry;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $appends = ['profile_picture'];
    protected $fillable = [
        'firstname',
        'lastname',
        'business_name',
        'email',
        'mobile',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mailingAddress()
    {
        return $this->hasOne(BusinessMailingAddress::class, 'business_user_id');
    }

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class, 'user_id');
    }

    public function getProfilePictureAttribute()
    {
        $picture = $this->avatar = isset($this->avatar) ? asset('storage/uploads/user/' . $this->avatar) : URL::to('assets/images/avatar.jpg');

        return $picture;
    }
}
