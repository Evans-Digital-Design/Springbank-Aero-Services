<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Employee;
use App\Models\Schedule;
use Carbon\CarbonInterval;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Bookings\TimeSlotGenerator;
use App\Bookings\Filters\AppointmentFilter;
use App\Bookings\Filters\UnavailabilityFilter;
use App\Bookings\Filters\SlotsPassedTodayFilter;

class BookingController extends Controller
{
    public function __invoke()
    {
       
        $schedule = Schedule::find(); // 25th
        $service = Service::find(); // 1 hour session

        $employee = Employee::find(); // Alex
            
        $slots = $employee->availableTimeSlots($schedule, $service);
        


        return view('bookings.create', [
            'slots' => $slots
        ]);
    }
}
