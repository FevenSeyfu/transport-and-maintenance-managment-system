@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="text-center">
            <h4 class="text-5xl Uppercase bold">
                Approve  Transport Request
            </h4>
        </div>
        
        <div class="flex justify-center py-20">
            <form action="/TransportAuth/{{ $transports->id }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="form-group row">
                   <h3>List of available Driver's</h3>
                    <table class="table">
                        <tr>
                            <th>Driver's Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                        </tr>
                        @forelse ($drivers as $driver )
                            <tr>
                                <td>{{ $driver->id }}</td>
                                <td>{{ $driver->first_name }}</td>
                                <td>{{ $driver->last_name }}</td>
                            </tr>
                        @empty
                            <tr>
                               <td colspan="4">No drivers available at the moment.</td>
                            </tr>
                        @endforelse
                   </table>
                   <h3>list of available Vehicles</h3>
                   <table class="table">
                        <tr>
                            <th>License plate number</th>
                            <th>Model </th>
                            <th>MIllo meter reading </th>
                            <th>service type </th>
                            <th>Capacity(people/quintal) </th>
                            <th></th>
                        </tr>
                        @forelse ($cars as $car )
                            <tr>
                                <td>{{ $car->license_plate_number }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->milo_meter }}</td>
                                <td>{{ $car->service_type }}</td>
                                <td>{{ $car->passenger_capacity }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Vehicles available at the moment.</td>
                            </tr>
                        @endforelse
                    </table>
                </div> 
                <div class="form-group row">
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
                    <label for="car_license_num"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Vehicle License Plate Number') }}
                    </label>

                    <div class="col-md-6">
                        <input id="car_license_num" 
                        type="text" 
                        class="form-control
                            @error('car_license_num') is-invalid 
                            @enderror" 
                            name="car_license_num" 
                            placeholder=" Vehicle's License plate number.."
                            value="{{ $transports->car_license_num }}" 
                            required autofocus>

                        @error('car_license_num')
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
            </form>
        </div>
    </div>
</div>
@endsection
