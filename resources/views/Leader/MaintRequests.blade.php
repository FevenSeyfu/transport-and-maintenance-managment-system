@extends('layouts.app')

@section('content')

    <div class="container" id="top">
        <div class="row justify-content-end" >
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
        </div>
        <div class="text-center">
            <h1 class="text-5xl Uppercase bold">
               Maintenance Requests
            </h1>
        </div>
        <div class="d-flex justify-content-center">
           <table class="table "  border="2">
                <tr>
                    <th>Vehicle Type</th>
                    <th>Vehicle's license plate number</th>
                    <th>Kilo meter reading</th>
                    <th>Requested by/Driver Name/</th>
                    <th>Requested at</th>
                    <th>Shift Leader</th>
                    <th colspan="3">Issues To be fixed</th>
                    <th colspan="3">Fixed Issues </th>
                    <th>Request Status</th>
                    <th></th>
                </tr>
                @forelse ($requests as $request)
                <tr>
                    <td>{{ $request->vehicle_type  }}</td>
                    <td>{{ $request->license_number }}</td>                    
                    <td>{{ $request->kiloMeter_reading }}</td>
                    <td>{{ $request->driver_name }}</td>
                    <td>{{ $request->created_at }}</td>
                    <td>{{ $request->shift_leader }}</td>
                    <td colspan="3">{{ $request->issues }}</td>
                    <td colspan="3">{{ $request->fixed_issues }}</td>
                    <td>{{ $request->maintenance_status }}</td>
                    @if ($request->maintenance_status == 'pending')
                        <td>
                            <form action="/MaintenanceAuth/{{  $request->id }}/Approve" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary  btn-sm">
                                    Approve
                                </button>
                        </form>   
                            <form action="/MaintenanceAuth/{{  $request->id }}/deny" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger my-2 btn-sm">
                                        Deny
                                    </button>
                            </form>    
                        </td>
                    @elseif ($request->maintenance_status == 'Approved')
                        <td>
                            <form action="/MaintenanceAuth/{{  $request->id }}/deny" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger my-2 btn-sm">
                                    Deny
                                </button>
                            </form> 
                        </td>
                    @elseif ($request->maintenance_status == 'denied')
                    <td>
                        <form action="/MaintenanceAuth/{{  $request->id }}/Approve" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary  btn-sm">
                                Approve
                            </button>
                        </td>    
                    @elseif ($request->maintenance_status == 'Mechanic_Completed')
                        <td>
                            <form action="/MaintenanceAuth/{{  $request->id }}/complete" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">
                                    completed
                                </button>
                            </form>
                        </td>
                   @endif
                </tr>
                @empty
                <tr>
                   <td colspan="13" style="text-align: center">NO request has been received.</td>
                </tr>
            @endforelse
            </table>
            <hr>
        </div>
        <a href="#top" class="row fixed-bottom  btn  btn-primary">
            Back to top
        </a>
    </div>
@endsection