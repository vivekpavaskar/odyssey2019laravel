@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">New Announcement</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="/newAnnouncement">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Announcement Details</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Event</label>
                                    <select name="eid" class="form-control form-control-alternative" required>
                                        <option value="">Select</option>
                                        @if (count($events)>0)
                                        @foreach ($events as $e)
                                        <option value="{{ $e->ecode }}">{{ $e->ecode }} - {{ $e->event }}</option>
                                        @endforeach
                                        @else
                                        <option value="">No Events Added</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control form-control-alternative"></textarea>
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
@if (auth()->user()->acctype=='a')
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Announcements</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Event Code</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($announcements)>0)
                        @foreach ($announcements as $a)
                        <tr>
                            <th scope="row">
                                {{ $a->created_at }}
                            </th>
                            <td>
                                {{ $a->eid }}
                            </td>
                            <td>
                                {{ $a->description }}
                            </td>
                            <td>
                                <form action="/deleteAnnouncement/{{ $a->id }}" method="post">
                                    @csrf
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        No Announcements Yet!!
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endif
@endsection
