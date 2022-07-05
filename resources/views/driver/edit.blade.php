@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h3 class="text-5xl Uppercase bold">
                Edit Kilo meter reading
            </h3>
        </div>
        <div class="flex justify-center py-20">
            <form action="/driver/{{ $transports->id }}" method="POST">
            @csrf 
            @method('PUT')
                <div class="form-group row">
                    <label for="initial_kilo_meter"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Initial kilo meter reading') }}
                    </label>
                    <div class="col-md-6">
                        <input id="initial_kilo_meter" 
                            type="text" 
                            class="form-control
                            @error('initial_kilo_meter') is-invalid 
                            @enderror" 
                            name="initial_kilo_meter" 
                            placeholder="Enter initial kilo meter"
                            value="{{ $transports->initial_kilo_meter }}" 
                            required autocomplete="initial_kilo_meter" autofocus>

                        @error('initial_kilo_meter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="final_kilo_meter"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('final kilo meter reading') }}
                    </label>
                    <div class="col-md-6">
                        <input id="final_kilo_meter" 
                            type="text" 
                            class="form-control
                            @error('final_kilo_meter') is-invalid 
                            @enderror" 
                            name="final_kilo_meter" 
                            placeholder="Enter final kilo meter"
                            value="{{ $transports->final_kilo_meter }}" 
                            required autocomplete="final_kilo_meter" autofocus>
                        @error('final_kilo_meter')
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
@endsection    
