<!DOCTYPE html>
<html>
    <head>
        <title>Dispaly</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
    </head>
    <body>
    <div class="div_back"></div>
    <div>
        <h1>User Display</h1>
        <button type="button" class="bton bton1" onclick="window.location.href='{{route('adduser')}}'" style="margin-right:5cm">Add New</button>
        <div class="container" style="margin-left: 10cm">
            <div class="row">
                <div class="col-6">
                    <table class="table table-bordered table striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                        </tr>
                        @foreach ($data as $id => $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->city}}</td>
                            <td><button class="Update-btn"onclick="window.location.href='{{ route('update',$user->id) }}'">Update</button></td>
                            <td><button class="delete-btn"  onclick="window.location.href='{{ route('delete',$user->id) }}'">Delete</button></td>
                        </tr>
                        @endforeach 
                    </table>
                </div>

            </div>
        </div>
    </div>
</body>
</html>