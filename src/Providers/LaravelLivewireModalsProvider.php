<?php

namespace Bastinald\LaravelLivewireModals\Providers;

use Bastinald\LaravelLivewireModals\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireModalsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'bootstrap5-livewire3-modals');

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/bootstrap5-livewire3-modals')],
            ['bootstrap5-livewire3-modals', 'bootstrap5-livewire3-modals:views']
        );

        Livewire::component('modals', Modals::class);
    }
}
