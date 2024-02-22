<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Wildside\Userstamps\Userstamps;

class Skills extends Model
{
    use HasFactory;
    use Userstamps;
    
}
