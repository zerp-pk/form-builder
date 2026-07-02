<?php

namespace Zerp\FormBuilder\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\GivePermissionToRole;
use Zerp\FormBuilder\Listeners\GiveRoleToPermission;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Form conversion events
        GivePermissionToRole::class => [
            GiveRoleToPermission::class,
        ],
    ];
}
