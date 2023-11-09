<!DOCTYPE html>
<html>
<head>
    <style>
 /* Embedded CSS */
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
        <a href="/">View All Students</a>
    </div>

    <div class="form-container">
        <form action="/create" method="post">
        @csrf   
        <h1>Add new student here</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" maxlength="20" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" maxlength="10" required><br>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" maxlength="5" required><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" maxlength="100" required><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" maxlength="30" required><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" maxlength="40" required><br>

            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile" maxlength="12" required><br>

            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
