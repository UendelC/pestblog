<?php

namespace App\Providers;

use App\Actions\Resources\ProvideArticleResource;
use App\Contracts\Actions\Resources\ProvidesArticleResource;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        ProvidesArticleResource::class => ProvideArticleResource::class,
    ];

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //
    }
}
