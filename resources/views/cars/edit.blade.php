@extends('layouts.app')

@section('content')

<div >
    
        <div class="container">
            <div class="text-center">
                <h1 class="text-5xl Uppercase bold">
                   Update Vehicle Information
                </h1>
            </div>
            <div class="flex justify-center py-20">
                <form action="/vehicleList/{{ $car->id }}" method="POST">
                   @csrf 
                   @method('PUT')
                    <div class="block">
                        <input type="text" 
                           name="model" 
                           value="{{ $car->model }}"
                           class=" w-80 italic placeholder-gray-400"><br>
                    <input type="text" 
                            name="license_plate_number" 
                            value="{{ $car->license_plate_number }}" 
                            class=" w-80 italicplaceholder-gray-400"><br>
                    <input type="number" 
                            name="milo_meter" 
                            value="{{ $car->milo_meter }}" 
                            class="  w-80 italicplaceholder-gray-400"> <br>
                    <input type="number" 
                            name="passenger_capacity"
                            value="{{ $car->passenger_capacity }}" 
                            class="block   w-80 italicplaceholder-gray-400">people/Quintal <br>
                    <div>
                        <label>Vehicle Status</label> <br>       
                        <input type="radio" 
                                name="car_status" 
                                value="Assigned"
                                class="">Assigned<br>
                        <input type="radio" 
                                name="car_status" 
                                value="under maintenance"
                                class="">Under Maintenance<br> 
                        <input type="radio" 
                                name="car_status" 
                                value="available"
                                class="">Available
                    </div>                
                    <div>
                        <label>Vehicle Type</label> <br>       
                        <input type="radio" 
                                name="service_type" 
                                value="passanger"
                                class=""> passanger Vehicle<br>
                        <input type="radio" 
                                name="service_type" 
                                vlaue="Truck"
                                class="">Truck   
                    </div> 
                    <div>
                        <input type="text" 
                        name="description" 
                        class="block  w-180 italicplaceholder-gray-400"
                        value="{{ $car->description }}" >
                    </div>  
                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        submit
                    </button>
                    </div>
                </form>
            </div>
        </div>
        
    
</div>
@endsection
