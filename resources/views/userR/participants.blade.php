@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Participants</h3>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Event Code</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($participants)>0)
                        @foreach ($participants as $p)
                        <tr>
                            <th scope="row">
                                {{ $p->created_at }}
                            </th>
                            <td>
                                {{ $p->fname }} {{ $p->lname }}
                            </td>
                            <td>
                                {{ $p->mobile }}
                            </td>
                            <td>
                                {{ $p->ecode }}
                            </td>
                            <td>
                                {{ $p->payment }}
                            </td>
                            <td>
                                @if ($p->payment == "Paid")
                                <input type="submit" value="{{ $p->id }}" class="btn btn-success" disabled>
                                @else
                                <form action="/payment/{{ $p->id }}" method="post">
                                    @csrf
                                    <input type="submit" value="{{ $p->id }}" class="btn btn-success">
                                </form>
                                @endif

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
