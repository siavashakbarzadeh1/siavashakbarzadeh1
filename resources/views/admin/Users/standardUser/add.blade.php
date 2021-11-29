@extends('admin.layouts.master')

<!-- @section('title', __('msg.add-customers')) -->

@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Add Standard User</h3>
            <form action="#" method="get" class="m-5 container">
            <div class="form   border border-primary rounded p-5 m-0 bg-light">
            <!-- row1 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputName">
                            <label for="InputName">Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputLastName">
                            <label for="InputLastName">Last Name:</label>
                        </div>
                    </div>

                </div>
<!-- end row 1 -->
<!-- start row 2 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputCF">
                            <label for="InputCF">Codice Fiscale:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputPhoneNum">
                            <label for="InputPhoneNum">Phone Number:</label>
                        </div>
                    </div>


                </div>
                <!-- end row 2 -->
                <!-- start row 3 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="Inputemail">
                            <label for="Inputemail">Email:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" id="InputPass">
                            <label for="InputPass">Password:</label>
                        </div>
                    </div>


                </div>
                <!-- row 4 -->
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    <button type="submit" class="btn btn-primary btn-block rounded">Submit</button>
                    </div>
                    <div class="col-md-4">

                    </div>


                </div>
            </div>
        </div>
        </form>

@endsection
