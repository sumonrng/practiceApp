@extends('frontend.layout')
@section('page_title','Home')
@php
    $fruits=['Apple','Banana','Grapes'];
@endphp
<script>
    // var data = @json($fruits);
    var data = {{Js::from($fruits)}};
    data.forEach(function(entry){
        console.log(entry);
    })
    // console.log(data);
</script>
