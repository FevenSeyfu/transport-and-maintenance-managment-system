@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Hello,')}}{{ Auth::user()->username }}{{(' You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                </div>      
                <div class="container">
                    <div class="text-center">
                        <h2 class=" Uppercase ">
                            Transport Request
                        </h2>
                    </div>
                    <div class="flex text-center py-20">
                        <form action="{{ route('TransportReqPost') }}" method="POST">
                            @csrf 
                            
                            <div class="form-group row">
                                <label for="travelers_name"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('Travelers Name') }}
                                </label>
    
                                <div class="col-md-6">
                                    <input id="travelers_name" 
                                    type="text" 
                                    class="form-control
                                        @error('travelers_name') is-invalid 
                                        @enderror" 
                                        name="travelers_name" 
                                        placeholder="Enter Full Name"
                                        value="{{ old('travelers_name') }}" 
                                        required autocomplete="travelers_name" autofocus>
                                    @error('travelers_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>      
                            <div class="form-group row">
                                <label for="destination"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('Where To travel') }}
                                </label>
    
                                <div class="col-md-6">
                                    <input id="destination"
                                    type="text"
                                    class="form-control
                                        @error('destination') is-invalid 
                                        @enderror" 
                                        name="destination" 
                                        placeholder="Destination"
                                        value="{{ old('destination') }}" 
                                        required autocomplete="destination" autofocus>
    
                                    @error('destination')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label for="reason"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('Reason for travel') }}
                                </label>
    
                                <div class="col-md-6">
                                    <input id="reason"
                                    type="text"
                                    class="form-control
                                        @error('reason') is-invalid 
                                        @enderror" 
                                        name="reason" 
                                        placeholder="Enter Reason"
                                        value="{{ old('reason') }}" 
                                        required autocomplete="reason" autofocus>
    
                                    @error('reason')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label for="starting_time"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('Service Starting Time') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="starting_time"
                                        type="time"
                                        class="form-control
                                        @error('starting_time') is-invalid 
                                        @enderror" 
                                        name="starting_time" 
                                        value="{{ old('starting_time') }}" 
                                        required autocomplete="starting_time" autofocus>
                                    
                                    @error('starting_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="ending_time"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('Service Ending Time') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="ending_time"
                                        type="time"
                                        class="form-control
                                        @error('ending_time') is-invalid 
                                        @enderror" 
                                        name="ending_time" 
                                        value="{{ old('ending_time') }}" 
                                        required autocomplete="ending_time" autofocus>
                                   @error('ending_time')
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
        </div>
    </div>
</div>
@endsection