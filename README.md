# Add questionnaires to your Laravel application

* [Installation](#installation)
* [Usage](#usage)

This package allows you to add questionnaires for all users in your Laravel application

## Installation

This package can be used in Laravel 5.8 or higher.

``` bash
composer require tjphippen/questionnaire
php artisan vendor:publish --provider='Tjphippen\Questionnaire\QuestionnaireServiceProvider'
```

## Usage

The models supplied by this package can be used the same as any other model in a laravel application.

Samples:

```php
use Tjphippen\Questionnaire\Models\Question;
use Tjphippen\Questionnaire\Models\Answer;

// Get all questions
Question::get();

// Get answers for a specific user
Answer::where('user_id', $id)->get();
```

## Credits
- [Tyson List](https://github.com/leapfinder) - questionnaire is a package based off [laravel-questionnaire](https://github.com/leapfinder/laravel-questionnaire)
- [Milo Cesar](https://github.com/milo526) - laravel-questionnaire is a package based off [laravel-survey](https://github.com/milo526/laravel-survey)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
