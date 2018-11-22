
@extends('admin.master')
@section('title','Shuttle | Service Add')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('different-service')}}">Our Different Service View</a>
                        <i class="fa fa-arrow-right"></i>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Our Different Service Add</h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-6 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">

                        @if (Session::get('success'))
                            <div class="alert alert-success"><br>
                                <ul>

                                    <li>{{ Session::get('success') }}</li>

                                </ul>

                            </div>
                        @endif

                        <div class="portlet-body form">
                            <form role="form" action="{{ route('different-service-store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">



                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Title</label>
                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                            <input type="text" name="title" value="{{old('title')}}" class="form-control" required>

                                    </div>
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label>Image</label>
                                            <small class="text-danger">{{ $errors->first('image') }}</small>
                                            <input id="profile-img" type="file"  name="image" value="{{old('image')}}" class="form-control" required>
                                         <img id="profile-img-tag" style="width: 108px; margin-left: 54px;margin-bottom: 18px;margin-top: 21px;"
                                             />

                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="submit" value="submit" class="btn blue">Submit</button>
                                    <button type="button" class="btn default"><a href="{{route('different-service')}}">Cancel</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>

            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
    </script>

@endsection
