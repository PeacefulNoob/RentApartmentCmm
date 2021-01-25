<?php

namespace App;

use Acaronlex\LaravelCalendar\Calendar;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class FullCalendar{


    public static function getCalendar($calendar_id){
        $data = Event::get(Carbon::now(), Carbon::now()->addYear(), [], $calendar_id);
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
        }else{
            $calendar = \Calendar::setOptions([
                'locale' => 'en',
                'firstDay' => 0,
                'displayEventTime' => true,
                'selectable' => true,
                'initialView' => 'dayGridMonth',
                'headerToolbar' => [
                    'end' => 'prev,next'
                ]
            ]);
        }


        $eventsFullCalendar = collect(['title', 'start', 'end']);
        foreach($events as $event){
            $combined =  $eventsFullCalendar->combine([
                $event->title ,
                $event->start->format('Y-m-d'),
                $event->end->format('Y-m-d')
            ]);
        }



        $calendar->setId('1');
        $calendar->setCallbacks([



           '

            select' => 'function(selectionInfo){
               }',
            'eventClick' => 'function(event){
            alert("oks");
            }',
            'dateClick' =>'function(info) {
            info.dayEl.style.backgroundColor = "red";
            alert("clicked " + info);
        }',

            '  defaultDate'=> ' ,



            viewRender: function(view, element) {
            cur = view.intervalStart;
            d = moment(cur).add("months", 1);
            cal1.fullCalendar("gotoDate", d);
        }',
        ]);

       $eventsFullCalendar = collect(['title', 'start', 'end']);
         foreach($events as $event){
             $combined =  $eventsFullCalendar->combine([
                 $event->title ,
                 $event->start->format('Y-m-d'),
                  $event->end->format('Y-m-d')
                 ]);
         }

     $eventsFullCalendar = collect(['title', 'start', 'end']);
        foreach($events as $event){
            $combined =  $eventsFullCalendar->combine([
                $event->title ,
                $event->start->format('Y-m-d'),
                 $event->end->format('Y-m-d')
                ]);
        }

        return  $events;
        return $combined->all();
        dd();
        return $calendar;
    }
    

    public static function getCalendar1($calendar_id){
        $data = Event::get(Carbon::now(), Carbon::now()->addYear(), [], $calendar_id);

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
        }else{
            $calendar = \Calendar::setOptions([
                'locale' => 'en',
                'firstDay' => 0,
                'displayEventTime' => true,
                'selectable' => true,
                'initialView' => 'dayGridMonth',
                'headerToolbar' => [
                    'end' => 'prev,next'
                ]
            ]);
        }
        $eventsFullCalendar = collect(['title', 'start', 'end']);
        foreach($events as $event){
            $combined =  $eventsFullCalendar->combine([
                $event->title ,
                $event->start->format('Y-m-d'),
                $event->end->format('Y-m-d')
            ]);
        }



        $calendar->setId('2');
        $calendar->setCallbacks([
            'select' => 'function(selectionInfo){
               }',
            'eventClick' => 'function(event){
            alert("oks");
            }',
            'dateClick' =>'function(info) {
            info.dayEl.style.backgroundColor = "red";
            alert("clicked " + info);
        }',

        ]);
        /* $eventsFullCalendar = collect(['title', 'start', 'end']);
         foreach($events as $event){
             $combined =  $eventsFullCalendar->combine([
                 $event->title ,
                 $event->start->format('Y-m-d'),
                  $event->end->format('Y-m-d')
                 ]);
         }
 */
        /*return $combined->all();
        dd();*/
        return $calendar;
    }

}
