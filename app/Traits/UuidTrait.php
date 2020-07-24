<?php
namespace App\Traits;

trait UuidTrait
{
    /**
     * Override the models boot method
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string) \Illuminate\Support\Str::orderedUuid();
        });
    }
}
