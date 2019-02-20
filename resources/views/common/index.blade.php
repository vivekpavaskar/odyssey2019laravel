@extends('dashboard.master')
@section('content')
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
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($announcements)>0)
                        @foreach ($announcements as $a)
                        <tr>
                            <th scope="row">
                                {{ \Carbon\Carbon::parse($a->created_at)->diffForHumans() }}
                            </th>
                            <td>
                                {{ $a->eid }}
                            </td>
                            <td>
                                {{ $a->description }}
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
@endsection
