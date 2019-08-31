<?php

return [

    'models' => [

        /*
         * We need to know which Eloquent model should be used to retrieve your questions.
         * Of course, it is often just the "Question" model but you may use whatever you like.
         *
         * The model you want to use as a Question model needs to implement the
         * `Tjphippen\Questionnaire\Question` contract.
         */

        'questionnaire' => Tjphippen\Questionnaire\Models\Questionnaire::class,

        'question' => Tjphippen\Questionnaire\Models\Question::class,

        /*
         * We need to know which Eloquent model should be used to retrieve your answers.
         * Of course, it is often just the "Answer" model but you may use whatever you like.
         *
         * The model you want to use as a Answer model needs to implement the
         * `Tjphippen\Questionnaire\Answer` contract.
         */

        'answer' => Tjphippen\Questionnaire\Models\Answer::class,

        /*
         * We need to know which Eloquent model should be used to assign the answers to.
         * Of course, it is often just the "User" model but you may use whatever you like.
         */

        'user' => App\User::class,

    ],
];
