@php
    $user = "Anik";
    $fruits = [1, 2, 3, 4];
@endphp


<script>

var data = @json($user);
var data1 = @json($fruits);
console.log(data);

data1.forEach(element => {
    console.log(element);

});


</script>
