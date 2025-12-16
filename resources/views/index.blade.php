<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Welcome to the Index Page</h1>
        <p>This is a sample Blade template using Bootstrap for styling.</p>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">
                    <input type="text" class="form-control" name="name">
                </label>
                <label class="form-label" for="gender">
                    <select class="form-select" name="gender" id="gender">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
                <label class="form-label" for="address">
                    <input type="text" class="form-control" name="address">
                </label>
            </div>
            <button class="btn btn-primary">save</button>
        </form>
    </div>
</body>
</html>