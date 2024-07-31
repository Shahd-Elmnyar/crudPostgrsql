<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                User Create
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp">
                        @error('name')<p class="text-danger">{{$message}}</p>@enderror <div id="NameHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="Email" class="form-control" id="exampleInputEmail1" aria-describedby="EmailHelp">
                        @error('email')<p class="text-danger">{{$message}}</p>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        @error('password')<p class="text-danger">{{$message}}</p>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
