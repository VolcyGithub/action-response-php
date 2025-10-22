<?php

use PHPUnit\Framework\TestCase;
use ARP\Support\Arr;

class ArrTest extends TestCase
{
    public function testGetReturnsValueForSimpleKey()
    {
        $data = ['name' => 'Yowensly', 'age' => 17];
        $this->assertEquals('Yowensly', Arr::get($data, 'name'));
    }

    public function testGetReturnsValueForNestedKey()
    {
        $data = [
            'user' => [
                'profile' => [
                    'email' => 'yowensly@example.com'
                ]
            ]
        ];

        $this->assertEquals('yowensly@example.com', Arr::get($data, 'user.profile.email'));
    }

    public function testGetReturnsDefaultForMissingKey()
    {
        $data = ['user' => ['name' => 'Volcy']];
        $this->assertEquals('default', Arr::get($data, 'user.age', 'default'));
    }

    public function testGetReturnsNullWhenDefaultNotProvided()
    {
        $data = ['x' => 10];
        $this->assertNull(Arr::get($data, 'y'));
    }

    public function testGetReturnsDefaultForInvalidNestedKey()
    {
        $data = [
            'person' => [
                'name' => 'Sam',
                'address' => null
            ]
        ];

        // "person.address.street" fails midway, should return default
        $this->assertEquals('not found', Arr::get($data, 'person.address.street', 'not found'));
    }

    public function testGetReturnsArrayForIntermediateLevel()
    {
        $data = ['config' => ['db' => ['host' => 'localhost']]];
        $this->assertIsArray(Arr::get($data, 'config.db'));
    }

    public function testGetWithEmptyKeyReturnsDefault()
    {
        $data = ['a' => 1];
        $this->assertEquals('none', Arr::get($data, '', 'none'));
    }

    public function testGetStopsIfSegmentNotArray()
    {
        $data = ['a' => 'string'];
        $this->assertEquals('fallback', Arr::get($data, 'a.b', 'fallback'));
    }
}
