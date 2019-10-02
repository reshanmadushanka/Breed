@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Breeds</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{url('breed')}}" method="POST">
                        @csrf
                        <div class="form-group col-md-3">
                            <label for="adapt">Adaptability</label>
                            <input type="number" class="form-control" name="adaptability" id="adaptability">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="affection_level">Affection Level</label>
                            <input type="number" name="affection_level" class="form-control">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="child_friendly">Child Friendly</label>
                            <input type="number" name="child_friendly" class="form-control">
                        </div>
                        <div class="form-group col-md-10">
                            <label for="description">description</label>
                            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="energy_level">Energy Level</label>
                            <input type="number" name="energy_level" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="energy_level">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="energy_level">Weight</label>
                            <input type="numberS" name="weight" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="energy_level">Stranger Friendly</label>
                            <input type="number" name="stranger_friendly" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name,</th>
                                <th scope="col">Description,</th>
                                <th scope="col">Adaptability</th>
                                <th scope="col">Affection Level</th>
                                <th scope="col">Child Friendly</th>
                                <th scope="col">Stranger Friendly</th>
                                <th scope="col">Energy Level</th>
                                <th scope="col">Imperial</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($breed as $item)
                            <tr>
                                <th>{{$item->name}}</th>
                                <th>{{$item->description}}</th>
                                <th>{{$item->affection_level}}</th>
                                <th>{{$item->adaptability}}</th>
                                <th>{{$item->affection_level}}</th>
                                <th>{{$item->child_friendly}}</th>
                                <th>{{$item->stranger_friendly}}</th>
                                <th>{{$item->energy_level}}</th>
                                <th>{{$item->weight}}</th>
                            </tr>
                            @empty

                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection