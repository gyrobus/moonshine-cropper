<?php

declare(strict_types=1);

namespace Gyrobus\MoonshineCropper\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class CropperServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'moonshine-cropper');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-cropper');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-cropper'),
        ], ['moonshine-cropper-assets', 'laravel-assets']);
    }
}
