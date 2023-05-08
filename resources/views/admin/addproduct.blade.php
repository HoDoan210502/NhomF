@extends('adminlayout')
@section('admincontent')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Add Product
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{URL::to('/saveproduct')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product's Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product's Name" name="productname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product's Price</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product's Price" name="productprice">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select name="productstatus" class="form-control m-bot15">
                            <option value="0">Show</option>
                            <option value="1">Hide</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product's Description</label>
                        <textarea type="password" rows="8" class="form-control" id="exampleInputPassword1" placeholder="Description" name="productdesc"></textarea>
                    </div>

                    <button type="submit" name="addproduct" class="btn btn-info">Add Product</button>
                </form>
            </div>

        </div>
    </section>
</div>
@endsection