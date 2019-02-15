@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" onclick="this.style.display='none';">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span>
        <b> Error - </b> {{ $error }}
    </span>
</div>
@endforeach
@endif
@if (session('success'))
<div class="alert alert-success"  onclick="this.style.display='none';">
    <button type="button" aria-hidden="true" class="close">
        <i class="now-ui-icons ui-1_simple-remove"></i>
    </button>
    <span>
        <b> Success - </b> {{ session('success') }}
    </span>
</div>
@endif

{{--
@if (session('error'))
<div class="alert alert-danger" role="alert">
    <strong>{{ session('error') }}</strong>
</div>
@endif --}}
