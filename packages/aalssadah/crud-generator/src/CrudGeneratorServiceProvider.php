<?php

namespace Aalssadah\CrudGenerator;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Scalar\MagicConst\Dir;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::prefix('crud-generator')
            ->as('crud-generator.')
            ->group(function(){
                $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            });
    }
}
