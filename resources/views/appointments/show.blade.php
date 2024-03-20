@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Appointment Details</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Title</th>
                        <td>{{ $appointment->title }}</td>
                    </tr>
                    <tr>
                        <th>Appointment Type</th>
                        <td>{{ $appointment->appointment_type }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $appointment->date }}</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>{{ $appointment->time }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $appointment->description }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $appointment->phone_number }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
