@extends('layouts.app')

@section('content')

<div >
    
        <div class="container">
            <div class="text-center">
                <h1 class="text-5xl Uppercase bold">
                   Update Driver Information
                </h1>
            </div>
            <div class="flex justify-center py-20">
                <form action="/driverList/{{ $driver->id }}" method="POST">
                   @csrf 
                   @method('PUT')
                    <div class="block">
                        <input type="text" 
                           name="first_name" 
                           value="{{ $driver->first_name }}"
                           class=" w-80 italic placeholder-gray-400"><br>
                    <input type="text" 
                            name="last_name" 
                            value="{{ $driver->last_name }}" 
                            class=" w-80 italicplaceholder-gray-400"><br>
                    <div>
                        <label>Driver's Status</label> <br>       
                        <input type="radio" 
                                name="driver_status" 
                                value="Assigned"
                                class="">Assigned<br>
                        <input type="radio" 
                                name="driver_status" 
                                value="available"
                                class="">Available
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
