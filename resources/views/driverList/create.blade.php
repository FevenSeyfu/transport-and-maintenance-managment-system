@extends('layouts.app')

@section('content')

<div >
    
        <div class="container">
            <div class="text-center">
                <h1 class="text-5xl Uppercase bold">
                   Add a new driver
                </h1>
            </div>
            <div class="flex text-center py-20">
                <form action="/driverList" method="POST">
                   @csrf 
                    <div class="block">
                        <input type="text" 
                                name="first_name" 
                                placeholder="Driver First Name.. "
                                class=" w-80 italicplaceholder-gray-400"><br>
                        <input type="text" 
                                name="last_name" 
                                placeholder="Driver Last Name.. "
                                class=" w-80 italicplaceholder-gray-400"><br>
                        
                    </div>
                    <div class="py-4">
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
