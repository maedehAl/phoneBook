@extends("layout")

@section("content")


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table">


                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Phone</th>
                            <th>National Code</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Creation Date</th>
                            <th>Modification Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($contacts as $contact)

                            <tr>

                                <td>{{ $contact['id'] }}</td>
                                <td>{{ $contact['fn'] }}</td>
                                <td>{{ $contact['ln'] }}</td>
                                <td>{{ $contact['mobile'] }}</td>
                                <td>{{ $contact['phone'] }}</td>
                                <td>{{ $contact['national_code'] }}</td>
                                <td>{{ $contact['address'] }}</td>
                                <td>{{ $contact['email'] }}</td>
                                <td>{{ $contact['created_at'] }}</td>
                                <td>{{ $contact['updated_at'] }}</td>
                                <td>

                                    <form action="{{route("destroyContact",$contact['id'])}}" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger">Delete</button>
                                        {{ csrf_field() }}
                                    </form>

                                    <form action="{{route("editContact",$contact['id'])}}" method="get">
                                        <button class="btn btn-primary">Edit</button>
                                    </form>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>


                </table>

            </div>
        </div>
    </div>


@endsection