@extends("layout")
@section("content")



    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <form action="{{ route("storeContact") }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" name="fn" placeholder="FirstName">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="ln" placeholder="Last Name">
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="national_code" placeholder="National Code">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <textarea name="address" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-success">Save</button>

                </form>


            </div>

        </div>

    </div>



@endsection
