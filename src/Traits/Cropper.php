<?php

namespace Gyrobus\MoonshineCropper\Traits;

use Illuminate\Support\Facades\Storage;

trait Cropper
{
    public function cropImage($name, $disk = null)
    {
        return Storage::disk($disk ?? ($this->cropperDisk ?? config('moonshine.disk')))
            ->url($this->{$name});
    }
}