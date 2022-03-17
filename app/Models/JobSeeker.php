<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jobseeker';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->hasOne(User::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
