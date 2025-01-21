@extends('layouts.masterlayout')

@section('title')
Home
@endsection

@section('content')

<section>
    <h2>Home Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delenti dolores, doloribus accusamus velit
        debitis accusantium. Temporibus, quas non dolorem itaque, exercitationem magni praesentium omnis a odio
        impedit dolore?</p>
</section>

@endsection


@push('scripts')

<script src="/jquemnnry.js"></script>
<script src="/bootstrap.js"></script>
<script src="/example.js"></script>

@endpush


@push('style')
 <link rel="stylesheet" href="anik.css">
@endpush

@prepend('style')
<style>
    aside{
        background-color: rebeccapurple
    }
</style>
@endprepend

