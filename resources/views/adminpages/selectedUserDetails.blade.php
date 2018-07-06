@extends('layouts.adminIndex')

@section('content')
 
               
    <div class="col-xl-12">
        <div class="card">
            @foreach($selected_user_details as $row)
            <div class="card-header" style="text-align: center;">{{$row['fname'].' '.$row['lname']}}</div>
            @endforeach
            
            <div style="margin-top: 10px; margin-right: 15px; margin-left: 15px;">
                @if(Session::has('success'))
                <div class="alert alert-success" style="display:inline-block; width: 90%;">
                    <p>{{Session::get('success')}}</p>
                </div>
                @endif
                <a href="{{action('SystemUsersController@block_selected_user',$id)}}">
                <button type="button" class="btn btn-outline-primary" id="block-user">Block User</button>
                </a>
            </div>

            <!--.card-header -->
            <div class="card-body">

  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Accounts Owned</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact List</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Transactions Performed</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <hr>
                <h5>Accounts Owned</h5>
                <hr>

            <!-- Accounts owned table-->
                <table width="100%" class="table table-striped table-bordered able-hover" id="dataTables-example2">
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
    </div>

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
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
                            <button type="button" class="btn btn-outline-primary">Accounts Owned</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                                            
                    </tbody>
                </table>
                <!-- /.table-responsive -->

    </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <!-- /.table-responsive -->
                <hr>
                <h5>Transactions Performed</h5>
                <hr>

                 <!-- Contact list table-->
                <table width="100%" class="table table-striped table-bordered able-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Sent to</th>
                        <th>Recipient Name</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($selected_user_transactions as $row)
                    <tr>
                        <td>{{$row->account_number}}</td>
                        <td>{{$row->fname}}&nbsp&nbsp{{$row->lname}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$row->created_at}}</td>
                    </tr>
                    @endforeach
                                 
                    </tbody>
                </table>
                <!-- /.table-responsive -->
        </div>
     
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-xl-12 -->
</div>

<!--/ Accounts owned table -->


@endsection