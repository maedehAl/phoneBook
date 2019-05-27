@extends("layout")
@section("content")



    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <form action="{{ route("updateContact",$contact['id']) }}" method="post">

                    <input type="hidden" name="_method" value="put">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['fn']}}" name="fn" placeholder="FirstName">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['ln']}}" name="ln" placeholder="Last Name">
                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['mobile']}}" name="mobile" placeholder="Mobile">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['email']}}" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['national_code']}}" name="national_code" placeholder="National Code">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$contact['phone']}}" name="phone" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <textarea name="address" cols="30" rows="10" class="form-control">{{$contact['address']}}</textarea>
                    </div>

                    <button class="btn btn-success">Edit</button>

                </form>


            </div>

        </div>

    </div>



@endsection
