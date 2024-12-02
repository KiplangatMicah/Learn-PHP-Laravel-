<div>
    <h1>Add User</h1>
    @if(session('message'))
    <span class="success-message">{{ session('message') }}</span>
    @endif

    @if(session('name'))
        {{ session()->keep(['name']) }}
    @endif
    <form action="addUser" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter Your Name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter Your email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter Your numeber">
        <br>
        <br>
        <button type="submit">Add User</button>
    </form>
</div>

<style>
    .success-message{
        background-color: green;
        padding: 2px 20px;
        margin-bottom: 20px;
        display: inline-block;
        border-radius: 2px;

    }
</style>
