@extends('layouts.adminIndex')

@section('content')

 
               
    <div class="col-xl-12">
        <div class="card">
            @foreach($selected_contact_details as $row)
            <div class="card-header" style="text-align: center;">{{$row['fname'].' '.$row['lname']}}</div>
            @endforeach

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
                    @foreach($selected_contact_account_details as $row)
                    <tr>
                        <td>{{$row['account_name']}}</td>
                        <td>{{$row['account_type']}}</td>
                        <td>{{$row['account_number']}}</td>
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