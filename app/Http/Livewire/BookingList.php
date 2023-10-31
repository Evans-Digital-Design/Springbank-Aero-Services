<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Schedule;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;
    public function render()
    {
        $schedules = Schedule::query()->latest()->orderBy('date')->with('employee')->paginate( $this->perPage);

        return view('livewire.booking-list', compact('schedules'));
    }

    public function updatedPerPage($value)
    {
        $this->perPage = $value;
    }
    public function deleteSchedule($value)
    {
        $dd =  Schedule::find($value);
        $dd->delete();
        session()->flash('message', 'Schedule successfully deleted.');

    }

    public function generate()
    {
        $currentDate = Carbon::now();
        $endDate = Carbon::now()->addMonth();
        $employees = Employee::all();

        foreach ($employees as $employee) {
            // Generate schedule for each day in the upcoming month
            $currentDate = Carbon::now();
            $schedules = [];

            while ($currentDate->lt($endDate)) {
                $schedules[] = [
                    'employee_id' => $employee->id,
                    'date' => $currentDate->format('Y-m-d'),
                    'start_time' => '09:00:00', // You can customize this based on your needs
                    'end_time' =>  '22:00:00'// You can customize this based on your needs
                ];

                $currentDate->addDay();
            }
            Schedule::insert($schedules);
        }
         session()->flash('message', 'Schedule generate successfully done.');
    }


}
