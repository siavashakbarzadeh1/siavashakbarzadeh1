@extends('admin.layouts.master')


@section('content')
            <h3 class="text-left ml-5 pl-2 mt-4 text-primary">Show Event</h3>
            <div class="table-responsive mt-5 container">
                <table class="table table-bordered">
                  <thead class="bg-primary text-white">
                    <tr >
                      <th scope="col" class="text-center">ID</th>
                      <th scope="col" class="text-center">Name</th>
                      <th scope="col"class="text-center">Welcome description</th>
                      <th scope="col" class="text-center">Open time</th>
                      <th scope="col" class="text-center">Close time</th>
                      <th scope="col" class="text-center ">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-center">1</th>
                      <td class="text-center">Mario</td>
                      <td class="text-center">Welcome mario</td>
                      <td class="text-center">10/1/2019</td>
                      <td class="text-center">10/1/2021</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary ">Edit</button>
                        <button class="btn btn-md btn-danger ">Clear</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-center">2</th>
                      <td class="text-center">Sia</td>
                      <td class="text-center">Welcome Sia</td>
                      <td class="text-center">12/1/2019</td>
                      <td class="text-center">12/1/2021</td>
                      <td class="text-center">
                        <button class="btn btn-md btn-primary m-1">Edit</button>
                        <button class="btn btn-md btn-danger m-1">Clear</button>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
            </div>
  
@stop

