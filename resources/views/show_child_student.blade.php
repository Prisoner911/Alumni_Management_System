<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="frontend/css/showChildStd.css">
    <title>Child DB Student Table</title>
</head>
<body>
    <div class="mainBody">
        <div class="tableDiv">
            <h1 style="text-align: center">Students Data inside Child Table</h1>
            <table class="studentTable">
                <tr class="TableHeaders">
                    <th>Roll No.</th>
                    <th>PR No.</th>
                    <th>Name</th>
                    <th>Alumni Status</th>
                </tr>
                @foreach ($students as $student)
                    <tr class="TableBody">
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->pr_no }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->alumni_status }}</td>
                    </tr>
                @endforeach
            </table>

            @php
             $paginator = $students;
            @endphp
            <div class="paginationCenter">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if ($paginator->onFirstPage())
                            <li class="page-item disabled"><a class="page-link" href="{{$paginator->previousPageUrl()}}">Previous</a></li>
                            <li class="page-item disabled"><a class="page-link" href="{{$paginator->previousPageUrl()}}">-</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="{{$paginator->previousPageUrl()}}">{{$paginator->currentPage()-1}}</a></li>
                        @endif


                      <li class="page-item "><a class="page-link currentPagePagination" href="{{$paginator->url($paginator->currentPage())}}">{{$paginator->currentPage()}}</a></li>

                      @if ($paginator->currentPage() == $paginator->lastPage())
                        <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">-</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                      @else
                        <li class="page-item"><a class="page-link" href="{{$paginator->nextPageUrl()}}">{{$paginator->currentPage() + 1}}</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="{{$paginator->url($paginator->lastPage())}}">{{$paginator->lastPage()}}</a></li>
                        <li class="page-item"><a class="page-link" href="{{$paginator->nextPageUrl()}}">Next</a></li>
                      @endif


                    </ul>
                  </nav>
            </div>

        </div>
    </div>
</body>
</html>
