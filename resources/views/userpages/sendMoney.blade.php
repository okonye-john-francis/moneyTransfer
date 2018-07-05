@extends('index')

@section('content')

        <!-- Send money form  -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header" style="text-align: center !important;">Send Money</div>
                <div class="card-body">
                    <table style="width: 100%;">

                        <tr>
                            <td class="tdstyle">Amount to send</td>
                            <td>
                                <div class="form-group"> 
                    <input class="form-control" style="display: inline !important;">
                     </div>
                            </td>
                        </tr>
                      
                        <tr>
                            <td class="tdstyle">Name of reciever</td>
                            <td>
                                <div class="form-group"> 
                    <input class="form-control" style="display: inline !important;">
                     </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td><button type="button" class="btn btn-primary btn-lg">Send Money</button></td>
                        </tr>
                    </table>
                     
                                    
                   </div>
              </div>
         </div>
        <!-- /Send money form  -->           
                

@endsection