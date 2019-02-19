@if (session('success'))
<div class="alert alert-success" role="alert" onclick="this.style.display='none'">
    <strong>Success!</strong> - {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert" onclick="this.style.display='none'">
    <strong>Error!</strong> - {{ session('error') }}
</div>
@endif
