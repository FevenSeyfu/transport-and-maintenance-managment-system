@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <div class="text-center">
            <h3 class="text-5xl Uppercase bold">
                Maintenance Request
            </h3>
        </div>
        
        <div class="flex justify-center py-20">
            <form action="/MaintenanceAuth/{{ $maintenances->id }}" method="POST">
                @csrf 
                @method('PUT')
                <div class="form-group row">
                    <label for="driver_name"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Assign Mechanic') }}
                    </label>
                    <div class="col-md-6">
                        <input id="assigned_mechanic" 
                        type="text" 
                        class="form-control
                            @error('assigned_mechanic') is-invalid 
                            @enderror" 
                            name="assigned_mechanic" 
                            placeholder="Enter Mechanics Name"
                            value="{{ $maintenances->assigned_mechanic }}" 
                             autocomplete="assigned_mechanic" autofocus>

                        @error('assigned_mechanic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="maintenance_type"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Maintenance Type') }}
                    </label> 
                    <div class="col-md-6 my-2">
                        <input id="maintenance_type" 
                                type="radio" 
                                name="maintenance_type" 
                                value="{{ ('Internal') }}" checked>  Internal<br>
                        <input id="maintenance_type" 
                                type="radio" 
                                name="maintenance_type" 
                                value="{{ ('External') }}">  External
                    </div>
                </div>
                <div class="form-group row">
                    <label for="starting_date"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Starting Date') }}
                    </label>
                    <div class="col-md-6">
                        <input id="starting_date" 
                            type="date"
                            class="form-control
                            @error('starting_date') is-invalid 
                            @enderror" 
                            name="starting_date" 
                            placeholder="Enter Mechanics Name"
                            value="{{ $maintenances->starting_date }}" 
                            required autocomplete="starting_date" autofocus>

                        @error('starting_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-8 col-form-label text-md-right">
                    <h3>Vehicle's issues that were fixed </h3>
                </div>
                <div class="form-group row">
                    <label for="fixed_issues"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('1') }}
                    </label>
                    <div class="col-md-6">
                        <input id="fixed_issues_1" 
                            type="text" 
                            class="form-control
                            @error('fixed_issues') is-invalid 
                            @enderror" 
                            name="fixed_issues[]" 
                            placeholder="fixed issues"
                            value="{{ old('fixed_issues') }}" 
                            required autocomplete="fixed_issues" autofocus>
                        @error('fixed_issues')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>    
                </div>       
                <div class="form-group row">
                    <label for="fixed_issues"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('2') }}
                    </label>
                    <div class="col-md-6">
                        <input id="fixed_issues_2" 
                            type="text" 
                            class="form-control
                            @error('fixed_issues') is-invalid 
                            @enderror" 
                            name="fixed_issues[]" 
                            placeholder=" fixed issues"
                            value="{{ old('fixed_issues') }}" 
                              autocomplete="fixed_issues"autofocus>
                        @error('fixed_issues')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>   
                <div class="form-group row">
                    <label for="fixed_issues"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('3') }}
                    </label>
                    <div class="col-md-6">
                        <input id="fixed_issues_3" 
                            type="text" 
                            class="form-control
                            @error('fixed_issues') is-invalid 
                            @enderror" 
                            name="fixed_issues[]" 
                            placeholder="fixed issues"
                            value="{{ old('fixed_issues') }}" 
                              autocomplete="fixed_issues" autofocus>
                        @error('fixed_issues')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>           
                <div class="form-group row">
                    <label for="fixed_issues"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('4') }}
                    </label>
                    <div class="col-md-6">
                        <input id="fixed_issues_4" 
                            type="text" 
                            class="form-control
                            @error('fixed_issues') is-invalid 
                            @enderror" 
                            name="fixed_issues[]" 
                            placeholder="fixed issues"
                            value="{{ old('fixed_issues') }}" 
                              autocomplete="fixed_issues" autofocus>
                        @error('fixed_issues')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>       
                <div class="form-group row">
                    <label for="material_expense"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Material expense') }}
                    </label>
                    <div class="col-md-6">
                        <input id="material_expense" 
                        type="number" 
                        class="form-control
                            @error('material_expense') is-invalid 
                            @enderror" 
                            name="material_expense" 
                            placeholder="Enter cost"
                            value="{{ $maintenances->material_expense }}" 
                            required autocomplete="material_expense" autofocus>

                        @error('material_expense')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Labor_expense"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Labour Expenses') }}
                    </label>
                    <div class="col-md-6">
                        <input id="Labor_expense" 
                        type="number" 
                        class="form-control
                            @error('Labor_expense') is-invalid 
                            @enderror" 
                            name="Labor_expense" 
                            placeholder="Enter Cost"
                            value="{{ $maintenances->Labor_expense }}" 
                            required autocomplete="Labor_expense" autofocus>

                        @error('Labor_expense')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="finished_date"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('End Date') }}
                    </label>
                    <div class="col-md-6">
                        <input id="finished_date" 
                        type="date"
                        class="form-control
                            @error('finished_date') is-invalid 
                            @enderror" 
                            name="finished_date" 
                            placeholder="Enter Date"
                            value="{{ $maintenances->finished_date }}" 
                            required autocomplete="finished_date" autofocus>

                        @error('finished_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Total_time"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Time it Consumed ') }}
                    </label>
                    <div class="col-md-6">
                        <input id="Total_time" 
                        type="number" 
                        class="form-control
                            @error('Total_time') is-invalid 
                            @enderror" 
                            name="Total_time" 
                            placeholder="NUmber of days"
                            value="{{ $maintenances->Total_time }}" 
                            required autocomplete="Total_time" autofocus>

                        @error('Total_time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mechanics_comment"
                        class="col-md-4 col-form-label text-md-right">
                            {{ __('Mechanics Comment') }}
                    </label>
                    <div class="col-md-6">
                        <input id="mechanics_comment" 
                        type="text" 
                        class="form-control
                            @error('mechanics_comment') is-invalid 
                            @enderror" 
                            name="mechanics_comment" 
                            placeholder="Comment..."
                            value="{{ $maintenances->mechanics_comment }}" autofocus>

                        @error('mechanics_comment')
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
