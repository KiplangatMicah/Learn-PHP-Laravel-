<div>
    <h1>List Of Students</h1>
    <form action="search" method="get">
        <input type="text" name="search" value="{{ @$search }}">
        <button>Search</button>
    </form>

    <form action="delete-Multi" method="get">
        @csrf

        <button>Delete</button>
    <table border="1">
        <thead>
            <tr>
                <th>Selections</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->created_at }}</td>
                <td>
                     <a href="{{ 'delete/'.$student->id }}">Delete</a>
                     <a href="{{ 'edit/'.$student->id }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
</div>

