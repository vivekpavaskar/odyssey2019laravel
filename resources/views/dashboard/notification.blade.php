@if (session('success'))
<div class="alert alert-success" role="alert" onclick="this.style.display='none'">
    <strong>Success!</strong> - {{ session('success') }}
</div>
@endif
{{-- 
@if ($errors)
<div class="alert alert-danger" role="alert">
    <strong>Danger!</strong> This is a danger alert—check it out!
</div>
@endif --}}
