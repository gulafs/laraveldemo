<!DOCTYPE html>
<html>
<head>
    <title>User Salary</title>
</head>
<body>
    <h1>Users Sorted by Salary </h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>City</th>
                <th>Salary</th>
                <th>Joining Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Usersalary as $user)
                <tr>
                    <td>{{ ($user['name']) }}</td>
                    <td>{{($user['email'])}}</td>
                    <td>{{($user['mobile'])}}</td>
                    <td>{{ ($user['city'] )}}</td>
                    <td>{{ ($user['salary']) }}</td>
                    <td>{{ ($user['joining_date']) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
