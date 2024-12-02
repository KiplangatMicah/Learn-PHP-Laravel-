<div>
    <h1>Log In Form</h1>
    <form action="login" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name"><br><br>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <button type="submit">Log In</button>
    </form>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
