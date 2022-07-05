@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-10 bg-gray-500 ">
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
        </div>
        <div class="text-center">
            <h1 class="text-5xl Uppercase bold">
               Transport Requests
            </h1>
        </div>
        <div>
                @if (session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            <table class="table "  border="2">
                <tr>
                    <th>Requested By</th>
                    <th>Travelers Name</th>
                    <th>Destination</th>
                    <th>Reason for Travel</th>
                    <th>Starting Time </th>
                    <th>Ending Time</th>
                    <th>Driver's Name</th>
                    <th>Vehicle's License plate number</th>
                    <th>Request Status</th>
                    <th>Approved BY</th>
                    <th></th>
                </tr>
                @foreach ($requests as $request)
                <tr>
                    <td>{{ $request->requested_by }}</td>
                    <td>{{ $request->travelers_name }}</td>                    
                    <td>{{ $request->destination }}</td>
                    <td>{{ $request->reason }}</td>
                    <td>{{ $request->starting_time}}</td>
                    <td>{{ $request->ending_time }}</td>
                    <td>{{ $request->driver_name }}</td>
                    <td>{{ $request->car_license_num }}</td>
                    <td>{{ $request->request_status }}</td>
                    <td>{{ $request->Approved_by }}</td>
                    <td><a href="/TransportAuth/{{ $request->id }}/Approve"
                            class="btn btn-primary btn-sm"
                            role="button">
                            Approve</a>
                        <form action="/TransportAuth/{{  $request->id }}/deny" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Deny
                                </button>
                        </form>    
                    </td>
                </tr>
                @endforeach
            </table>
            
            <hr>
        </div>
        
    </div>
@endsection