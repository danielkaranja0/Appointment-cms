@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ isset($appointment) ? 'Edit Appointment' : 'Create Appointment' }}</h2>
            <form action="{{ isset($appointment) ? route('appointments.update', $appointment->id) : route('appointments.store') }}" method="POST">
                @csrf
                @if (isset($appointment))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ isset($appointment) ? $appointment->title : '' }}" required>
                </div>
                <div class="form-group">
                    <label>Appointment Type</label>
                    <input type="text" name="appointment_type" class="form-control" value="{{ isset($appointment) ? $appointment->appointment_type : '' }}" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" value="{{ isset($appointment) ? $appointment->date : '' }}" required>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="time" name="time" class="form-control" value="{{ isset($appointment) ? $appointment->time : '' }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required>{{ isset($appointment) ? $appointment->description : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ isset($appointment) ? $appointment->phone_number : '' }}" required>
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($appointment) ? 'Update' : 'Create' }} Appointment</button>
            </form>
        </div>
    </div>
</div>
@endsection
