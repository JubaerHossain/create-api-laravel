@extends('admin.master')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Customer Table</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Jewel</td>
                                        <td>Jewel@gmail.com</td>
                                        <td>Dhaka,Bangladesh</td>
                                        <td><span class="badge bg-red">X</span></td>
                                    </tr>
                                </table>
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
   {{-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Customer Registration Update</h4>
                </div>
                <div class="modal-body">
                    <div class="portlet-body form">
                        <form role="form" action="{{ route('Customer-Registration-update') }}" method="post" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                        <input type="text" name="name" class="form-control"  id="customer_name" value="">
                                        <input type="hidden" name="cus_reg_id" class="form-control"  id="cus_id" value="">
                                </div>
                                <div class="form-group">
                                    <label>Customer Contact no</label>
                                        <input type="text" name="phone" class="form-control"  id="phone_name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Customer Email</label>
                                        <input type="text" name="cusemail" class="form-control"  id="Customer_email" value="">
                                </div>
                                <div class="form-group">
                                    <label>Pick up location</label>
                                        <input type="text" name="pickup" class="form-control"  id="pick" value="">
                                </div>
                                <div class="form-group">
                                    <label>Drop off location</label>
                                        <input type="text" name="dropoff" class="form-control"  id="drop" value="">
                                </div>



                            </div>
                            <div class="form-actions">
                                <button type="submit" value="submit" class="btn blue">Submit</button>
                                <a href="{{route('Customer-Registration')}}"><button type="button" class="btn default">Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>--}}


@endsection

@section('js')


    <script>
        $(document).ready(function(){
            $(".submitButton").click(function(){
                var name = $(this).parents('.gradeX').find('#nameVal').html();
                var phone = $(this).parents('.gradeX').find('#phoneVal').html();
                var email = $(this).parents('.gradeX').find('#emailVal').html();
                var pick = $(this).parents('.gradeX').find('#pickVal').html();
                var drop = $(this).parents('.gradeX').find('#dropVal').html();
                var id = $(this).attr('data-id');
                $('#customer_name').val(name);
                $('#phone_name').val(phone);
                $('#Customer_email').val(email);
                $('#pick').val(pick);
                $('#drop').val(drop);
                $('#cus_id').val(id);
                $("#myModal").modal();
            });
        });
    </script>
@endsection
