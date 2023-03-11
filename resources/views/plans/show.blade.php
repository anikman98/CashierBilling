@extends('layouts.app')


@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            All Plans
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plan Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Billing Method</th>
                        <th scope="col">Price</th>
                        <th scope="col">Currency</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                    <tr>
                        <th scope="row">{{$plan->id}}</th>
                        <td>{{$plan->plan_id}}</td>
                        <td>{{$plan->name}}</td>
                        <td>{{$plan->billing_method}}</td>
                        <td>{{$plan->price}}</td>
                        <td>{{$plan->currency}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection