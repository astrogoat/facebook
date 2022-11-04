<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFacebookSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('facebook.enabled', false);
        // $this->migrator->add('facebook.url', '');
        // $this->migrator->addEncrypted('facebook.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('facebook.enabled');
        // $this->migrator->delete('facebook.url');
        // $this->migrator->delete('facebook.access_token');
    }
}
