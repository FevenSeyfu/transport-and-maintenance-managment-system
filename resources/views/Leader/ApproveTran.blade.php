@extends('layouts.app')

@section('content')

<div>
    <div class="container" id="top">
        <div class="row  justify-content-end" >
            <button  class="btn btn-outline-primary btn-sm"  onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
            <a href="#vehicles" class="btn btn-outline-primary  btn-sm" role="button" aria-pressed="true" >Vehicles</a>
        </div>
        <div class="text-center">
            <h4 class="text-5xl Uppercase bold">
                Approve  Transport Request
            </h4>
        </div>
        
        <div class="flex justify-center py-20">
            <form action="/TransportAuth/{{ $transports->id }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="form-group row my-2">
                    <label for="driver_name"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Driver Name') }}
                    </label>
                    <div class="col-md-6">
                        <input id="driver_id" 
                        type="text" 
                        class="form-control
                            @error('driver_id') is-invalid 
                            @enderror" 
                            name="driver_id" 
                            placeholder="Enter Driver's Id"
                            value="{{ $transports->driver_id }}" 
                            required autocomplete="driver_id" autofocus>

                        @error('driver_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="car_id"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Vehicle Id') }}
                    </label>

                    <div class="col-md-6">
                        <input id="id" 
                        type="text" 
                        class="form-control
                            @error('car_id') is-invalid 
                            @enderror" 
                            name="car_id" 
                            placeholder=" Vehicle's Id.."
                            value="{{ $transports->car_id }}" 
                            required autofocus>

                        @error('car_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                  
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Assign') }}
                        </button>
                    </div>
                </div>
                <div class="form-group row">
                    <table class="table my-2"  border="2">
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center"><h3>List of available Driver's</h3></th>
                            </tr>
                            <tr>
                                <th>Driver's Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                             </tr>
                        </thead>
                        @forelse ($drivers as $driver )
                            <tr>
                                <td>{{ $driver->id }}</td>
                                <td>{{ $driver->first_name }}</td>
                                <td>{{ $driver->last_name }}</td>
                            </tr>
                        @empty
                            <tr>
                               <td colspan="3">No drivers available at the moment.</td>
                            </tr>
                        @endforelse
                   </table>
                   <table class="table" border="2" id="vehicles">
                       <thead>
                           <tr>
                               <th colspan="5" style="text-align: center"><h3>List of available Vehicles</h3></th>
                           </tr>
                        <tr>
                            <th>Vehicle id</th>
                            <th>License plate number</th>
                            <th>Model </th>
                            <th>service type </th>
                            <th>Capacity(people/quintal) </th>
                            <th>Location</th>
                        </tr>
                       </thead>
                       @forelse ($cars as $car )
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->license_plate_number }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->service_type }}</td>
                                <td>{{ $car->passenger_capacity }}</td>
                                <td>{{ $car->location }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Vehicles available at the moment.</td>
                            </tr>
                        @endforelse
                    </table>
                </div> 
                <a href="#top" class="row fixed-bottom  btn  btn-primary">
                    Back to top
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
