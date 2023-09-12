<!DOCTYPE html>
<html>
<head>
    <title>Users Joined This Week</title>
</head>
<body>
    <h1>Users Who Joined This Week</h1>
    <table>
        <div id="joinThisWeek"></div>
        <thead><tr>
            <th>Name</th>
            <th>City</th>
            <th>Salary</th>
            <th>Joing This Week</th>
        </tr></thead>
        <tbody>
            @foreach ($userthisWeek as $users )
            <tr>
                <td>
                    {{($users['name'])}}
                </td>
               <td>{{($users['city'])}}</td>
               <td>{{($users['salary'])}}</td>
               <td>{{($users['joining_date'])}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
