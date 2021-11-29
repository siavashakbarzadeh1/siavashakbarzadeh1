@extends('admin.layouts.master')



@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Create Customer</h3>
            <form action="#" method="get" class="m-5 container">
            <div class="form   border border-primary rounded p-5 m-0 bg-light">
            <!-- row1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputName">
                            <label for="InputName">Name:</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="InputLastName">
                            <label for="InputLastName">Last Name:</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            <input type="number" class="form-control" id="InputCout">
                            <label for="InputCout">Cout event:</label>
                        </div>
                    </div>
                </div>
<!-- end row 1 -->
<!-- start row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="InputEmail">
                            <label for="InputEmail">Email:</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="password" class="form-control" id="InputPassword">
                            <label for="InputEmail">Password:</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="password" class="form-control" id="InputPasswordConf">
                            <label for="InputPasswordConf"> Confirm Password:</label>
                        </div>
                    </div>
                   
                </div>
                <!-- end row 2 -->
                <!-- start row 3 -->
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                    <button  type="submit" class="btn btn-primary btn-block rounded">Submit</button>
                    </div>
                </div>
            </div>
        
        </form>
    
@endsection
