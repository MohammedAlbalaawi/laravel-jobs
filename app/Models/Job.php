<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'city',
        'job_type',
        'salary',
        'degree',
        'experience',
        'deadline',
    ];

    /**
     * @return BelongsTo<User, Job>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
