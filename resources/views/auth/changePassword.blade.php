@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Update Password</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/changePassword">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>New Password</label>
                                <input name="password" type="password" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pr-5">
                            <input class="btn btn-primary" type="submit" value="Change Password">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
