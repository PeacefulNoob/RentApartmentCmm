<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CalendarController extends Controller
{


    public function index(){






        return view('sitePages.calendar', compact(['calendar', 'events']));

    }
}
