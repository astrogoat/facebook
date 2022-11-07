<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFacebookSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('facebook.enabled', false);
        $this->migrator->add('facebook.site_verification', '');
    }

    public function down()
    {
        $this->migrator->delete('facebook.enabled');
        $this->migrator->delete('facebook.site_verification');
    }
}
