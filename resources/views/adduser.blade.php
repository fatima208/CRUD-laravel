<!DOCTYPE html>
<html>
    <head>
        <title>Add User</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="div_back">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h1>Add User</h1>
                        <form action="{{route('add')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label> 
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>   
                                <input type="text" class="form-control" name="age">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <button type="submit" class="btn btn-primary" style="position: relative; margin-top:0.5cm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </body></html>