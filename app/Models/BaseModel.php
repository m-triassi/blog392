<?php

namespace App\Models;

use App\Models\Traits\Initializable;
use App\Models\Traits\Publishable;
use App\Models\Traits\Uuidable;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use Initializable;
    use Uuidable;
    use Publishable;
}
