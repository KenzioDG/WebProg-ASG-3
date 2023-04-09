<!DOCTYPE html>
<html>
<head>
    <title>Intro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .intro {
            background-color: #0077b6;
            color: #f0f9ff;
            padding: 50px;
            margin-bottom: 50px;
        }

        .intro h1 {
            font-size: 48px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .intro p {
            font-size: 24px;
            font-weight: 400;
            margin-top: 0;
        }

        .btn-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        text-align: center; /* added line */
        }

        .btn {
        background-color: #caf0f8;
        color: #0077b6;
        padding: 10%% 10%;
        font-size:  ;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 10%;
        transition: background-color 0.2s ease;
        cursor: pointer;
        margin: auto; /* added line */
        }

        .btn:hover {
            background-color: #0077b6;
            color: #f0f9ff;
        }
    </style>
</head>
<body>
    <div class="intro">
        <div class="container">
            <h1>Welcome</h1>
            <p>In this page you are able to see your scores and the subjects you are enrolled in.</p>
            <p>This is my webpage which uses the functionality of:</p>
            This uses:
            <li>Seeder</li>
            <li>Factory</li>
            <li>one-to-many</li>
        </div>
    </div>

    <div class="container btn-container">
        <a href="{{ route('students.index') }}" class="btn">View Student Scores</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
