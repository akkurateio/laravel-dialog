# Laravel Dialog

## Installation

You can install the package via composer:

``` bash
composer require akkurate/laravel-dialog
```

The package will automatically register itself.

If you want to override the config file:
```bash
php artisan vendor:publish --provider="Akkurate\LaravelDialog\LaravelDialogServiceProvider" --tag="config"
```

## Usage

### Example

```php
use Akkurate\LaravelDialog\Classes\Slack;
use Akkurate\LaravelDialog\Classes\Attachment;
use Akkurate\LaravelDialog\Classes\Field;

$dialog = new Slack(config('general.slack.webhooks.alert'));
        $dialog->text('Une erreur vient d\'être interceptée !')
            ->attachement(
                (new Attachment())
                    ->text("```" . json_encode($this->error, JSON_PRETTY_PRINT) . "```")
                    ->danger()
                    ->footer(config('general.name') . ' ' . config('general.customer.name'))
                    ->field(
                        (new Field())
                            ->title('Nom du document')
                            ->Value($this->error->document->name)
                    )
                    ->field(
                        (new Field())
                            ->title('UUID du document')
                            ->Value($this->error->document->uuid)
                    )
                    ->field(
                        (new Field())
                            ->title('Accéder au document')
                            ->Value(route('', ['uuid' => $this->error->document->uuid]))
                            ->short(false)
                    )
                    ->field(
                        (new Field())
                            ->title('Agence')
                            ->Value('Nom de l\'agence')
                    )
                    ->field(
                        (new Field())
                            ->title('Environnement')
                            ->Value(config('app.env'))
                    )
            )
            ->send();
```
