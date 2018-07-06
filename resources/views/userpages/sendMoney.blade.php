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
                    <input class="form-control" style="display: inline !important;" id='recipientName'>
                     </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td>
                                
                    <form>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" style="visibility: hidden;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Send to Mobile Money</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Send to Bank</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          Registered Phone Number<input class="form-control" style="display: inline !important;" placeholder="registered phone number" >
                          <br><br>
                          <input class="form-control" id="regPhoneName" value="" >
                          <br><br>
                          <button type="button" class="btn btn-primary btn-lg">Send Mobile Money</button>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                  </form>
                            </td>
                        </tr>
                    </table>


                     
                                    
                   </div>
              </div>
         </div>
        <!-- /Send money form  -->   

               
                

@endsection