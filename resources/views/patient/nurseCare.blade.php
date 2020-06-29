@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12" style="height: 20px;"></div>
        <div class="col-md-1"></div>

        <div class="panel panel-primary col-md-9">
            <div class="panel-heading">Nurse Input</div>
            <div class="panel-body">

            <h3>Record Number: <b>{{ Session::get('rec') }}</b></h3>

                <form method="post" action="{{ route('patient/nurseInput') }}">
                    @csrf

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('patient_number') ? ' has-error' : '' }}">
                        <label>patient number</label>
                        <input type="text" class="form-control" name="patient_number" readonly value="{{ Session::get('patient_num') }}" placeholder="patient number">
                        @if ($errors->has('patient_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('patient_number') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('patient_name') ? ' has-error' : '' }}">
                        <label>patient name</label>
                        <input type="text" class="form-control" readonly name="patient_name" value="{{ $getRec->surname.' '.$getRec->first_name.' '.$getRec->middle_name }}" placeholder="patient name">
                        @if ($errors->has('patient_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('patient_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <?php
                    $mytime = Carbon\Carbon::now()->addHour();
                    // echo $mytime->toDateTimeString();
                    ?>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('time') ? ' has-error' : '' }}">
                        <label>time</label>
                        <input type="text" readonly class="form-control" name="time" value="{{ $mytime->toDateTimeString() }}" placeholder="time">
                        @if ($errors->has('time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('time') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('temp') ? ' has-error' : '' }}">
                        <label>temperature</label>
                        <input type="text" class="form-control" name="temp" value="{{ old('temp') }}" placeholder="temperature">
                        @if ($errors->has('temp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('temp') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('palse') ? ' has-error' : '' }}">
                        <label>palse</label>
                        <input type="text" class="form-control" name="palse" value="{{ old('palse') }}" placeholder="palse">
                        @if ($errors->has('palse'))
                        <span class="help-block">
                            <strong>{{ $errors->first('palse') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('weight') ? ' has-error' : '' }}">
                        <label>weight</label>
                        <input type="text" class="form-control" name="weight" value="{{ old('weight') }}" placeholder="weight">
                        @if ($errors->has('weight'))
                        <span class="help-block">
                            <strong>{{ $errors->first('weight') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('height') ? ' has-error' : '' }}">
                        <label>height</label>
                        <input type="text" class="form-control" name="height" value="{{ old('height') }}" placeholder="height">
                        @if ($errors->has('height'))
                        <span class="help-block">
                            <strong>{{ $errors->first('height') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('BMI') ? ' has-error' : '' }}">
                        <label>BMI</label>
                        <input type="text" class="form-control" name="BMI" value="{{ old('BMI') }}" placeholder="BMI">
                        @if ($errors->has('BMI'))
                        <span class="help-block">
                            <strong>{{ $errors->first('BMI') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('SPO2') ? ' has-error' : '' }}">
                        <label>SPO2</label>
                        <input type="text" class="form-control" name="SPO2" value="{{ old('SPO2') }}" placeholder="SPO2">
                        @if ($errors->has('SPO2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('SPO2') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('record_number') ? ' has-error' : '' }}">
                        <label>record number</label>
                        <input type="text" class="form-control" name="record_number" value="{{ Session::get('rec') }}" readonly placeholder="record number">
                        @if ($errors->has('record_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('record_number') }}</strong>
                        </span>
                        @endif
                    </div>

                    <input type="submit" class="btn btn-primary">

                </form>

            </div>
        </div>


    </div>
</div>
@endsection