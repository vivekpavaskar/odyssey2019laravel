@extends('dashboard.master')
@section('content')
<div class="row">
    @if (count($events)>0)
    @foreach ($events as $e)
    {{-- card --}}
    <div class="col-xl-4 col-lg-6">
        <div class="card card-stats shadow mb-5 mb-xl-5 pt-3 pb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Department of {{ $e->dept }}</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $e->ecode }} - {{ $e->event }}</span>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    @if ($e->type == "Solo")
                    <form action="/registerEventSolo/{{ $e->id }}" method="post">
                        @csrf
                        <span class="text-blue font-weight-900">Event Type: </span>
                        <span class="text-S mr-2 text-danger font-weight-900"> &nbsp;&nbsp;{{ $e->type }}</span>
                        <input type="submit" value="Register" class="btn btn-success">
                    </form>
                    @else
                    <form>
                        <span class="text-blue font-weight-900">Event Type: </span>
                        <span class="text-S mr-2 text-danger font-weight-900"> &nbsp;&nbsp;{{ $e->type }}</span>
                        <a href="/registerEvent/{{ $e->id }}" class="btn btn-success"> Register </a>
                    </form>
                    @endif
                </p>
            </div>
        </div>
    </div>
    {{-- card end --}}
    @endforeach
    @else
    <div class="col-xl-4 col-lg-6">
        <div class="card card-stats shadow mb-5 mb-xl-5 pt-3 pb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0"></h5>
                        <span class="h2 font-weight-bold mb-0">No Events Yet!!!!!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
