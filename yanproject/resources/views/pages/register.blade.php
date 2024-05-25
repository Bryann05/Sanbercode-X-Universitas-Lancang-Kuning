<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>
        Buat Account Baru
    </h1>
    <h3>
        Sign Up Form
    </h3>
    <form method="post" action="/pages.welcome">
    @csrf
        <label>First Name:</label> <br> <br>
        <input type="text" name="firstname"> <br> <br>
        
        <label>Last Name:</label> <br> <br>
        <input type="text" name="lastname"> <br> <br>
        
        <label>Gender:</label> <br> <br>
        <input type="radio" value="1" name="gender">Male <br>
        <input type="radio" value="2" name="gender">Female <br>
        <input type="radio" value="3" name="gender">Other <br> <br>

        <label>Nationality:</label> <br> <br>
        <select name="nationality"> 
            <option value="1">Indonesia</option>
            <option value="2">Amerika</option>
            <option value="3">Inggris</option>
            <option value="4">Canada</option>
            <option value="5">Rusia</option>
        </select> <br> <br>

        <label>Language Spoken:</label> <br> <br>
        <input type="checkbox" value="1" name="language">Indonesia <br>
        <input type="checkbox" value="1" name="language">English <br>
        <input type="checkbox" value="1" name="language">Other <br> <br>

        <label>Bio:</label> <br> <br>
        <textarea name="bio" cols="25" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up" /> <br> <br/>
        <a href="/">Back</a>
    </form>
</body>
</html>