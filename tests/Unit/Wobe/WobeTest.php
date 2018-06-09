<?php

namespace Tests\Unit\Wobe;

use WJ\Wobe;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WobeTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->wobe = \App::make(Wobe::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetCountries()
    {
        $countries = $this->wobe->getCountries();

        //$this->assertEquals(count($states), 24);

        $this->assertCount(246, $countries);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetWorld()
    {
        $countries = $this->wobe->getWorld();

        //$this->assertEquals(count($states), 24);

        $this->assertCount(246, $countries);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetStates()
    {
    	$states = $this->wobe->getStates();

    	//$this->assertEquals(count($states), 24);

        $this->assertCount(24, $states);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetCity()
    {
        $city = $this->wobe->city('237-4032-47305');

        $this->assertEquals($city->name, 'Barquisimeto');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetState()
    {
        $state = $this->wobe->state('237-4032');

        $this->assertEquals($state->name, 'Lara');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetStateOfCity()
    {
        $state = $this->wobe->stateOfCity('237-4032-47305');

        $this->assertEquals($state->name, 'Lara');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetCountryOfCity()
    {
        $country = $this->wobe->countryOfCity('237-4032-47305');

        $this->assertEquals($country->name, 'Venezuela');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetCountryOfState()
    {
        $country = $this->wobe->countryOfState('237-4032');

        $this->assertEquals($country->name, 'Venezuela');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testGetCountry()
    {
        $country = $this->wobe->country('237');

        $this->assertEquals($country->name, 'Venezuela');
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testStatesOfCountry()
    {
        $states = $this->wobe->statesOfCountry('237');

        $this->assertCount(24, $states);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testgetCitiesOfState()
    {
        $cities = $this->wobe->getCities('237-4032');

        $this->assertCount(6, $cities);
    }

    /**
     * Get properties from api tests.
     *
     * @return void
     */
    public function testgetIdsCitiesOfState()
    {
        $cities = $this->wobe->getIdsOfCitiesFromState('237-4032');

        $this->assertCount(6, $cities);
    }
}
