@extends('layouts.adminIndex')

@section('content')
 

      <!-- Send money form  -->
  <div class="col-xl-12">
      <div class="card">
          <div class="card-header" style="text-align: center !important;">All Transactions</div>
              <div class="card-body">
                <form action="/allTransactions" method="post">
                  @csrf
                  <table style="width: 100%;">

                      <tr>
                          <td class="tdstyle">From</td>
                          <td>
                              <div class="form-group"> 
                  <input type="date" name="start_date" 
                          class="form-control" style="display: inline !important;" id="startDate">
                   </div>
                          </td>
                      </tr>
                    
                      <tr>
                          <td class="tdstyle">Up to</td>
                          <td>
                              <div class="form-group"> 
                  <input type="date" name="end_date" class="form-control" style="display: inline !important;" id='endDate'>
                   </div>
                          </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <input type="submit" name="SEARCH" class="btn btn-primary" value="FIND" />
                        </td>
                      </tr>
                  </table>
                </form>
                 
                  <div id="transactionRange"></div>
                               
                 </div>

      <!-- /.table-responsive -->

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
                    @foreach($all_transactions as $row)
                    <tr>

                        <td>{{$row->reciever_acct_number}}</td>
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
      <!-- /Send money form  -->   

               
@endsection