<?php

namespace Tjphippen\Questionnaire\Contracts;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface Questionnaire
{
    /**
     * Get all questions to this given questionnaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions(): HasMany;
}
