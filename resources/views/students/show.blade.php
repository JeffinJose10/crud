@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header"><h3> Students Details</h3></div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
        </div>
</div>
 