<?php

namespace Astrogoat\Facebook\Actions;

use Helix\Lego\Apps\Actions\Action;

class FacebookAction extends Action
{
    public static function actionName(): string
    {
        return 'Facebook action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
