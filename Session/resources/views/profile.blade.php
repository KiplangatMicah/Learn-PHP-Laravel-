<div>
    <h1>Profile Page</h1>
    @if(session('name'))
        <h2>Welcome, {{ session('name') }}</h2>
    @else
        <h2>No User Found In this session <br><a href="loginn">Login</a></h2>
    @endif
</div>
<a href="logout">Logout</a>

{{ print_r(session('')) }}
