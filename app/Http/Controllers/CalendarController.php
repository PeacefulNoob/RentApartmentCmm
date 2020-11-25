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
        $data = Event::get($start, $end, [], '6v9b4npqb5c1b7388ebjp35q86i2h6an@import.calendar.google.com');

        if($data->count()) {

            foreach ($data as $key => $value) {
                    $events[] = \Calendar::event(
                        $value->summary,

                        true,
                        new \DateTime($value->start->date),
                        new \DateTime($value->end->date),
                        null,
                        // Add color and link on event
                        [
                            'color' => '#f05050',
                        ]

                    );

            }
        }
        $calendar = \Calendar::addEvents($events)->setOptions([
            'locale' => 'en',
            'firstDay' => 0,
            'displayEventTime' => true,
            'selectable' => true,
            'initialView' => 'dayGridMonth',
            'headerToolbar' => [
                'end' => 'prev,next'
            ]
        ]);

        $calendar->setId('1');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){}',
            'eventClick' => 'function(event){}'
        ]);

        return view('sitePages.calendar', compact(['calendar', 'events']));

    }
}
