<?php

namespace EllGreen\TailpineLaravelPreset;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\Preset;

class TailpinePreset extends Preset
{
    protected const STUBS_PATH = __DIR__.'/../stubs/';

    public static function install()
    {
        static::updatePackages();
        static::copyStubs();
        static::removeNodeModules();
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            'alpinejs' => '^2.6',
            'axios'=> '^0.19',
            'laravel-mix'=> '^5.0.1',
            'lodash' => '^4.17',
            'tailwindcss'=> '^1.7',
            '@tailwindcss/custom-forms'=> '^0.2',
        ], Arr::except($packages, [
            'sass',
            'sass-loader'
        ]));
    }

    protected static function copyStubs()
    {
        tap(new Filesystem, function (Filesystem $filesystem) {
            $filesystem->deleteDirectory(resource_path('sass'));

            if (! $filesystem->isDirectory($directory = resource_path('css'))) {
                $filesystem->makeDirectory($directory);
            }
        });

        static::copyStub('webpack.mix.js');
        static::copyStub('tailwind.config.js');
        static::copyStub('resources/js/bootstrap.js');
        static::copyStub('resources/css/app.css');
        static::copyStub('resources/views/components/layout/app.blade.php');
        static::copyStub('resources/views/welcome.blade.php');
    }

    /**
     * Copy stub to application
     * If not $dest is provided we will assume the stub directory
     * structure is the same as the applications structure
     */
    protected static function copyStub(string $stub, ?string $dest = null): void
    {
        $stubPath = Str::finish(static::STUBS_PATH, '/') . $stub;

        copy($stubPath, $dest ?? base_path($stub));
    }
}
