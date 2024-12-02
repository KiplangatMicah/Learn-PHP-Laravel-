<div>
    <h1>EDIT STUDENTS</h1>

    <form action="/edit-student/{{ $data->id }}" method="post">


        <input type="hidden" name="_method" value="put">
        @csrf
        <input type="text" name="name" value="{{ $data->name }}"><br><br>
        <input type="text" name="email" value="{{ $data->email }}"><br><br>
       <input type="text" name="phone" value="{{ $data->phone }}"><br><br>


        <button type="submit">Update Student</button>
        <a href="/list">Cancel</a>
    </form>
</div>
