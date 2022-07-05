@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Hello,')}}{{ Auth::user()->username }}{{(' You are logged in!') }}</div>

                <div class="card-body">
                      
                <div class="container">
                    <div class="text-center">
                        <h2 class=" Uppercase ">
                            Maintenance Request
                        </h2>
                    </div>
                    <div class="flex text-center py-20">
                        <form action="/driver/maintenanceReqpost/{{ $transports->id }}" method="POST">
                            @csrf 
                            <div class="form-group row">
                                <label for="kiloMeter_reading"
                                    class="col-md-4 col-form-label text-md-right">
                                        
                                </label>
                                <div class="col-md-6">
                                    <input id="kiloMeter_reading" 
                                        type="text" 
                                        class="form-control
                                        @error('kiloMeter_reading') is-invalid 
                                        @enderror" 
                                        name="kiloMeter_reading" 
                                        placeholder="Enter kilometer Reading"
                                        value="{{ old('kiloMeter_reading') }}" 
                                        required autocomplete="kiloMeter_reading" autofocus>
            
                                    @error('kiloMeter_reading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <h5>Vehicle's issues to be fixed</h5>
                            <div class="form-group row">
                                <label for="issues"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('1') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="issues_1" 
                                        type="text" 
                                        class="form-control
                                        @error('issues') is-invalid 
                                        @enderror" 
                                        name="issues[]" 
                                        placeholder="issues to be fixed"
                                        value="{{ old('issues') }}" 
                                        required autocomplete="issues" autofocus>
                                    @error('issues')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>    
                            </div>       
                            <div class="form-group row">
                                <label for="issues"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('2') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="issues_2" 
                                        type="text" 
                                        class="form-control
                                        @error('issues') is-invalid 
                                        @enderror" 
                                        name="issues[]" 
                                        placeholder="issues to be fixed"
                                        value="{{ old('issues') }}" 
                                         autocomplete="issues"autofocus>
                                    @error('issues')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>   
                            <div class="form-group row">
                                <label for="issues"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('3') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="issues_3" 
                                        type="text" 
                                        class="form-control
                                        @error('issues') is-invalid 
                                        @enderror" 
                                        name="issues[]" 
                                        placeholder="issues to be fixed"
                                        value="{{ old('issues') }}" 
                                         autocomplete="issues" autofocus>
                                    @error('issues')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>           
                            <div class="form-group row">
                                <label for="issues"
                                    class="col-md-4 col-form-label text-md-right">
                                        {{ __('4') }}
                                </label>
                                <div class="col-md-6">
                                    <input id="issues_4" 
                                        type="text" 
                                        class="form-control
                                        @error('issues') is-invalid 
                                        @enderror" 
                                        name="issues[]" 
                                        placeholder="issues to be fixed"
                                        value="{{ old('issues') }}" 
                                         autocomplete="issues" autofocus>
                                    @error('issues')
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