@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-11 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Team Registration</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="/registerEventTeam/{{ $id }}" method="POST">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Enter Names with USN
                                        separated by commas (ex: John Doe 2XX00XX000)</label>
                                    <textarea name="team" id="" cols="30" rows="10" class="form-control form-control-alternative" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-success pl-5 pr-5">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
