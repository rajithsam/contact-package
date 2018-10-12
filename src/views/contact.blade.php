<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            * {box-sizing: border-box;}

            input[type=text], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
    </style>

</head>

<body>

    <div class="container">

        <h3>Contact Form</h3>

    <form action="{{route('contact')}}" method="post">

            <label for="fname">Name*</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Your valid Email..">

            <label for="phoneNumber">Phone Number*</label>
            <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Your Contact Number.." required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Query.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>

    </div>
</body>
</html>
