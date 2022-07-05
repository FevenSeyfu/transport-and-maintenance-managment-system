@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HELLO, ') }}{{ Auth::user()->fullName() }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>
                        <div class="py-4   ">
                            @if ($transport != 0)
                            <button  class="btn col-md-6 py-2 my-2 font-bold btn-lg btn-outline-danger btn-lg" onclick="location.href='{{url('/Leader/TransportAuth')}}'">
                                Authorize Transportation Requests
                            </button><span class="bg-danger text-white rounded-circle mx-1 px-1 ">{{ $transport }}</span><br>
                            @else
                            <button  class="btn col-md-6 py-2 my-2 font-bold btn-lg btn-outline-primary btn-lg" onclick="location.href='{{url('/Leader/TransportAuth')}}'">
                                Authorize Transportation Requests
                            </button><br>
                            @endif
                            @if ($new !=0)
                            <button  class="btn col-md-6 py-2 font-bold btn-outline-danger btn-lg" onclick="location.href='{{route('maintenanceAuth')}}'">
                                Authorize Maintenance Requests
                            </button><span class="bg-danger text-white rounded-circle my-2 px-1 ">{{ $new }}</span><br>
                            @else
                            <button  class="btn col-md-6 py-2 font-bold btn-outline-primary btn-lg" onclick="location.href='{{route('maintenanceAuth')}}'">
                                Authorize Maintenance Requests
                            </button><br>
                            @endif
                            <button  class="btn col-md-6 py-2 my-2 font-bold btn-lg btn-outline-primary " onclick="location.href='{{url('/driverList')}}'">
                                        List of Drivers
                            </button><br>
                            <div> <button  class="btn col-md-6 py-2 w-10 font-bold btn-lg btn-outline-primary  " onclick="location.href='{{url('/vehicleList')}}'">
                                        List of Vehicles
                            </button> </div>
                            <button  class="btn col-md-6 py-2 my-2  font-bold btn-lg btn-outline-primary " onclick="location.href='{{route('Leader.completed')}}'">
                                        Report
                            </button><br>
                            <button  class="btn col-md-6 py-2 my-2 font-bold btn-lg btn-outline-primary " onclick="location.href='{{route('Leader.feedback')}}'">
                                        Received feedbacks
                            </button><br>
                        
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection