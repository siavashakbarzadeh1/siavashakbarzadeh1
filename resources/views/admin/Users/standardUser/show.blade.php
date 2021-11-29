@extends('admin.layouts.master')

@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Show Standard User</h3>
            <div class="table-responsive mt-5 container">
                <table class="table table-bordered">
                  <thead class="bg-primary text-white">
                    <tr >
                      <th scope="col" class="text-center">ID</th>
                      <th scope="col" class="text-center">Name</th>
                      <th scope="col"class="text-center">Last Name</th>
                      <th scope="col" class="text-center">Codice Fiscale</th>
                      <th scope="col" class="text-center">Cellulare</th>
                      <th scope="col" class="text-center">Email</th>
                      <th scope="col" class="text-center ">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center">Mario</td>
                      <td class="text-center">Rossi</td>
                      <td class="text-center">MR878698123022o9</td>
                      <td class="text-center">003978477647</td>
                      <td class="text-center ">MarioRossi@gmail.com</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary px-2 my-1">Edit</button>
                        <button class="btn btn-md btn-danger px-2 my-1">Clear</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center">Siavash</td>
                      <td class="text-center">Akbarzadeh</td>
                      <td class="text-center">SA878698123022o9</td>
                      <td class="text-center">003978487847</td>
                      <td class="text-center">siavashAkbarzadeh@gmail.com</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary px-2 my-1">Edit</button>
                        <button class="btn btn-md btn-danger px-2 my-1">Clear</button>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
            </div>
@stop