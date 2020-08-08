<?php

namespace EllGreen\TailpineLaravelPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class TailpinePresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tailpine', function (UiCommand $command) {
            $tailpine = $this->app->get(TailpinePreset::class);

            $tailpine->install();

            $command->info('Tailpine frontend preset has installed successfully!');
        });
    }
}
