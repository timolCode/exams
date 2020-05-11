<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration::Online Post Junior Secondary School Ezamination</title>
</head>
<body>
    <p> <strong> Welcome! Please register your details here!</strong></p>
    <p>All fields are required</p>

    <form action="register.php" method="post">
    <p> <label>First Name</label> <br>
        <input type="text" name="fname"  placeholder="First Name" required>
    </p>
    
    <p> <label>Last Name</label> <br>
        <input type="text" name="lname"  placeholder="last Name" reguired>
    </p>
    <p> <label>e-maill Address</label> <br>
        <input type="text" name="email"  placeholder="xyz@..." required>
    </p>
    
    <p> <label>Gender</label> <br>
        <select name="gender" id="">
        <option> Choose a Gender </option>
        <option> Male </option>
        <option> Female </option>
        </select>
    </option>

    <p> <label>Junior Secondary School Attended</label> <br>
        <select name="jschool" >
        <option> Select a School attended </option>
        <option> Maigida Junior Secondary School, Ilorin </option>
        <option> Abdulsalam Junior School, Offa </option>
        <option> Community Junior Secondary School, Ilorin </option>
        </select>
    </p>
    <p> <label>Password</label> <br>
        <input type="password" name="pass"  placeholder="password" required>
    </p>


    <button type="submit">Register </button>
    </form>
</body>
</html>