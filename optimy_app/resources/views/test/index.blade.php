<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #555;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Data from the Test Table</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($tests as $test)
        <tr>
            <td>{{ $test->id }}</td>
            <td>{{ $test->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
