<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'application';
    protected $primaryKey = 'id';
    protected $fillable = [
        'biography',
        'years_of_experience',
        'hobby_description',
        'job_seeker_id',
    ];

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function reference()
    {
        return $this->hasMany(Reference::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skills::class);
    }
}
