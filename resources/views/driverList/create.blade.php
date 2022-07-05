@extends('layouts.app')

@section('content')

<div class="row justify-content-end" > 
    <button  class="btn btn-outline-primary btn-sm" id="top" onclick="location.href='{{url('Leader')}}'">Dashboard</button>
</div>
        <div class="container">
            <div class="text-center">
                <h3>
                   Add a new driver
                </h3>
            </div>
            <div class="flex text-center py-20">
                <form action="/driverList" method="POST">
                   @csrf 
                   <div class="form-group row">
                        <label for="first_name"
                                class="col-md-4 col-form-label text-md-right">
                                {{ __('First Name') }}
                        </label>
                        <div class="col-md-6">
                                <input id="first_name" 
                                type="text" 
                                class="form-control
                                @error('first_name') is-invalid 
                                @enderror" 
                                name="first_name" 
                            value="{{ old('first_name') }}" 
                                required autocomplete="location" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>  
                    </div> 
                    <div class="form-group row">
                        <label for="last_name"
                                class="col-md-4 col-form-label text-md-right">
                                {{ __('Last Name') }}
                        </label>
                        <div class="col-md-6">
                                <input id="last_name" 
                                type="text" 
                                class="form-control
                                @error('last_name') is-invalid 
                                @enderror" 
                                name="last_name" 
                                value="{{ old('last_name') }}" 
                                required autocomplete="location" autofocus>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>     
                    <div class="form-group row">
                        <label for="driver_status"
                                class="col-md-4 col-form-label text-md-right">
                                {{ __('Driver Status') }}
                        </label>
                        <div class="col-md-2 my-3">
                                <input type="radio" 
                                        name="driver_status" 
                                        value="Assigned"
                                        class="col-md-2 @error('driver_status') is-invalid @enderror">Assigned<br>
                                <input type="radio" 
                                        name="driver_status" 
                                        value="available"
                                        class="col-md-2 @error('driver_status') is-invalid @enderror" checked>Available <br>
                                
                                @error('driver_status')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </div>  
                    </div>   
                    <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
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
