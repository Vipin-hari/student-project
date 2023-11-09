<!DOCTYPE html>
<html>
<head>
    <style>
        /* Embedded CSS */
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
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
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/">Students</a>
        <a href="/teacher">Teachers</a>
        <a href="/courses">Courses</a>
        <a href="/teacher">View All Teachers</a>
        <a href="/add-teacher">Add a teacher</a>
    </div>
    <div class="form-container">
        <form action="/update-teacher/{{$teacher[0]->id}}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$teacher[0]->name}}" maxlength="30" required><br>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="{{$teacher[0]->position}}" maxlength="30" required><br>

            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" value="{{$teacher[0]->qualification}}" maxlength="10" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{$teacher[0]->email}}" maxlength="40" required><br>

            <label for="exp">Experience:</label>
            <input type="text" id="exp" name="exp" value="{{$teacher[0]->exp}}" maxlength="10" required><br>

            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" value="{{$teacher[0]->mobile}}" maxlength="10" required><br>

            <button type="submit">Update Teacher</button>
        </form>
    </div>
</body>
</html>
