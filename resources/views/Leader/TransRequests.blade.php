@extends('layouts.app')

@section('content')
    <div class="container" id="top">
        <div class="row  justify-content-end" >
            <button  class="btn btn-outline-primary btn-sm"
                    onclick="location.href='{{ url('Leader')}}'"
                    >Dashboard
            </button>
        </div>
        <div class="text-center">
            <h1 class="text-5xl Uppercase bold">
               Transport Requests
            </h1>
        </div>
        <div class="d-flex justify-content-center">
           <table class="table"  border="2">
                <tr>
                    <th>Requested By</th>
                    <th>Travelers Name</th>
                    <th>Destination</th>
                    <th>Reason for Travel</th>
                    <th>Starting Time </th>
                    <th>Ending Time</th>
                    <th>Requested At</th>
                    <th>Driver's Name</th>
                    <th>Vehicle's License plate number</th>
                    <th>initial kilometer</th>
                    <th>final kilometer</th>
                    <th>Request Status</th>
                    <th>Approved BY</th>
                </tr>
                @forelse ($requests as $request)
                <tr>
                    <td>{{ $request->requested_by }}</td>
                    <td>{{ $request->travelers_name }}</td>                    
                    <td>{{ $request->destination }}</td>
                    <td>{{ $request->reason }}</td>
                    <td>{{ $request->starting_time}}</td>
                    <td>{{ $request->ending_time }}</td>
                    <td>{{ $request->created_at }}</td>
                    <td>{{ $request->driver_name }}</td>
                    <td>{{ $request->car_license_num }}</td>
                    <td>{{ $request->initial_kilo_meter }}</td>
                    <td>{{ $request->final_kilo_meter }}</td>
                    <td>{{ $request->request_status }}</td>
                    <td>{{ $request->Approved_by }}</td>
                    @if ($request->request_status == 'pending')
                        <td>
                            <a href="/TransportAuth/{{ $request->id }}/Approve"
                                class="btn btn-primary btn-sm"
                                role="button">
                                Approve
                            </a>
                            <form action="/TransportAuth/{{  $request->id }}/deny" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger my-2 btn-sm">
                                        Deny
                                    </button>
                            </form>    
                        </td>
                    @elseif ($request->request_status == 'Completed') 
                        <td>compeleted</td>
                    @elseif ($request->driver_status == 'driver_Completed' && $request->client_status == 'client_Completed') 
                        <td>    
                            <form action="/TransportAuth/{{  $request->id }}/complete" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">
                                    completed
                                </button>
                            </form>
                        </td>  
                    @elseif ($request->request_status == 'Approved')
                        <td>
                            <form action="/TransportAuth/{{  $request->id }}/deny" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Deny
                                </button>
                            </form>
                        </td>        
                    @elseif ($request->request_status == 'denied') 
                        <td>    
                            <a href="/TransportAuth/{{ $request->id }}/Approve"
                                class="btn btn-primary btn-sm"
                                role="button">
                                Approve
                            </a>
                        </td>
                   
                    @endif
                </tr>
            @empty
                <tr>
                   <td colspan="12" style="text-align: center">NO request has been received.</td>
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