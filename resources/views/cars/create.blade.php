@extends('layouts.app')

@section('content')

<div >
    
        <div class="container">
            <div class="text-center">
                <h1 class="text-5xl Uppercase bold">
                   Add Vehicle 
                </h1>
            </div>
            <div class="flex justify-center py-20">
                <form action="/vehicleList" method="POST">
                   @csrf 
                    <div class="block ">
                        <input type="text" 
                                name="model" 
                                placeholder="Model.."
                                class=" w-80 italic placeholder-gray-400 "><br>
                        <input type="text" 
                                name="license_plate_number" 
                                placeholder="License Plate Number"
                                class=" w-80 italicplaceholder-gray-400 "><br>
                        <input type="number" 
                                name="milo_meter" 
                                placeholder="milometer reading"
                                class="  w-80 italicplaceholder-gray-400 "> <br>
                        <input type="number" 
                                name="passenger_capacity"
                                placeholder="Total Capacity" 
                                class="block   w-80 italicplaceholder-gray-400 ">people/Quintal <br>
                    <div>
                        <label>Vehicle Status</label> <br>       
                        <input type="radio" 
                                name="car_status" 
                                value="Assigned"
                                class="@error('car_status') is-invalid @enderror">Assigned<br>
                        <input type="radio" 
                                name="car_status" 
                                value="under maintenance"
                                class="@error('car_status') is-invalid @enderror">Under Maintenance<br> 
                        <input type="radio" 
                                name="car_status" 
                                value="available"
                                class="@error('car_status') is-invalid @enderror">Available
                    </div>                
                    <div>
                        <label>Vehicle Type</label> <br>       
                        <input type="radio" 
                                name="service_type" 
                                value="passenger"
                                class="@error('service_type') is-invalid @enderror"> passenger Vehicle<br>
                        <input type="radio" 
                                name="service_type" 
                                vlaue="Truck"
                                class="@error('service_type') is-invalid @enderror">Truck   
                    </div> 
                    <div>
                        <input type="text" 
                        name="description" 
                        class="block  w-180 italicplaceholder-gray-400 @error('description') is-invalid @enderror"
                        placeholder="Description...">
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
