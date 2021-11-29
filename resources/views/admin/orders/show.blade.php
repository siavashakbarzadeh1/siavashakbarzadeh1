@extends('admin.layouts.master')


@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Show Orders</h3>
            <div class="container table-responsive table-responsive-md table-responsive-sm  mt-5">
                <table class="table table-bordered">
                  <thead class="bg-primary text-white">
                    <tr >
                      <th class="text-center px-1">ID</th>
                      <th class="text-center px-1">User ID</th>
                      <th class="text-center px-1">Event ID</th>
                      <th class="text-center px-1">User name</th>
                      <th  class="text-center px-1">Event Name</th>
                      <th  class="text-center px-1">Event Name</th>
                      <th  class="text-center px-1">order started date</th>
                      <th  class="text-center px-1">Created At</th>
                      <th  class="text-center px-1">Updated At</th>
                      <th scope="col" class="text-center ">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-center"></th>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary my-1">Edit</button>
                        <button class="btn btn-md btn-danger my-1">Clear</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center"></th>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary my-1">Edit</button>
                        <button class="btn btn-md btn-danger my-1">Clear</button>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
            </div>

@endsection