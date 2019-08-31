<?php

namespace Tjphippen\Questionnaire\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tjphippen\Questionnaire\Contracts\Questionnaire as QuestionnaireContract;

class Questionnaire extends Model implements QuestionnaireContract
{
    use SoftDeletes;

    public $guarded = ['id'];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
    ];

    protected $fillable = [
      'name',
      'options'
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(config('questionnaire.models.questions'));
    }
}
