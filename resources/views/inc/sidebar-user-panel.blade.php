<!-- Sidebar user panel (optional) -->
@guest
@else
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="./../img/profile-boy.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="/user/profile" class="d-block">{{ Auth::user()->full_name }}</a>
        </div>
    </div>
@endguest