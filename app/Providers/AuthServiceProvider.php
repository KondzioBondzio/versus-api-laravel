<?php

namespace App\Providers;

use App\Models\Matches;
use App\Policies\MatchesPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Matches::class => MatchesPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
