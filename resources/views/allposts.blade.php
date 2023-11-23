<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simpleCRUD/All Posts</title>
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

    <div class="row mx-0 px-0 mt-1">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @if(session('msg'))
                <div class="alert alert-{{ session('color', 'warning') }} alert-dismissible fade show" role="alert">
                    {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row mx-0 px-0 mt-1">
        <div class="col-md-2 mx-0 px-0">
            <a href="{{ route('addpost.form') }}" class="btn btn-primary text-center float-end">Add</a>
        </div>
        <div class="col-md-2 mx-0 px-0"></div>
        <div class="col-md-2 mx-0 px-0"></div>
        <div class="col-md-2 mx-0 px-0"></div>
        <div class="col-md-2 mx-0 px-0"></div>
        <div class="col-md-2 mx-0 px-0">
            <a href="{{ route('delete.all') }}" class="btn btn-danger text-center">Delete All</a>
        </div>
    </div>

    <div class="row mx-0 px-0">
        <div class="col-md-1"></div>
        <div class="col-md-10 mx-0 px-0">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Post Title</th>
                        <th>Post Summary</th>
                        <th>Post Description</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($posts)
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->post_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->summary }}</td>
                                <td>{{ $post->description }}</td>
                                <td><a class="btn btn-info" href="{{ route('view.post', $post->post_id ) }}">View</a></td>
                                <td><a href="{{ route('update.page', $post->post_id) }}" class="btn btn-success">Update</a></td>
                                <td><a class="btn btn-danger" href="{{ route('delete.post', $post->post_id) }}">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" align="center" class="h3 text-danger"> No Posts</td>
                            </tr>
                        @endforelse
                    @else
                        <tr>
                            <td colspan="8" align="center" class="h3 text-danger">No Posts</td>
                        </tr>
                    @endisset
                </tbody>
            </table>
            <div class="row mt-5 px-0">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="d-flex flex-column justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>