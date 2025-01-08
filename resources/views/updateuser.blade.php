<!DOCTYPE html>
<html>
    <head>
        <title>Update User</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>

    </head>
    <body>
        <div class="div_back">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h1>Update User</h1>
                        <form action="{{route('updateuser',$data->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" value="{{$data->name}}" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label> 
                                <input type="email" value="{{$data->email}}" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>   
                                <input type="text" value="{{$data->age}}" class="form-control" name="age">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" value="{{$data->city}}" class="form-control" name="city">
                            </div>
                            <button type="submit"   class="btn btn-primary" style="position: relative; margin-top:0.5cm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </body></html>