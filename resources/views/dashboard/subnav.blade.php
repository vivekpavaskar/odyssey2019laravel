<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
    <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Welcome!</h6>
    </div>
    <a href="/changePassword" class="dropdown-item">
        <i class="ni ni-key-25"></i>
        <span>Change Password</span>
    {{-- <div class="dropdown-divider"></div> --}}
    <a href="#" class="dropdown-item" onclick="document.getElementById('logoutform').submit();">
        <i class="ni ni-user-run"></i>
        <span>Logout</span>
    </a>
    <form action="/logout" method="post" id="logoutform">
    @csrf
    </form>
</div>
