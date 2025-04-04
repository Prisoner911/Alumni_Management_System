<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="{{route('childStudentInfo_submit')}}" method="POST">
        @csrf
        {{-- <label for="user_id">User ID:</label>
        <input type="number" name="user_id" required> --}}

        <label for="std_name">Name:</label>
        <input type="text" name="std_name" required>

        <label for="roll_no">Roll No:</label>
        <input type="text" name="roll_no" required>

        <label for="pr_no">PR No:</label>
        <input type="text" name="pr_no" required>

        <label for="ph_no">Phone No:</label>
        <input type="text" name="ph_no" required maxlength="10">

        <label for="std_email">Email:</label>
        <input type="email" name="std_email" required>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea>

        <label for="school_10th_name">10th School Name:</label>
        <input type="text" name="school_10th_name" required>

        <label for="school_10th_address">10th School Address:</label>
        <textarea name="school_10th_address" required></textarea>

        <label for="school_10th_percentage">10th Percentage:</label>
        <input type="number" step="0.01" name="school_10th_percentage" required>

        <label for="school_12th_name">12th School Name:</label>
        <input type="text" name="school_12th_name" required>

        <label for="school_12th_address">12th School Address:</label>
        <textarea name="school_12th_address" required></textarea>

        <label for="school_12th_percentage">12th Percentage:</label>
        <input type="number" step="0.01" name="school_12th_percentage" required>

        <label for="bachelor_college_name">Bachelor's College Name:</label>
        <input type="text" name="bachelor_college_name" required>

        <label for="bachelor_college_address">Bachelor's College Address:</label>
        <textarea name="bachelor_college_address" required></textarea>

        <label for="bachelor_percentage">Bachelor's Percentage:</label>
        <input type="number" step="0.01" name="bachelor_percentage" required>

        <label for="current_status">Current Status:</label>
        <input type="text" name="current_status" required>

        <label for="final_year_passed">Final Year Passed:</label>
        <input type="text" name="final_year_passed" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
