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
        <a href="/teacher">View All Teachers</a>
    </div>

    <div class="form-container">
        <form action="/insert-teacher" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" maxlength="30" required><br>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" maxlength="30" required><br>

            <label for="qualification">Qualification:</label>
            <input type="text" id="qualification" name="qualification" maxlength="10" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" maxlength="40" required><br>

            <label for="exp">Experience:</label>
            <input type="text" id="exp" name="exp" maxlength="10" required><br>

            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" maxlength="10" required><br>

            <button type="submit">Add Teacher</button>
        </form>
    </div>
</body>
</html>
