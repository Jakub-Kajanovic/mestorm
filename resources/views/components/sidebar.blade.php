<div class="sidebar">
    <div class="top">
        <div class="logo">
            <i class="bx bxl-codepen "></i>
            <span class=""><a href="/">Mestorm</a></span>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="user">
        <img src="{{ asset('images/logoSM.png') }}" alt="Logo of the company" class="user-img">
        <div>
            <p class="bold ">{{auth()->user()->name}}</p>
            <p class="">{{auth()->user()->email}}</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="#">
                <i class="bx bxs-grid-alt "></i>
                <span class="nav-item ">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{route('blog.index')}}">
                <i class="bx bxs-edit-alt "></i>
                <span class="nav-item ">Blog</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-user "></i>
                <span class="nav-item ">Users</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bx bx-envelope "></i>
                <span class="nav-item ">Emails</span>
            </a>
        </li>
    </ul>
</div>
<div class="main-content">
    <div class="container mx-auto">
        {{ $slot }}
    </div>
</div>
<script src="{{asset('js/sidebar.js')}}"></script>  