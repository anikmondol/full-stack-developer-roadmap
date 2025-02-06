@extends('layout')

@section('title')
    All Users Data
@endsection


@section('content')
<div class="container mt-5">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">Name :</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Email :</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">Age :</th>
                <td></td>
            </tr>
            <tr>
                <th scope="row">City :</th>
                <td></td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-back">Back</button>
</div>
@endsection


