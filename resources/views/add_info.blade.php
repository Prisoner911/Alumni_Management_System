<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="frontend/css/add_info.css">
    <title>add info</title>
</head>
<body>
    @if (session('success'))
        <script>
            alert("{{ session('success')}}")
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("{{ session('error')}}")
        </script>
    @endif
    <div class="mainBody">
        <div class="formDiv">
            <h2>Fill Student Details</h2>
            <form action="{{ route('childStudentInfo_submit')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="roll_no" class="form-label">Roll No.</label>
                  <input type="text" class="form-control" id="roll_no" name="roll_no">
                </div>
                <div class="mb-3">
                  <label for="pr_no" class="form-label">PR No.</label>
                  <input type="text" class="form-control" id="pr_no" name="pr_no">
                </div>
                <div class="mb-3">
                    <label for="std_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="std_name" name="std_name">
                </div>
                <div class="mb-3">
                    <label for="ph_no" class="form-label">Phone No.</label>
                    <input type="text" class="form-control" id="ph_no" name="ph_no" maxlength="10">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alumni Status</label><br>
                    <label><input type="radio" name="alumni_status" value="yes"> Is Alumni</label><br>
                    <label><input type="radio" name="alumni_status" value="no"> Is Not an Alumni</label>
                </div>
                <div class="mb-3">
                    <label for="current_status" class="form-label">Current Status</label>
                    <input type="text" class="form-control" id="current_status" name="current_status">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>
</html>
