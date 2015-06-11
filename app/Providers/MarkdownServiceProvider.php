<?php namespace Alexesba\Providers;

use Knp\Bundle\MarkdownBundle\Parser\MarkdownParser;
use Ciconia\Extension\Gfm;
use Illuminate\Support\ServiceProvider;

class MarkdownServiceProvider extends ServiceProvider {

    protected $markdown;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->markdown = new MarkdownParser();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function () {
            return $this->markdown;
        });
    }

}
