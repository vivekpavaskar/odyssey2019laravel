@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total Registrations</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $counts }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Confirmed Registrations</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $confirmed }}</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Page visits</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Event Code</th>
                            <th scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $c=1
                        @endphp
                        @if (count($participants)>0)
                        @foreach ($participants as $p)
                        <tr>
                            <th scope="row">{{ $c }}</th>
                            <td>{{ $p->fname }} {{ $p->lname }}</td>
                            <td>{{ $p->mobile }}</td>
                            <td>{{ $p->ecode }}</td>
                            <td>{{ $p->payment }}</td>
                        </tr>
                        @php
                            $c++
                        @endphp
                        @endforeach
                        @else
                        No Participants Yet!!
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
