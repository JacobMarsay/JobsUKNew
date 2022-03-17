<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'company';
    protected $primaryKey = 'id';

    protected $fillable = [
        'company_name',
        'founded',
        'staff_capacity',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobpost()
    {
        return $this->hasMany(JobPost::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
    
}
