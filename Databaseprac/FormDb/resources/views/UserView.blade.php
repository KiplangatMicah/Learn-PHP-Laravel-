<div>
    <h1>User Lists</h1>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
        </tr>
        @endforeach
    </table>
</div>
