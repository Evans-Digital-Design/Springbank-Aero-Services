<div class="bg-gray-100 max-w-sm mx-auto m-6 p-5 rounded-lg">
    <form wire:submit.prevent="createBooking">
        <div class="mb-6">
            <label for="service" class="inline-block text-gray-700 font-bold mb-2">Select Gas</label>
            <select name="service" id="service" class="bg-white h-10 w-full border-none rounded-lg" 
            wire:model = "state.service">
                <option value="">Select Gas</option>
                @foreach($services as $service)
                <option value="{{ $service->id}}">{{$service->name }} ({{$service->duration}} minutes)</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{!$employees->count() ? 'opacity-25' : '' }}">
            <label for="employee" class="inline-block text-gray-700 font-bold mb-2">Select Employee</label>
            <select name="employee" id="service" class="bg-white h-10 w-full border-none rounded-lg" 
            wire:model = "state.employee" {{!$employees->count() ? 'disabled="disabled"' : ''}}>
                <option value="">Select an employee</option>
                @foreach($employees as $employee)
                <option value="{{ $employee->id}}">{{$employee->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6 {{!$this->selectedService || !$this->selectedEmployee ? 'opacity-25' : '' }}">
            <label for="employee" class="inline-block text-gray-700 font-bold mb-2">Select appointment time</label>

            <livewire:booking-calendar :service="$this->selectedService" :employee="$this->selectedEmployee"
            :key="optional($this->selectedEmployee)->id"/>
        </div>

        @if ($this->hasDetailsToBook)
            <div class="mb-6">
                <div class="text-gray-700 font-bold mb-2">
                    You are ready to book
                </div>

                <div class="border-t border-b border-gray-300 py-2">
                    {{$this->selectedService->name}} ({{$this->selectedService->duration}} minutes) with
                    {{$this->selectedEmployee->name}}
                    on {{$this->timeObject->format('D jS M Y')}} at {{$this->timeObject->format('g:i A')}}
                </div>

            </div>

            <div class="mb-6">
                <div class="mb-3">
                    <label for="name" class="inline-block text-gray-700 font-bold mb-2">Your Name</label>
                    <input type="text" name="name" id="name" class="bg-white h-10 w-full border-none rounded-lg"
                    wire:model.defer="state.name">

                    @error('state.name')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                        {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="inline-block text-gray-700 font-bold mb-2">Your Phone</label>
                    <input type="text" name="phone" id="phone" class="bg-white h-10 w-full border-none rounded-lg"
                    wire:model.defer="state.phone">

                    @error('state.phone')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                        {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="inline-block text-gray-700 font-bold mb-2">Your Email</label>
                    <input type="text" name="email" id="email" class="bg-white h-10 w-full border-none rounded-lg"
                    wire:model.defer="state.email">

                    @error('state.email')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                        {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="location" class="inline-block text-gray-700 font-bold mb-2">Aircraft Location</label>
                    <input type="text" name="location" id="location" class="bg-white h-10 w-full border-none rounded-lg"
                    wire:model.defer="state.location">

                    @error('state.location')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                        {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="identifier" class="inline-block text-gray-700 font-bold mb-2">Aircraft Identifier</label>
                    <input type="text" name="identifier" id="identifier" class="bg-white h-10 w-full border-none rounded-lg"
                    wire:model.defer="state.identifier">

                    @error('state.identifier')
                        <div class="font-semibold text-red-500 text-sm mt-2">
                        {{$message}}
                        </div>
                    @enderror
                </div>

            </div>
            <button type="submit" class="bg-indigo-500 text-white h-11 px-4 text-center font-bold rounded-lg w-full">
                Book now
            </button>
        @endif

    </form>
</div>
