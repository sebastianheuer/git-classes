<?php
namespace Phpeople\Git;

class UserTest extends \PHPUnit_Framework_TestCase {

    public function testGetUsername()
    {
        $user = new User('johndoe', 'john@example.com');
        $this->assertSame('johndoe', $user->getUsername());
    }

    public function testGetEmail()
    {
        $user = new User('johndoe', 'john@example.com');
        $this->assertSame('john@example.com', $user->getEmail());
    }

}