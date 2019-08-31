<?php

namespace Tjphippen\Questionnaire\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tjphippen\Questionnaire\Contracts\Answer as AnswerContract;
use Tjphippen\Questionnaire\Contracts\Question as QuestionContract;
use Tjphippen\Questionnaire\Contracts\Questionnaires as QuestionnaireContract;

class Question extends Model implements QuestionContract
{
    use SoftDeletes;

    public $guarded = ['id'];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    protected $fillable = [
      'text',
      'input_type',// text,radio,checkbox
      'options'
    ];

    public function answers(): HasMany
    {
        return $this->hasMany(config('questionnaire.models.answer'));
    }

    public function questionnaire(): BelongsTo
    {
        return $this->belongsTo(config('questionnaire.models.questionnaire'));
    }
}
