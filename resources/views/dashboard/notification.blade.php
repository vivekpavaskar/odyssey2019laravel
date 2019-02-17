@if (session('success'))
<div class="alert alert-success" role="alert" onclick="this.style.display='none'">
    <strong>Success!</strong> - {{ session('success') }}
</div>
@endif
