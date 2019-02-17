@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">New Coordinator</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="/newCoordinator">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Coordinator Details</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Email</label>
                                    <input name="email" type="email" id="input-username" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Password</label>
                                    <input name="password" type="text" id="input-first-name" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">First Name</label>
                                    <input name="fname" type="text" id="input-first-name" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Last Name</label>
                                    <input name="lname" type="text" id="input-first-name" class="form-control form-control-alternative"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Event</label>
                                    <select name="acctype" class="form-control form-control-alternative" required>
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
                        <h3 class="mb-0">Coordinators</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Event</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($coord)>0)
                        @foreach ($coord as $c)
                        <tr>
                            <th scope="row">{{ $c->fname }} {{ $c->lname }}</th>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->acctype }}</td>
                            <td>
                                <form action="/deleteCoordinator/{{ $c->id }}" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-danger m-0 p-2" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        No Coordinators Found!!!
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
