<?php

namespace App\Models\Traits;

Use App\Models\Contracts\PublishableInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

/**
 * Add basic status control to a model that determines whether it is published or not
 *
 * Trait Publishable
 * @package App\Models\Traits
 */
trait Publishable
{
    public static function bootPublishable()
    {
        self::initializing(function($model) {
            $model->setupPublishableProperties();
        });
    }

    public function setupPublishableProperties()
    {
        $this->fillable = array_merge($this->fillable, [
            $this->publishStatusField(),
        ]);
    }

    public function scopeVisible(Builder $q, Carbon $date = null, $preview = null)
    {
        $q->publishable();
    }

    public function scopePublishable(Builder $q)
    {
        $q->whereIn($this->publishStatusField(), $this->getPublishableStatuses());
    }

    public function isPublishable()
    {
        return in_array($this->getStatus(), $this->getPublishableStatuses());
    }

    public function getStatuses()
    {
        if(property_exists($this, 'statuses')){
            return $this->statuses;
        }

        return [
            PublishableInterface::STATUS_DRAFT,
            PublishableInterface::STATUS_PREVIEW,
            PublishableInterface::STATUS_PUBLISHED
        ];
    }

    public function publishStatusField()
    {
        if(property_exists($this, 'publish_status_field')){
            return $this->publish_status_field;
        }
        return 'status';
    }

    public function getPublishableStatuses()
    {
        if(property_exists($this, 'publishable_statuses')){
            return (array) $this->publishable_statuses;
        }
        return [PublishableInterface::STATUS_PUBLISHED];
    }

    public function getStatus()
    {
        return $this->getAttribute($this->publishStatusField());
    }

}