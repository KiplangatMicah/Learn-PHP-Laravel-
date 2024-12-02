<div>
    <h1>Add Student</h1>
    <form action="{{ route('addStudent') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name" required><br><br>
        <input type="email" name="email" placeholder="Enter Your Email" required><br><br>
        <input type="text" name="phone" placeholder="Enter Your Phone" required><br><br>
        <button type="submit">Add Student</button>
    </form>
</div>

