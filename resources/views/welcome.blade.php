<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin Panel - Input Test Results</h2>
    <form action="{{ route('submit-test-result') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="test_name">Test Name:</label>
            <input type="text" id="test_name" name="test_name" required>
        </div>
        <div class="form-group">
            <label for="test_id">Test ID:</label>
            <input type="text" id="test_id" name="test_id" required>
        </div>
        <div class="form-group">
            <label for="test_datetime">Test Date/Time:</label>
            <input type="datetime-local" id="test_datetime" name="test_datetime" required>
        </div>
        <div class="form-group">
            <label for="test_result">Test Result:</label>
            <select id="test_result" name="test_result" required>
                <option value="">Select Result</option>
                <option value="positive">Positive</option>
                <option value="negative">Negative</option>
            </select>
        </div>
        <div class="form-group">
            <label for="test_description">Description:</label>
            <textarea id="test_description" name="test_description" rows="4"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
