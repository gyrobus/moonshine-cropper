<?php

namespace Gyrobus\MoonshineCropper\Fields;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Image;

class Cropper extends Image
{
    protected float $ratio = 0;
    protected int $mode = 1;
    protected string $view = 'moonshine-cropper::fields.cropper';
    protected string $accept = 'image/*';

    public function assets(): array
    {
        return [
            Css::make('vendor/moonshine-cropper/css/cropper.min.css'),
            Css::make('vendor/moonshine-cropper/css/moonshine-cropper.css'),
            Js::make(   'vendor/moonshine-cropper/js/cropper.min.js'),
            Js::make(   'vendor/moonshine-cropper/js/cropper-init.js'),
        ];
    }

    public function ratio(float $value): static
    {
        $this->ratio = $value;

        return $this;
    }

    public function mode(int $value): static
    {
        $this->mode = $value;

        return $this;
    }

    protected function viewData(): array
    {
        $data = parent::viewData();

        $data['ratio'] = $this->ratio;
        $data['mode'] = $this->mode;

        return $data;
    }
}
