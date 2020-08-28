@extends('product.layout')

@section('content')
    <br><br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Premix Phone House Product List</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('create.product')}}"> Create New Product</a>

        </div>

    </div>
</div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>
                {{$message}}
            </p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th width="150px"> Product Name </th>
            <th width="150px"> Product Code </th>
            <th width="200px"> Details </th>
            <th width="100px"> Product Image </th>
            <th width="280px"> Action </th>
        </tr>
        @foreach($product as $pro)
        <tr>

            <td> {{$pro->product_name}} </td>
            <td> {{$pro->product_code}} </td>
            <td> {{$pro->details}} </td>
            <td><img src="{{URL::to($pro->logo)}}" height="250px;" width="250px;"> </td>
            <td>    <a class="btn btn-info" href=""> Show </a>
                    <a class="btn btn-primary" href="{{URL::to('edit/product/'.$pro->id)}}"> Update </a>
                    <a class="btn btn-danger" href="{{URL::to('delete/product/'.$pro->id)}}"
                       onclick="return confirm('Are you sure this will permanently Delete your Data')"> Delete </a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
