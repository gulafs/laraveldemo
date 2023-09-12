<!DOCTYPE html>
<html>
    <head>
        <title>Mumbai Users</title>
    </head>
</html>
<body>
    <h1>Users who live in Mumbai</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>City</th>
                <th>Salary</th>
                <th>Joining Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mumbaiUser as $user)
                <tr>
                    <td>{{ ($user['name']) }}</td>
                    <td>{{ ($user['mobile']) }}</td>
                    <td>{{ ($user['email']) }}</td>
                    <td>{{ ($user['city'] )}}</td>
                    <td>{{ ($user['salary']) }}</td>
                    <td>{{ ($user['joining_date']) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
