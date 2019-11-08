<?php

namespace App\Models\Contracts;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

interface PublishableInterface
{
    const STATUS_DRAFT = 'draft';
    const STATUS_PREVIEW = 'preview';
    const STATUS_PUBLISHED = 'published';

}