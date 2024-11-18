<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $parameter_id
 * @property string $language
 * @property string $value
 */
class ParameterValue extends Model
{
    protected $fillable = [
        'parameter_id',
        'language',
        'name'
    ];

    public function parameter(): BelongsTo
    {
        return $this->belongsTo(Parameter::class, 'parameter_id', 'id');
    }
}