<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>How to Upload Files with Drag 'n' Drop and Image preview in Laravel 8 using dropzone</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        body {
            background-color: #EDF7EF
        }

    </style>

</head>
<body>
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Laravel 8 File Upload </h2>
                <a class="btn btn-success" href="{{ route('files.create') }}" title="Upload files"> <i class="fas fa-upload fa-2x"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="container">
        <table class="table table-bordered table-responsive-lg thead-dark text-center">
            <thead class="thead-dark ">
                <tr>
                    <th>No</th>
                    <th>File Name</th>
                    <th>Date Created</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($files as $project)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $project->filename }}</td>
                    <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                    <td>
                        <form action="{{ route('files.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>

                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

   
</body>
</html>
