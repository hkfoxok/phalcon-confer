<?php

namespace MicheleAngioni\PhalconConfer\Tests;

use League\FactoryMuffin\FactoryMuffin;
use MicheleAngioni\PhalconConfer\Models\Roles;

class ModelTest extends TestCase
{
    protected static $fm;

    public static function setupBeforeClass()
    {
        // create a new factory muffin instance
        static::$fm = new FactoryMuffin();

        // you can customize the save/delete methods
        // new FactoryMuffin(new ModelStore('save', 'delete'));

        // load your model definitions
        static::$fm->loadFactories(__DIR__.'/factories');

        parent::setUpBeforeClass();
    }

    public function testUserRelationships()
    {
        $users = new Users();
        $user = $users::findFirst(["id = 1"]);

        $this->assertEquals(1, count($user->getRoles()));
    }

    public function testRolesRelationships()
    {
        $roles = new \MicheleAngioni\PhalconConfer\Models\Roles();
        $role = $roles::findFirst();
        $this->assertEquals(2, count($role->getPermissions()));
    }
}
