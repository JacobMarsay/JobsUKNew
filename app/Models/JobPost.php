<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'jobpost';
    protected $primaryKey = 'id';
    protected $fillable = [
        'job_title',
        'job_description',
        'salary',
        'commute_type',
        'contract_type',
        'created_at',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function benefits()
    {
        return $this->hasMany(Benefits::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skills::class);
    }
}
