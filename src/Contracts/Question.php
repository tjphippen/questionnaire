<?php

namespace Tjphippen\Questionnaire\Contracts;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface Question
{
    /**
     * Get all answers to this given question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers(): HasMany;

    /**
     * The questionnaire for which this question belongs to..
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questionnaire(): BelongsTo;
}
