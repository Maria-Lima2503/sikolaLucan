<?php

namespace App\Providers;

use App\Infra\Academico\Interfaces\IGenerico;
use App\Infra\Academico\Repositorios\GenericoRepositorio;
use Illuminate\Support\ServiceProvider;

class AcademicoRepositorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom([
            database_path() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR . 'Academico'
        ]);

        $this->app->bind(IGenerico::class, GenericoRepositorio::class);
    }
}
