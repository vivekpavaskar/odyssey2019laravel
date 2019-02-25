@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Your Participations</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Reg No.</th>
                            <th scope="col">Event Code</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Team</th>
                            <th scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($participations)>0)
                        @foreach ($participations as $p)
                        <tr>
                            <th scope="row">
                                {{ sprintf("R-%04s",$p->id) }}
                            </th>
                            <td>
                                {{ $p->ecode }}
                            </td>
                            <td>
                                {{ $p->event }}
                            </td>
                            <td>
                                {{ $p->team }}
                            </td>
                            <td>
                                {{ $p->payment }}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        No Participations Yet!!
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
