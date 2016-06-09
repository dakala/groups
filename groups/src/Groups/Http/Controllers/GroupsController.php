<?php

namespace Dajonems\Groups\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class GroupsController extends Controller
{
    public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        echo "The time now is: " . $time->toDateTimeString();
    }

}