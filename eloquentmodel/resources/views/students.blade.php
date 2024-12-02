<div>
    <h1>Students List</h1>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach ($data as $student )
        <tr>
            <td>{{ $student->Name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batch }}</td>
        </tr>

        @endforeach
    </table>
</div>
