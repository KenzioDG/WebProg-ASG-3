<!DOCTYPE html>
<html>
<head>
    <title>Student Scores</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #0077b6;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        th, td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #0077b6;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Scores</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Score</th>
                <th>Subjects</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->score }}</td>
                    <td>
                        <ul>
                            @foreach ($student->subjects as $subject)
                                <li>{{ $subject->name }} ({{ $subject->score }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
