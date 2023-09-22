<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="row d-flex justify-content-center align-items-center mt-5 pt-5">
            <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center border-bottom">Show Data</h5>
                    <p class="card-text">Nama : {{ $users->name }}</p>
                    <p class="card-text">Email : {{ $users->email }}</p>
                    <p class="card-text">Account : {{ $users->created_at->diffForHumans() }}</p>
                    <a href="/dashboard" class="btn btn-primary">Back</a>
                  </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>