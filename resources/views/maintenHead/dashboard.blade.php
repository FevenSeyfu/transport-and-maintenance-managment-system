@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center">
                    <h2 class="text-5xl my-3 Uppercase bold">
                        Maintenance Requests
                    </h2>
               
                <table class="table" border="2">
                    <tr>
                        <th>Assigned Mechanic</th>                    
                        <th>Vehicle Type</th>
                        <th>license Plate Number</th>
                        <th>kilometer reading</th>
                        <th colspan="2">issues To be fixed</th>
                        <th>Starting Date</th>
                        <th colspan="2">Fixed Issues</th>
                        <th colspan="3">Cost of Maintenance</th>
                        <th>Finished at(date)</th>
                        <th>Total Time</th>
                        <th>maintenance type</th>
                        <th>Maintenance Status</th>
                    </tr>
                    <tr>
                        <th colspan="9"></th>
                        <th>Material cost</th>
                        <th>Labour Cost</th>
                        <th>Total</th>
                        <th colspan="4"></th>
                    </tr>
                    @forelse ($maintenances as $maintenance )
                        <tr>
                            <td>{{ $maintenance->assigned_mechanic }}</td>
                            <td>{{ $maintenance->vehicle_type }}</td>
                            <td>{{ $maintenance->license_number  }}</td>
                            <td>{{ $maintenance->kiloMeter_reading }}</td>
                            <td colspan="2">{{ $maintenance->issues }}</td>
                            <td>{{ $maintenance->starting_date }}</td>
                            <td colspan="2">{{ $maintenance->fixed_issues }}</td>
                            <td>{{ $maintenance->material_expense }}</td>
                            <td>{{ $maintenance->Labor_expense }}</td>
                            <td>{{ $maintenance->Total_expense }}</td>
                            <td>{{ $maintenance->finished_date }}</td>
                            <td>{{ $maintenance->Total_time }}/days</td>
                            <td>{{ $maintenance->maintenance_type }}</td>
                            <td>{{ $maintenance->maintenance_status }}</td>
                            @if ( $maintenance->maintenance_status == 'Mechanic_Completed')
                               
                            @else
                            <td>
                                <a href="/MaintenanceAuth/{{ $maintenance->id }}/Assign"
                                    class="btn btn-primary btn-sm"
                                    role="button">
                                    Edit
                                </a>
                                <a href="{{ route('mech.completed',$maintenance->id) }}"
                                    class="btn btn-success my-2 btn-sm">
                                Completed</a>
                            </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="16">No Request has been sent .</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection