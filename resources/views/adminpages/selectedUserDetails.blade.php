@extends('layouts.adminIndex')

@section('content')

 
               
    <div class="col-xl-12">
        <div class="card">
            @foreach($selected_user_details as $row)
            <div class="card-header" style="text-align: center;">{{$row['fname'].' '.$row['lname']}}</div>
            @endforeach
            
            <div style="margin-top: 10px; margin-right: 15px; margin-left: 15px;">
                @if($message = Session::get('success'))
                <div class="alert alert-success" style="display:inline-block; width: 90%;">
                    <p>{{$message}}</p>
                </div>
                @endif
                <a href="{{action('SystemUsersController@block_selected_user',$id)}}">
                <button type="button" class="btn btn-outline-primary" id="block-user">Block User</button>
                </a>
            </div>

            <!--.card-header -->
            <div class="card-body">
                <hr>
                <h5>Accounts Owned</h5>
                <hr>

            <!-- Accounts owned table-->
                <table width="100%" class="table table-striped table-bordered able-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Account Name</th>
                        <th>Account Type</th>
                        <th>Account Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts_owned_by_selected_user as $row)
                    <tr>
                        <td>{{$row['account_name']}}</td>
                        <td>{{$row['account_type']}}</td>
                        <td>{{$row['account_number']}}</td>
                    </tr>
                    @endforeach
                                            
                    </tbody>
                </table>
                <!-- /.table-responsive -->
                <hr>
                <h5>Contact List</h5>
                <hr>

                 <!-- Contact list table-->
                <table width="100%" class="table table-striped table-bordered able-hover" id="dataTables-example">
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
                    @foreach($selected_user_contact_list as $row)
                    <tr>
                        <td>{{$row['fname']}}</td>
                        <td>{{$row['lname']}}</td>
                        <td>{{$row['phonenumber']}}</td>
                        <td>{{$row['country']}}</td>
                        <td>{{$row['email']}}</td>
                        <td><a href="{{action('SystemUsersController@get_all_accounts_for_selected_contact',$row['id'])}}">
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

<!--/ Accounts owned table -->


                       
                        
               
                

@endsection