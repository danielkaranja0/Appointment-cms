@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Appointments</h2>
            <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-2">Create Appointment</a>
            @if ($appointments->isEmpty())
                <p>No appointments found.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Appointment Type</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Description</th>
                            <th>Phone Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->title }}</td>
                                <td>{{ $appointment->appointment_type }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->time }}</td>
                                <td>{{ $appointment->description }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>
                                    <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
