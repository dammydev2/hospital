@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif

        <div class="col-md-12" style="height: 20px;"></div>

        <div class="panel panel-primary col-md-10">
            <div class="panel-heading">Patient: <b>{{ $details->patient_name }}</b></div>
            <div class="panel-body">

                <a href="{{ url('doctor/getNurseInput/'.$details->rec) }}">
                    <div class="col-md-2">
                        <i class="fas fa-user-nurse"></i><br>
                        View Nurse Input
                    </div>
                </a>

                <a href="#" id='content'>
                    <div class="col-md-2">
                        <i class="fas fa-comment-medical"></i><br>
                        Add Doctor Input
                        <div style="display: none" id='hideshow'>
                            <button onclick="addHistory()" class="btn btn-primary">Add History</button>
                            <button onclick="addPrescription()" class="btn btn-primary">Add Prescription History</button>
                        </div>
                        <!-- <input type='button' style="display: none" id='hideshow' value='hide/show'> -->
                    </div>
                </a>

                <div class="col-md-2">
                    <i class="fas fa-user-nurse"></i>
                    Nurse Input
                </div>

                <div class="col-md-2">
                    <i class="fas fa-user-nurse"></i>
                    Nurse Input
                </div>

                <div class="col-md-2">
                    <i class="fas fa-user-nurse"></i>
                    Nurse Input
                </div>

                <div class="col-md-2">
                    <i class="fas fa-user-nurse"></i>
                    Nurse Input
                </div>


            </div>
        </div>


    </div>
</div>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
<script src="{{ URL::asset('js/fontawesome.js') }}"></script>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script>
    $("#content").click(function() {
        // assumes element with id='button'
        $("#hideshow").toggle();
    });

    function addHistory() {
      window.location.href = "{{ url('doctor/addHistory') }}";
    }

    function addPrescription() {
      window.location.href = "{{ url('doctor/addHistory') }}";
    }
</script>
<style>
    .fas {
        font-size: 100px;
        color: #337ab7;
    }

    .col-md-3 {
        border: 1px solid blue;
        text-align: center;
    }
</style>
@endsection