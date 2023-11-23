<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simpleCRUD/Update Post Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="row mx-0 px-0">
        <div class="col-md-12 mx-0 px-0">
            <nav class="navbar bg-warning">
                <div class="container-fluid">
                    <a class="text-center h1 text-light" style="text-decoration: none;" href="{{ route('allposts') }}">simpleCRUD</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid mx-0 px-0" style="min-height: 100vh;">
        <div class="row mx-0 px-0">
            <div class="col-md-1">
                <a href="{{ route('allposts') }}" class="btn btn-warning mt-1 p-1 float-end"><-Back</a>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-5"></div>
    </div>

    <div class="container mx-0 px-0">
        <div class="row mx-0 px-0">
            <div class="col-md-4"></div>
            <div class="col-md-6 border border-2 border-warning rounded p-2 m-2 center">
                <h3 class="text-center text-warning">Update Post</h3>
                @isset($post)
                    @foreach ($post as $p)
                    <form action="{{ route('updatePost') }}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $p->post_id }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $p->title }}" name="title" placeholder="Enter Post Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Summary</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $p->summary }}" name="summary" placeholder="Enter Post Summary">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter Post Description">{{ $p->description }}"</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning text-light">Update</button>
    
                    </form>
                    @endforeach
                @else
                    @php
                        abort(404);
                    @endphp
                @endisset
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>