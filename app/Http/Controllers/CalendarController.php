<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CalendarController extends Controller
{


    public function index(){
        $start = Carbon::now();
        $end = Carbon::now()->addYear();
        dd(Event::get($start, $end, [], '6v9b4npqb5c1b7388ebjp35q86i2h6an@import.calendar.google.com'));
    }
}
