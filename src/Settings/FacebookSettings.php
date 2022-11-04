<?php

namespace Astrogoat\Facebook\Settings;

use Astrogoat\Facebook\Actions\FacebookAction;
use Helix\Lego\Settings\AppSettings;

class FacebookSettings extends AppSettings
{
    public string $site_verification;

    public function rules(): array
    {
        return [
            'site_verification' => 'string',
        ];
    }

    // protected static array $actions = [
    //     FacebookAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Facebook.';
    }

    public static function group(): string
    {
        return 'facebook';
    }
}
