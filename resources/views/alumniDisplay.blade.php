<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <title>Students - Alumni Management System</title>
    <link rel="stylesheet" href="{{asset('frontend/css/students.css')}}" />
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
            <li><a href="#">Alumni</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main class="container std-table">
      <!-- Student Table -->
      <section class="table-section">
        <div class="upperSection">
            <h2>Alumni List</h2>
        </div>

        <form action="{{route('search_alumni')}}" method="GET" class="searchForm">
            <div class="input-group mb-3">
                <input
                    type="text"
                    id="searchInput"
                    name="query"
                    class="form-control"
                    placeholder="🔍 Search alumni..."
                    aria-label="Search alumni"
                    {{-- onkeyup="liveSearch()" --}}
                >
                <button class="btn btn-outline-primary searchBtn" type="submit">Search</button>
            </div>
        </form>

        <table>
          <thead>
            <tr>
              <th>Roll No</th>
              <th>Name</th>
              <th>Phone No</th>
              <th>Is Alumni</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Sample Row -->
        @foreach ($alumni as $alumnus)
            <tr class="TableBody">
                <td>{{ $alumnus->roll_no }}</td>
                <td>{{ $alumnus->name }}</td>
                <td>{{ $alumnus->ph_no}}</td>
                <td>{{ strtoupper($alumnus->is_alumni) }}</td>
                <td><a href="{{route('show_details', ['id' => $alumnus->roll_no])}}" style="padding: 0; margin: 0;"><button type="button" class="btn btn-info">View more</button></a></td>
            </tr>
        @endforeach
            <!-- Add more rows here -->
          </tbody>
        </table>
        @php
        $paginator = $alumni;

       @endphp
       <div class="paginationCenter">
        <nav aria-label="Page navigation example">
            <ul class="pagination">

              @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
              @else
                <li class="page-item">
                  <a class="page-link" href="{{ $paginator->previousPageUrl() }}&search={{ request('search') }}">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="{{ $paginator->url($paginator->currentPage() - 1) }}&search={{ request('search') }}">{{ $paginator->currentPage() - 1 }}</a>
                </li>
              @endif

              <li class="page-item active">
                <a class="page-link" href="#">{{ $paginator->currentPage() }}</a>
              </li>

              @if ($paginator->currentPage() == $paginator->lastPage())
                <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
              @else
                <li class="page-item">
                  <a class="page-link" href="{{ $paginator->nextPageUrl() }}&search={{ request('search') }}">{{ $paginator->currentPage() + 1 }}</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item">
                  <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}&search={{ request('search') }}">{{ $paginator->lastPage() }}</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="{{ $paginator->nextPageUrl() }}&search={{ request('search') }}">Next</a>
                </li>
              @endif

            </ul>
          </nav>

       </div>
      </section>
    </main>

    <footer>
      <p>&copy; 2025 College Alumni Management</p>
    </footer>

    {{-- <script>
      function liveSearch() {
        const input = document.getElementById("searchInput");
        const filter = input.value.toLowerCase();
        const table = document.querySelector("table");
        const trs = table.getElementsByTagName("tr");

        for (let i = 1; i < trs.length; i++) {
          const rowText = trs[i].innerText.toLowerCase();
          trs[i].style.display = rowText.includes(filter) ? "" : "none";
        }
      }
    </script> --}}
  </body>
</html>
