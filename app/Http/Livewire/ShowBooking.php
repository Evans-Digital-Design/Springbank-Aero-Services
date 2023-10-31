<?php

namespace App\Http\Livewire;

use App\Mail\CancelBookingMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Auth\Access\AuthorizationException;

class ShowBooking extends Component
{

    public $appointment;

    public function mount(Appointment $appointment)
    {
        $this->appointment = $appointment;

        if(request()->token !== $appointment->token){
            throw new AuthorizationException();
        }
    }

    public function cancelBooking()
    {
//        dd($this->appointment->employee->email);

       $this->appointment->update([
           'cancelled_at' => now()
       ]);

        Mail::to($this->appointment->client_email)->queue(new CancelBookingMail($this->appointment));


    }
    public function render()
    {
        return view('livewire.show-booking')
        ->layout('layouts.guest');
    }
}
