<?php

namespace App\Providers;

use App\Folder;
use App\Policies\FolderPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

  protected $policies = [
    Folder::class => FolderPolicy::class,
  ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
