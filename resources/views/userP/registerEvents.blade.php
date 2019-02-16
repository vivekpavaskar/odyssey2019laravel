@extends('dashboard.master')
@section('content')
<div class="row">
    @for ($i = 1; $i < 10; $i++)

    {{-- card --}}
    <div class="col-xl-4 col-lg-6">
        <div class="card card-stats shadow mb-5 mb-xl-5 pt-3 pb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Department</h5>
                        <span class="h2 font-weight-bold mb-0">Event name</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card end --}}
    @endfor
</div>
@endsection
