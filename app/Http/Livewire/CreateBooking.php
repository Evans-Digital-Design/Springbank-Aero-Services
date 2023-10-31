<?php

namespace App\Http\Livewire;

use App\Mail\EmployeeBookingMail;
use Carbon\Carbon;
use App\Mail\OrderMail;
use App\Models\Service;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;

class CreateBooking extends Component
{

    public $employees;

    public $state = [
        'service' => '',
        'employee' => '',
        'time' => '',
        'name' => '',
        'email' => '',
        'phone' => '',
        'location' => '',
        'identifier' => ''

    ];

    public function mount()
    {
        $this->employees = collect();
    }

    protected function rules()
    {
        return[
            'state.service' => 'required|exists:services,id',
            'state.employee' => 'required|exists:employees,id',
            'state.time' => 'required|numeric',
            'state.name' => 'required|string',
            'state.email' => 'required|string',
            'state.phone' => 'required|string',
            'state.location' => 'required|string',
            'state.identifier' => 'required|string'

        ];
    }

    protected $listeners = [
        'updated-booking-time' => 'setTime'
    ];

    public function createBooking()
    {
        $this->validate();

        $bookingFields = [
            'date' => $this->timeObject->toDateString(),
            'start_time' => $this->timeObject->toTimeString(),
            'end_time' => $this->timeObject->clone()->addMinutes(
                $this->selectedService->duration)
                ->toTimeString(),
            'client_name' => $this->state['name'],
            'client_email' => $this->state['email'],
            'client_phone' => $this->state['phone'],
            'aircraft_location' => $this->state['location'],
            'aircraft_identifier' => $this->state['identifier'],
        ];



        $appointment = Appointment::make($bookingFields);

        $appointment->service()->associate($this->selectedService); // service id inserted
        $appointment->employee()->associate($this->selectedEmployee);

        $appointment->save();

        $this->sendOrderConfirmationMail($appointment);
        $this->sendOrderConfirmationMailForEmployer($appointment);

        return redirect()->to(route('bookings.show', $appointment) . '?token=' . $appointment->token);
    }

    public function sendOrderConfirmationMail($appointment)
    {
        Mail::to('jasneetpalsingh@gmail.com')->queue(new OrderMail($appointment));
    }
     public function sendOrderConfirmationMailForEmployer($appointment)
    {
        Mail::to($appointment->client_email)->queue(new EmployeeBookingMail($appointment));
    }



    public function setTime($time)
    {
        $this->state['time'] = $time;
    }

    public function updatedStateService($serviceId)
    {
        $this->state['employee'] = '';

        if(!$serviceId){
            $this->employees = collect();
            return;
        }

        $this->state['time'] = '';

        $this->employees = $this->selectedService->employees;

    }

    public function updatedStateEmployee()
    {
        $this->clearTime();
    }

    public function clearTime()
    {
        $this->state['time'] = '';
    }

    public function getSelectedServiceProperty()
    {
        if(!$this->state['service']){
            return null;
        }

        return Service::find($this->state['service']);
    }


    public function getHasDetailsToBookProperty()
    {
        return $this->state['service'] && $this->state['employee'] && $this->state['time'];
    }

    public function getTimeObjectProperty()
    {
        return Carbon::createFromTimeStamp($this->state['time']);
    }

    public function getSelectedEmployeeProperty()
    {
        if(!$this->state['employee']){
            return null;
        }

        return Employee::find($this->state['employee']);
    }

    public function render()
    {
        $services = Service::get();
        return view('livewire.create-booking', [
            'services' => $services
        ])
             ->layout('layouts.guest');
    }
}
