@extends('layouts.adminIndex')

@section('content')


<!-- create contact form  -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header" style="text-align: center !important;">Create your Transaction Account(s)</div>
                <div class="card-body">
                    <table style="width: 100%;">
                        <tr>
                            <td class="tdstyle">Account Name</td>
                            <td>
                                <div class="form-group"> 
                    <input class="form-control" style="display: inline !important;">
                     </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tdstyle">Account Type</td>
                            <td>
                                <div class="form-group"> 
                    <select class="form-control" style="display: inline !important;">
                        <option>Select Account Type</option>
                        <option>Mobile Money</option>
                        <option>Bank Account</option>
                    </select>
                     </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="tdstyle">Account Number</td>
                            <td>
                                <div class="form-group"> 
                    <input class="form-control" style="display: inline !important;">
                     </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="button" class="btn btn-primary btn-lg">Create Account</button></td>
                        </tr>
                    </table>
                     
                     
                     
                   </div>
              </div>
         </div>
        <!-- /create account form  -->

@endsection