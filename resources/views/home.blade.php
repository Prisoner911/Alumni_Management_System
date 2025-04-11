<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Alumni Management System</title>
    <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="logo">
          <img src="{{asset('frontend/images/logo.png')}}" />
        </div>
        <h1>🎓 Goa University Alumni Management System</h1>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="{{route('show_students')}}">Students</a></li>
            <li><a href="{{route('show_alumni')}}">Alumni</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <!-- Features -->
    <section class="features">

      <div class="container">
        <a href="{{route('show_students')}}">
            <div class="feature-card">
                <h3>👨‍🎓 Student Management</h3>
                <p>Add, update, and manage all student records with ease.</p>
            </div>
        </a>
        <a href="{{route('show_alumni')}}">
            <div class="feature-card">
                <h3>🎉 Show Alumni</h3>
                <p>Identify and track graduated students and their achievements.</p>
            </div>
         </a>
      </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
          <p>&copy; 2025 College Alumni Management. All rights reserved.</p>
        </div>
      </footer>

  </body>
</html>
