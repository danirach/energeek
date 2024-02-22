<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Wildside\Userstamps\Userstamps;

class Candidates extends Model
{
    use HasFactory;
    use Userstamps;

    protected $fillable = ['job_id','name','email','phone','year'];
    public function Skills(): BelongsToMany
    {
        return $this->belongsToMany(Skills::class,'skill_sets','candidate_id','skill_id');
    }
}
