<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Me</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid aqua;
            border-radius: .5rem;
            padding: 2rem 3rem;
        }

        .form > label {
            font-family: sans-serif;
            font-size: large;
            font-weight: 700;
        }

        label, input {
            margin-top: 1rem;
            font-size: 1.25rem;
            font-weight: 500;
            padding: 1.25rem 3rem;
            border-radius: .5rem;
            border: none;
        }
    </style>
</head>
<body>
    <h2>To hire my services, send a dscription of the Job</h2>
    <div class="form">
        <form action="">
            <label for="">Project Description</label><br>
            <input type="file" name="desc" id="desc"><br>
            <input type="submit" value="Send Email">
        </form>
    </div>
</body>
</html>