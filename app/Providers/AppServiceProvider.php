<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Observers\ArtObserver;
use App\Model\Art;
use App\Observers\UserObserver;
use App\User;

// Art Components
use App\Observers\Art\CategoryObserver;
use App\Model\Art\Category;
use App\Observers\Art\MaterialObserver;
use App\Model\Art\Material;
use App\Observers\Art\MediumObserver;
use App\Model\Art\Medium;
use App\Observers\Art\SizeObserver;
use App\Model\Art\Size;
use App\Observers\Art\StyleObserver;
use App\Model\Art\Style;
use App\Observers\Art\SubjectObserver;
use App\Model\Art\Subject;

use App\Observers\TicketObserver;
use App\Model\Support\Ticket;

class AppServiceProvider extends ServiceProvider
{
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
        // User::observe(UserObserver::class);
        Art::observe(ArtObserver::class);

        // Art Components
        Category::observe(CategoryObserver::class);
        Material::observe(MaterialObserver::class);
        Medium::observe(MediumObserver::class);
        Size::observe(SizeObserver::class);
        Style::observe(StyleObserver::class);
        Subject::observe(SubjectObserver::class);

        Ticket::observe(TicketObserver::class);

    }
}
