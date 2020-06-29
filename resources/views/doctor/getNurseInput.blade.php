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
            <div class="panel-heading">Patient: <b>{{ $details->patient_name }}</b> latest nurse input</div>
            <div class="panel-body">

                <table class="table table-striped table-bordered">
                    <tr>
                        <td>Date Time: </td>
                        <th>{{ $details->created_at }}</th>
                    </tr>
                    <tr>
                        <td>Patient Name: </td>
                        <th>{{ $details->patient_name }}</th>
                    </tr>
                    <tr>
                        <td>Time: </td>
                        <th>{{ $details->time }}</th>
                    </tr>
                    <tr>
                        <td>Temperature: </td>
                        <th>{{ $details->temp }}</th>
                    </tr>
                    <tr>
                        <td>Pulse: </td>
                        <th>{{ $details->palse }}</th>
                    </tr>
                    <tr>
                        <td>Weight: </td>
                        <th>{{ $details->weight }}</th>
                    </tr>
                    <tr>
                        <td>Height: </td>
                        <th>{{ $details->height }}</th>
                    </tr>
                    <tr>
                        <td>BMI: </td>
                        <th>{{ $details->BMI }}</th>
                    </tr>
                    <tr>
                        <td>SPO2: </td>
                        <th>{{ $details->SPO2 }}</th>
                    </tr>
                    <tr>
                        <td>Attended to by: </td>
                        <th>Nurse 
                            <?php
                            $nurse = DB::table('users')
                            ->select('users.*','nurse_cares.*')
                            ->join('nurse_cares','nurse_cares.autenticator','=','users.id')
                            ->where(['users.id' => $details->autenticator])
                            ->first();
                            echo $nurse->name;
                            ?>
                        </th>
                    </tr>
                    <a href="{{ url('doctor/viewPage') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> go back</a>
                </table>

            </div>
        </div>


    </div>
</div>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
<script src="{{ URL::asset('js/fontawesome.js') }}"></script>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/select2.min.js') }}"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
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