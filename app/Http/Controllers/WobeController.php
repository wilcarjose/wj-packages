<?php

namespace WilcarJose\Http\Controllers;

use WJ\Wobe;
use Illuminate\Http\Request;

class WobeController extends Controller
{
	protected $wobe;

    public function __construct(Wobe $wobe)
    {
        $this->wobe = $wobe;
    }

    protected function getStates()
    {
        $states = $this->wobe->getStates();

        return response()->json($states);
    }
}
