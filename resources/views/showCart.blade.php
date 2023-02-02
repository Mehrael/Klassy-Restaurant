@include('header')

<div align="center">

    <div id="top" style="width: 50%; height: 100%" align="center">
        <table class="table table-hover" align="center">
            <thead>
            <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Food name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            <form action="{{url('confirmOrder')}}" method="post">
                @csrf
            @php($i = 0)
            @foreach($data as $data)
                @php($i++)
                <tr align="center">
                    <th scope="row">{{$i}}</th>
                    <td>
                        <input type="text" name="foodName[]" value="{{$data->title}}" hidden="">
                        {{$data->title}}
                    </td>
                    <td>
                        <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                        {{$data->price}}
                    </td>
                    <td>
                        <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                        {{$data->quantity}}
                    </td>
                    <td><a href="{{url('/removeFromCart',$item_id[$i-1])}}">
                            <ion-icon name="bag-remove-outline"></ion-icon>
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div align="center">
            <button class="btn" style="background-color: #fb5849;" type="button" id="order">Order Now</button>
        </div>
        <br>
        <br>
        <div align="center" style="min-width: 100px; max-width: 500px; display: none" id="appear">

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Name</label>
                        <input type="text" name="name" class="form-control" id="validationDefault01" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Phone Number</label>
                        <input type="number" name="phone" class="form-control" id="validationDefault02" required>
                    </div>
                </div>
                <div class="row-md-6 mb-3">
                    <label for="validationDefault05">Address</label>
                    <input type="text" name="address" class="form-control" id="validationDefault05" required>
                </div>

                <input class="btn btn-success" type="submit" value="Confirm Order">
            <button id="close" type="button" class="btn btn-danger">Cancel</button>


        </div>

    </div>
    </form>
</div>

@include('footer')
