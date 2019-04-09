<?php

namespace Ahsay\Test\User;

use Ahsay\Test\AbstractTestCase;
use Ahsay\User\Api;
use Ahsay\User\User;

class ApiTest extends AbstractTestCase
{
    public function testUser()
    {
        $api = new Api($this->getClient());

        $this->assertInstanceOf(User::class, $api->user());
    }
}
