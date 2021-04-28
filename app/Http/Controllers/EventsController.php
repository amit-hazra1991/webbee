<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {

    	$sf = Event::query();  // join with user table
        // Only selecting the required fields
        $sf->select( 'id', 'name', 'created_at', 'updated_at')->with([
            'workshop' => function($q) {
              
              $q->select('id', 'start','end','event_id','name','created_at', 'updated_at');
            }
          ]);
        return $sf->get();
        throw new \Exception('implement in coding task 1');
    }

    public function getFutureEventsWithWorkshops() {
        throw new \Exception('implement in coding task 2');
    }
}
