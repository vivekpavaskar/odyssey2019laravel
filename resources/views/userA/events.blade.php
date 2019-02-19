@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">New Event</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="/newEvent">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Event Details</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Department</label>
                                    <select name="dept" class="form-control form-control-alternative" required>
                                        <option value="">Select</option>
                                        <option value="Computer Science And Engineering">CSE - Computer Science And
                                            Engineering</option>
                                        <option value="Electronics And Communication">EC - Electronics And
                                            Communication</option>
                                        <option value="Electronics And Electrical">EE - Electronics And Electrical</option>
                                        <option value="Mechanical Engineering">ME - Mechanical Engineering</option>
                                        <option value="Civil Engineering">CV - Civil Engineering</option>
                                        <option value="MCA">MCA</option>
                                        <option value="MBA">MBA</option>
                                        <option value="Cultural">Cultural</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Event Code</label>
                                    <input name="ecode" type="text" id="input-username" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Event Name</label>
                                    <input name="event" type="text" id="input-first-name" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Event Type</label>
                                    <div class="custom-control custom-radio mb-3">
                                        <input value="Solo" name="type" class="custom-control-input" id="customRadio5"
                                            type="radio" required>
                                        <label class="custom-control-label" for="customRadio5">Solo</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input value="Team" name="type" class="custom-control-input" id="customRadio6"
                                            type="radio" required>
                                        <label class="custom-control-label" for="customRadio6">Team</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <input type="submit" value="Add" class="btn btn-primary pl-5 pr-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0 mt-5">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">All Events</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Event Code</th>
                            <th scope="col">Event</th>
                            <th scope="col">Type</th>
                            <th scope="col">Department</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($events)>0)
                        @foreach ($events as $e)
                        <tr>
                            <th scope="row">{{ $e->ecode }}</th>
                            <td>{{ $e->event }}</td>
                            <td>{{ $e->type }}</td>
                            <td>{{ $e->dept }}</td>
                            <td>
                                <form action="/deleteEvent/{{ $e->id }}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger m-0 p-2" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        No Events Found!!!
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
