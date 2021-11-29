@extends('admin.layouts.master')



@section('content')
<h3 class="text-left ml-5 pl-2 mt-4 text-primary">Create Event</h3>
<form method="post" action="{{ route('events.store') }}">
    @csrf
            <div class="form   border border-primary rounded p-5 m-0 bg-light">
                <!-- start row 1 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupName">Name:</label>
                            <input type="text" class="form-control" id="formGroupName" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
{{--                        <div class="form-group">--}}
{{--                            <label for="formGrouplastName">:</label>--}}
{{--                            <input type="text" class="form-control" id="formGrouplastName">--}}
{{--                        </div>--}}
                    </div>

                </div>
                <!-- end row1 -->
                <!--start row 2 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupwelcome">Welcome Description:</label>
                            <input type="text" class="form-control" id="formGroupwelcome" name="welcome_description">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="formGroupDepartment">Department:</label>
                            <input type="text" class="form-control" id="formGroupDepartment" name="contact_dep">
                        </div>
                    </div>

                </div>
                <!-- end row2 -->
                <!-- row 3 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="it-datepicker-wrapper bg-white">
                            <div class="form-group">
                                <input class="form-control it-date-datepicker" id="date1" type="text" name="open_time">
                                <label for="date1" class="text-primary">Start Time:</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="it-datepicker-wrapper bg-white">
                            <div class="form-group">
                                <input class="form-control it-date-datepicker" id="date2" type="text" name="close_time">
                                <label for="date2" class="text-primary">End Time:</label>
                            </div>
                        </div>
                    </div>

                </div>
<!-- end row 3 -->
             <!--row 4  -->
             <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail" name="contact_email">
                        <label for="exampleInputEmail">Campo di tipo email</label>
                    </div>
                </div>
             </div>
<!-- end row 4 -->
<!-- strat row 5 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupPhone">Phone:</label>
                        <input type="text" class="form-control" id="formGroupPhone" name="contact_phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupFax">Fax:</label>
                        <input type="text" class="form-control" id="formGroupFax" name="contact_fax">
                    </div>
                </div>
            </div>
            <!-- end row5 -->
            <!-- start row 6 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupUrl">Website:</label>
                        <input type="url" class="form-control" id="formGroupUrl" name="company_link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="formGroupBando">Bando:</label>
                        <input type="url" class="form-control" id="formGroupBando" name="bando">
                    </div>
                </div>
            </div>
<!-- end row 6 -->
<!-- start row 7 -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block rounded">Insert</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
<!-- end row 7 -->
</div>



@endsection
@section("js")
    <script>
$(document).ready(function() {
    $('.it-date-datepicker').datepicker({
      inputFormat: ["dd/MM/yyyy"],
      outputFormat: 'dd/MM/yyyy',
    });
});
    </script>

@stop



