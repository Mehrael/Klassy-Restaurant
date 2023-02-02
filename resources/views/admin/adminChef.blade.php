<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")


    <div class="container" style="position: relative; ">
        <br>
        <h1>Chefs</h1>
        <form action="{{url('/uploadChef')}}" method="post" enctype="multipart/form-data" style="width: 60%">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Name</label>
                    <input type="text" name="name" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Speciality</label>
                    <input type="text" name="speciality" class="form-control" id="validationDefault02" required>
                </div>
            </div>
            <div class="row-md-6 mb-3">
                <label for="validationDefault03">Image</label>
                <input type="file" name="image" class="form-control" id="validationDefault03" required>
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
        <br>
        <br>
        <div style="position: center; top: 60px; right: -60px; display: flex">
            <table class=" table-striped table-dark">
                <thead>
                <tr align="center">
                    <th style="padding: 30px" scope="col">#</th>
                    <th style="padding: 30px" scope="col">Name</th>
                    <th style="padding: 30px" scope="col">Speciality</th>
                    <th style="padding: 30px" scope="col">Image</th>
                    <th style="padding: 30px" scope="col">Actions</th>
                    <th style="padding: 30px" scope="col"></th>
                    <th style="padding: 30px" scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @php($id = 0)

                @foreach($data as $data)
                    @php($id++)
                    <tr align="center">
                        <th scope="row">{{$id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->speciality}}</td>
                        <td><img src="/chefImage/{{$data->image}}" height="200" width="200" alt="chef img"></td>
                        <td><a href="{{url('/deleteChef',$data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateChef',$data->id)}}">Update</a></td>
                        <td></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <br>
        </div>
        <br>
    </div>
    <br>
</div>

@include("admin.adminscript")
</body>
</html>
