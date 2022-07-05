@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-end">
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
            <a href="#Maintenance" class="btn btn-outline-primary btn-sm" class>Maintenance Services</a>
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ Route('Leader.Report')}}'">Monthly Report</button>
        </div>
        <div class="text-center">
            <h2>
                Report
            </h2>
        </div>
        <div>
            <table>
                <thead>
                    <tr></tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection