<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <title>Student Information Form</title>
    <link rel="stylesheet" href="{{asset('frontend/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/students.css')}}">
</head>
<body>
    <header>
        <div class="container header">
          <div class="logo">
            <img src="{{asset('frontend/images/logo.png')}}" alt="Logo" />
          </div>
          <nav>
            <ul>
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('show_students')}}">Students</a></li>
              <li><a href="{{route('show_alumni')}}">Alumni</a></li>
            </ul>
          </nav>
        </div>
      </header>

    <h2>Student Information Form</h2>
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

    <div class="centeringDiv">
        <form action="{{ route('update_details') }}" method="POST" class="addform">
            @csrf
            <div class="row g-4">
                <div class="col-md-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="std_name" required value="{{ $student->name }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Roll No</label>
                    <input type="text" class="form-control" readonly name="roll_no" required value="{{ $student->roll_no }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">PR No</label>
                    <input type="text" class="form-control" name="pr_no" required value="{{ $student->pr_no }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Course</label>
                    <input type="text" class="form-control" name="course" required value="{{ $student->course }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Phone No</label>
                    <input type="text" class="form-control" name="ph_no" maxlength="10" required value="{{ $student->ph_no }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="std_email" required value="{{ $student->email }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="2" required>{{ $student->address }}</textarea>
                </div>

                <div class="col-md-3">
                    <label class="form-label">10th School Name</label>
                    <input type="text" class="form-control" name="school_10th_name" required value="{{ $student->school_10th_name }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">10th School Address</label>
                    <textarea class="form-control" name="school_10th_address" rows="2" required>{{ $student->school_10th_address }}</textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label">10th Percentage</label>
                    <input type="number" step="0.01" class="form-control" name="school_10th_percentage" required value="{{ $student->school_10th_percentage }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">12th School Name</label>
                    <input type="text" class="form-control" name="school_12th_name" required value="{{ $student->school_12th_name }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">12th School Address</label>
                    <textarea class="form-control" name="school_12th_address" rows="2" required>{{ $student->school_12th_address }}</textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label">12th Percentage</label>
                    <input type="number" step="0.01" class="form-control" name="school_12th_percentage" required value="{{ $student->school_12th_percentage }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Bachelor's College Name</label>
                    <input type="text" class="form-control" name="bachelor_college_name" required value="{{ $student->bachelor_college_name }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Bachelor's College Address</label>
                    <textarea class="form-control" name="bachelor_college_address" rows="2" required>{{ $student->bachelor_college_address }}</textarea>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Bachelor's Percentage</label>
                    <input type="number" step="0.01" class="form-control" name="bachelor_percentage" required value="{{ $student->bachelor_percentage }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Final Year Passed</label>
                    <input type="text" class="form-control" name="final_year_passed" required value="{{ $student->final_year_passed }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Current Status</label>
                    <input type="text" class="form-control" name="current_status" required  value="{{ $student->current_status }}">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Alumni Status</label>
                    <input type="text" class="form-control" name="is_alumni" required value="{{ $student->is_alumni }}">
                </div>

                <div class="col-12 text-end" style="display: flex; justify-content: center;">
                    <button type="submit" class="btn btn-primary px-5">Update</button>
                </div>
            </div>
        </form>
    </div>



</body>
</html>
