@extends('layouts.adminIndex')

@section('content')

 <!-- Contact list table-->               
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">System Users</div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table width="100%" class="table table-striped table-bordered" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Country</th>
                                    <th>Email</th>
                                    <th>More Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_system_users_from_db as $row)
                                <tr>
                                    <td>{{$row['fname']}}</td>
                                    <td>{{$row['lname']}}</td>
                                    <td>{{$row['phonenumber']}}</td>
                                    <td>{{$row['country']}}</td>
                                    <td>{{$row['email']}}</td>
                                    <td><a href="{{action('SystemUsersController@get_all_details_for_selected_user',$row['id'])}}">
                                        <button type="button" class="btn btn-outline-primary">More Info</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                                        
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-xl-12 -->

            <!--/ Contact list table -->
               
                

@endsection