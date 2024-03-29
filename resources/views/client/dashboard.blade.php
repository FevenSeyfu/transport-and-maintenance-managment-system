@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header"> {{ __('Hello,')}}{{ Auth::user()->username }}{{(' You are logged in!') }}</div>

                <div class="card-body">
                      
                    <div class="pt-10 bg-gray-500 justify-cener">
                        <a href="/client/TransportReq"  
                             class="border-b-2 pb-2 border-dotted  font-italic " style="font-size: 1.3em">
                            New Request &rarr;
                        </a>
                    </div>
                    <table class="table">
                        <tr>
                            <th>Travelers Name</th>                    
                            <th>Destination</th>
                            <th>Reason</th>
                            <th>Starting Time</th>
                            <th>Ending Time</th>
                            <th>Driver Name</th>
                            <th>Car License Plate Number</th>
                            <th> request status</th>
                            <th>Approved By</th>
                            <th></th>
                        </tr>
                        @forelse ($transports as $transport )
                            <tr>
                                <td>{{$transport->travelers_name }}</td>
                                <td>{{ $transport->destination }}</td>
                                <td>{{ $transport->reason  }}</td>
                                <td>{{ $transport->starting_time }}</td>
                                <td>{{ $transport->ending_time }}</td>
                                <td>{{ $transport->driver_name }}</td>
                                <td>{{ $transport->car_license_num }}</td>
                                <td>{{ $transport->request_status }}</td>
                                <td>{{ $transport->Approved_by }}</td>
                                @if ($transport->client_status ==='client_Completed')
                                    <td >
                                        Completed
                                    </td>
                                @elseif($transport->request_status ==='denied' ) 
                                    <td class="text-danger" >
                                        Denied
                                    </td>
                                @elseif($transport->request_status !=='pending' ) 
                                    <td >
                                        <a href="{{ route('client.completed',$transport->id) }}"
                                            class="btn btn-success btn-sm">
                                                Completed
                                        </a>
                                    </td>
                                @endif

                            </tr>
                        @empty
                            <tr>
                               <td colspan="7">No Request has been sent .</td>
                            </tr>
                        @endforelse
                   </table>
                   
                    
                </div>
            </div>
    </div>
</div>
@endsection