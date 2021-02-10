@extends('layout')

@section('css')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endsection

@section('content')

<div class="absolute pt-32 pb-32 w-100">


    <div class="w-90 border-t-6 border-green rounded-t mx-auto bg-white pb-4 px-2 shadow-sm">

        <div class="text-center pt-4 pb-3 text-grey-darkest">
            <h1 class="text-2xl font-bold">Emergencies Report List</h1>
        </div>

        <table class="table table-striped border">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Reporters Names</th>
                <th scope="col">Emergency Type</th>
                <th scope="col">Location</th>
                <th scope="col">Option</th>
                
              </tr>
            </thead>
            <tbody>
             @foreach($inquiries as $inquiry)
              <tr>
                <th scope="row" class="text-green-dark pt-3 font-bold text-xs">{{ $i++ }}</th>
                <td class="text-xs pt-3">{{ $inquiry->created_at->diffForHumans() }}</td>
                <td>{{ $inquiry->name }}</td>
                <td>{{ $inquiry->type }}</td>
                <td>{{ $inquiry->location }}</td>
                <td><button class="px-2 py-1 text-white  bg-green" type="button" data-toggle="modal" data-target="#exampleModal">
                    View Message</button></td>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            ...
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>    
              </tr>
              
             @endforeach  

            </tbody>
          </table>

    </div>



@endsection