<!DOCTYPE html>
<html>
<head>
    <style>
        /* Embedded CSS */
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
    background:#BD3E30;
    overflow: hidden;
    border-radius:10px;
}

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 19px 19px; 
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.navbar a:hover {
    background-color: #D8B5D2;
}
        table {
            border-collapse: collapse;
            width: 200%;
            padding: 15px;
            
            max-width: 600px;
            margin: 10px auto;
            border: 2px solid #ccc;
            border-radius:10px;
            
        }

        th, td {
            border: 1px solid #ccc;
            padding: 15px;
            width: 90px;
            text-align: left;
            border-radius:10px;
            
        }

        th {
            background-color: #333;
            color: white;
            
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Students</a>
        <a href="/teacher">Teachers</a>
        <a href="/courses">Courses</a>
        <a href="/">View All Students</a>
        <a href="/studentform">Add a student</a>
    </div>

   

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Address</th>
            <th>Course</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($stu as $st)
        <tr>
            <td>{{$st->id}}</td>
            <td>{{$st->name}}</td>
            <td>{{$st->dob}}</td>
            <td>{{$st->age}}</td>
            <td>{{$st->address}}</td>
            <td>{{$st->course}}</td>
            <td>{{$st->email}}</td>
            <td>{{$st->mobile}}</td>
            <td><a href="edit/{{$st->id}}">Edit</a></td>
            <td><a href="delete/{{$st->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
