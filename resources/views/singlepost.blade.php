<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simpleCRUD/Single Post</title>
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

    <div class="container-fluid mx-0 px-0 bg-secondary" style="min-height: 100vh;">
        <div class="row mx-0 px-0">
            <div class="col-md-1">
                <a href="{{ route('allposts') }}" class="btn btn-warning mt-1 p-1 float-end"><-Back</a>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-5"></div>
    </div>

        <div class="row m-2 px-0 border border-2 border-warning rounded">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @isset($post)
                    @forelse ($post as $p )
                    <p class="mx-1">
                        <b class="display-4 text-warning">Title: </b><span class="display-6 text-light ">{{ $p->title }}</span>
                    </p>
                    <p class="mx-1">
                        <b class="display-4 text-warning">Summary: </b><span class="display-6 text-light ">{{ $p->summary }}</span>
                    </p>
                    <p class="mx-1">
                        <b class="display-4 text-warning">Description: </b><span class="display-6 text-light ">{{ $p->description }}</span>
                    </p>
                    @empty
                        <p class="text-danger text-center display-1">
                            Invalid Post!!
                        </p>
                    @endforelse
                @endisset
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>