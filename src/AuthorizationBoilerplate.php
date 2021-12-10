<?php

namespace VoyagerAdmin\AuthorizationBoilerplate;

use Voyager\Admin\Contracts\Plugins\AuthorizationPlugin;

class AuthorizationBoilerplate implements AuthorizationPlugin
{
    public $name = 'Authorization boilerplate';
    public $description = 'Authorization boilerplate for Voyager II';
    public $repository = 'voyager-admin/authorization-boilerplate';
    public $website = 'https://github.com/voyager-admin/authorization-boilerplate';
    public $version = '1.0.0';


    public function __construct()
    {
        $this->readme = realpath(dirname(__DIR__, 1).'/README.md');
    }

    public function authorize($user, $ability, $arguments = []): ?bool
    {
        // Add your authorization logic here.
        return true;
    }
}
