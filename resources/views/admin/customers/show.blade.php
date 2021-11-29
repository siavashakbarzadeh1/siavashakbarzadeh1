@extends('admin.layouts.master')


@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Show Customer</h3>
            <div class="table-responsive mt-5 container">
                <table class="table table-bordered">
                  <thead class="bg-primary text-white">
                    <tr >
                      <th scope="col" class="text-center">ID</th>
                      <th scope="col" class="text-center">Name</th>
                      <th scope="col"class="text-center">Last Name</th>
                      <th scope="col" class="text-center">Cout Event</th>
                      <th scope="col" class="text-center">Email</th>
                      <th scope="col" class="text-center ">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center">Mario</td>
                      <td class="text-center">Rossi</td>
                      <td class="text-center">2</td>
                      <td class="text-center">marioRossi@gmail.com</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary ">Edit</button>
                        <button class="btn btn-md btn-danger ">Clear</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">2</th>
                      <td class="text-center">Sia</td>
                      <td class="text-center">Akbarzadeh</td>
                      <td class="text-center">1</td>
                      <td class="text-center">SiaAkbarzadeh@gmail.com</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary m-1">Edit</button>
                        <button class="btn btn-md btn-danger m-1">Clear</button>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
            </div>
          </div>
        
    </div>
@endsection