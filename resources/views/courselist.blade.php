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
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
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
        <a href="/courses">View All Courses</a>
        <a href="/courseform">Add a Course</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Language</th>
            <th>Fees</th>
            <th>Duration</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->cname}}</td>
            <td>{{$course->language}}</td>
            <td>{{$course->fees}}</td>
            <td>{{$course->duration}}</td>
            <td>{{$course->description}}</td>
            <td><a href="edit-course/{{$course->id}}">Edit</a></td>
            <td><a href="delete-course/{{$course->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
