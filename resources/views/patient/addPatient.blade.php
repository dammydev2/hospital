@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

<div class="col-md-10">
<a href="{{ route('patient/addpatient') }}" class="btn btn-primary">Add Patient <i class="fa fa-user-plus"></i></a>
</div>

    </div>
</div>
@endsection
