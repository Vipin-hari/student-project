<!DOCTYPE html>
<html>
<head>
    <style>
    body {
    font-family: Arial, sans-serif;
   
}

.form-container {
    max-width: 500px;
    margin: 20px auto;
    padding: 20px;
    background-color: #70AE6E;
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
        <a href="/courses">View All Courses</a>
    </div>

    <div class="form-container">
        <form action="/addcourse" method="post">
            @csrf
            <h1>Add new Course</h1>
            <label for="cname">Course Name:</label>
            <input type="text" id="cname" name="cname" maxlength="20" required><br>

            <label for="language">Language:</label>
            <input type="text" id="language" name="language" maxlength="20" required><br>

            <label for="fees">Fees:</label>
            <input type="text" id="fees" name="fees" maxlength="10" required><br>

            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" maxlength="10" required><br>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" maxlength="100" required><br>

            <button type="submit">Add Course</button>
        </form>
    </div>
</body>
</html>
