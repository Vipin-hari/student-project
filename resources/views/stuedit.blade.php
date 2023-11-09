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
        <a href="#">Teachers</a>
        <a href="/courses">Courses</a>
        <a href="/">View All Students</a>
        <a href="/studentform">Add a student</a>
    </div>
    <div class="form-container">
       
        <form action="/update-stu/{{$student[0]->id}}" method="post">
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$student[0]->name}}" maxlength="30" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="text" id="dob" name="dob" value="{{$student[0]->dob}}" maxlength="10" required><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" value="{{$student[0]->age}}" maxlength="5" required><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{$student[0]->address}}" maxlength="100" required><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" value="{{$student[0]->course}}" maxlength="30" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="{{$student[0]->email}}" maxlength="40" required><br>

            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" value="{{$student[0]->mobile}}" maxlength="12" required><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
