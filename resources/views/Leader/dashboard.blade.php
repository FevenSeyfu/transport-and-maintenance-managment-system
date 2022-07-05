@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STAFF LEADER Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>

                        <h2>Hello,{{ Auth::user()->username }}</h2> <br>
                        <div class="py-4   ">
                            <button  class="btn py-2 my-2 font-bold btn-lg btn-outline-primary btn-lg" onclick="location.href='{{url('/Leader/TransportAuth')}}'">
                                            Authorize Transportation Requests
                            </button><br>
                            <button  class="btn py-2 font-bold btn-outline-primary btn-lg" onclick="location.href='{{url('/maintenanceAuth')}}'">
                                        Authorize Maintenance Requests
                            </button><br>
                            <button  class="btn py-2 my-2 font-bold btn-lg btn-outline-primary " onclick="location.href='{{url('/driverList')}}'">
                                        List of Drivers
                            </button><br>
                            <div> <button  class="btn py-2 w-10 font-bold btn-lg btn-outline-primary  " onclick="location.href='{{url('/vehicleList')}}'">
                                        List of Vehicles
                            </button> </div>
                        
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection