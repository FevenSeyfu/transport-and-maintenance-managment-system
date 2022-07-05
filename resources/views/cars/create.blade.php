@extends('layouts.app')

@section('content')

<div>
    <div class="container">
         <div class="row justify-content-end" > 
                <button  class="btn btn-outline-primary btn-sm" id="top" onclick="location.href='{{url('Leader')}}'">Dashboard</button>
        </div>
        <div class="text-center">
                <h1 class="text-5xl Uppercase bold">
                        Add Vehicle 
                </h1>
        </div>
            <div class="flex justify-center py-20">
                <form action="/vehicleList" method="POST">
                   @csrf 
                   <div class="form-group row">
                        <label for="model"
                            class="col-md-4 col-form-label text-md-right">
                                {{ __('Model') }}
                        </label>
                        <div class="col-md-6">
                            <input id="model" 
                            type="text" 
                            class="form-control
                                @error('model') is-invalid 
                                @enderror" 
                                name="model" 
                                placeholder="Enter Model"
                                value="{{ old('model') }}" 
                                required autocomplete="model" autofocus>
                            @error('model')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                   </div>
                        <div class="form-group row">
                                <label for="license_plate_number"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('License Plate Number') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="license_plate_number" 
                                        type="text" 
                                        class="form-control
                                        @error('license_plate_number') is-invalid 
                                        @enderror" 
                                        name="license_plate_number" 
                                        placeholder="Enter plate number"
                                        value="{{ old('license_plate_number') }}" 
                                        required autocomplete="license_plate_number" autofocus>
                                        @error('license_plate_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>
                        <div class="form-group row">
                                <label for="Year"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Year') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="Year" 
                                        type="text" 
                                        class="form-control
                                        @error('Year') is-invalid 
                                        @enderror" 
                                        name="Year" 
                                        placeholder="YYYY /G.C"
                                        value="{{ old('Year') }}" 
                                        required autocomplete="Year" autofocus>
                                        @error('Year')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="age"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Age of Vehicle') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="age" 
                                        type="text" 
                                        class="form-control
                                        @error('age') is-invalid 
                                        @enderror" 
                                        name="age" 
                                        placeholder="Enter Age"
                                        value="{{ old('age') }}" 
                                        required autocomplete="age" autofocus>
                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        
                        <div class="form-group row">
                                <label for="Motor_number"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Motor Number') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="Motor_number" 
                                        type="text" 
                                        class="form-control
                                        @error('Motor_number') is-invalid 
                                        @enderror" 
                                        name="Motor_number" 
                                        placeholder="Enter motor number"
                                        value="{{ old('Motor_number') }}" 
                                        required autocomplete="Motor_number" autofocus>
                                        @error('Motor_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="chassis_number"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Chassis Number') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="chassis_number" 
                                        type="text" 
                                        class="form-control
                                        @error('chassis_number') is-invalid 
                                        @enderror" 
                                        name="chassis_number" 
                                        placeholder="Enter Chassis number"
                                        value="{{ old('chassis_number') }}" 
                                        required autocomplete="chassis_number" autofocus>
                                        @error('chassis_number')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="location"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Assigned Location') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="location" 
                                        type="text" 
                                        class="form-control
                                        @error('location') is-invalid 
                                        @enderror" 
                                        name="location" 
                                        placeholder="Enter Location"
                                        value="{{ __('A.A') }}" 
                                        required autocomplete="location" autofocus>
                                        @error('location')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="kilo_meter"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Kilometer Reading') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="kilo_meter" 
                                        type="number" 
                                        class="form-control
                                        @error('kilo_meter') is-invalid 
                                        @enderror" 
                                        name="kilo_meter" 
                                        placeholder="Enter Kilometer"
                                        value="{{ old('kilo_meter') }}" 
                                        required autocomplete="kilo_meter" autofocus>
                                        @error('kilo_meter')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="passenger_capacity"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Total Capacity') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="passenger_capacity" 
                                        type="number" 
                                        class="form-control
                                        @error('passenger_capacity') is-invalid 
                                        @enderror" 
                                        name="passenger_capacity" 
                                        placeholder="Enter Capacity"
                                        value="{{ old('passenger_capacity') }}" 
                                        required autocomplete="location" autofocus>
                                        @error('passenger_capacity')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div> 
                        <div class="form-group row">
                                <label for="car_status"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Vehicle Status') }}
                                </label>
                                <div class="col-md-6 ">
                                        <input type="radio" 
                                                name="car_status" 
                                                value="Assigned"
                                                class="col-md-2 @error('car_status') is-invalid @enderror">Assigned<br>
                                        <input type="radio" 
                                                name="car_status" 
                                                value="under maintenance"
                                                class="col-md-2 @error('car_status') is-invalid @enderror">Under Maintenance <br>
                                        <input type="radio" 
                                                name="car_status" 
                                                value="available"
                                                class="col-md-2 @error('car_status') is-invalid @enderror" checked>Available <br>
                                        <input type="radio" 
                                                name="car_status" 
                                                value="Accident"
                                                class="col-md-2 @error('car_status') is-invalid @enderror">Out of work due to accident
                                        
                                        @error('car_status')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row">
                                <label for="service_type"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Vehicle Type') }}
                                </label>
                                <div class="col-md-6 ">
                                        <input type="radio" 
                                                name="service_type" 
                                                value="passenger"
                                                class="col-md-2 @error('service_type') is-invalid @enderror" checked> passenger Vehicle<br>
                                        <input type="radio" 
                                                name="service_type" 
                                                vlaue="Truck"
                                                class="col-md-2 @error('service_type') is-invalid @enderror">Truck  <br> 
                                        <input type="radio" 
                                                name="service_type" 
                                                vlaue="AUTHORITY"
                                                class="col-md-2 @error('service_type') is-invalid @enderror">Authority 
                                        @error('service_type')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                </div> 
                        </div>
                        <div class="form-group row">
                                <label for="description"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Additional Inforamtion') }}
                                </label>
                                <div class="col-md-6">
                                        <input id="description" 
                                        type="text"
                                        class="form-control
                                        @error('description') is-invalid 
                                        @enderror" 
                                        name="description" 
                                        placeholder="Description"
                                        value="{{ old('description') }}" 
                                        autocomplete="location" autofocus>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>  
                        </div>   
                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                        </div>
                </form>
            </div>
        </div>
        
    
</div>
@endsection
