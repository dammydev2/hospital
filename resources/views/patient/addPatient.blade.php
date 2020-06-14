@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    <div class="col-md-1"></div>
        <div class="col-md-10 panel panel-primary">
            <div class="panel-heading">Add Patient</div>
            <div class="panel-body">
                <form method="post" action="{{ route('patient/enterPatient') }}">
                    @csrf

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                        @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name">
                        @if ($errors->has('middle_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('middle_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('surname') ? ' has-error' : '' }}">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Surame">
                        @if ($errors->has('surname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('patient_number') ? ' has-error' : '' }}">
                        <label>Patient Number</label>
                        <input type="text" class="form-control" name="patient_number" value="{{ old('patient_number') }}" placeholder="Patient Number">
                        @if ($errors->has('patient_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('patient_number') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value=""></option>
                            <option>male</option>
                            <option>female</option>
                        </select>
                        @if ($errors->has('gender'))
                        <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('address') ? ' has-error' : '' }}">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address">
                        @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('telephone') ? ' has-error' : '' }}">
                        <label>Telephone</label>
                        <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Telephone">
                        @if ($errors->has('telephone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telephone') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('domicile') ? ' has-error' : '' }}">
                        <label>Domicile</label>
                        <input type="text" class="form-control" name="domicile" value="{{ old('domicile') }}" placeholder="Domicile">
                        @if ($errors->has('domicile'))
                        <span class="help-block">
                            <strong>{{ $errors->first('domicile') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('nationality') ? ' has-error' : '' }}">
                        <label>Nationilty</label>
                        <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" placeholder="Nationality">
                        @if ($errors->has('nationality'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('occupation') ? ' has-error' : '' }}">
                        <label>Occupation</label>
                        <input type="text" class="form-control" name="occupation" value="{{ old('occupation') }}" placeholder="Occupation">
                        @if ($errors->has('occupation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('occupation') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('dob') ? ' has-error' : '' }}">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="{{ old('dob') }}" placeholder="Date of Birth">
                        @if ($errors->has('dob'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('blood_group') ? ' has-error' : '' }}">
                        <label>Blood Group</label>
                        <input type="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}" placeholder="Blood Group">
                        @if ($errors->has('blood_group'))
                        <span class="help-block">
                            <strong>{{ $errors->first('blood_group') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('genotype') ? ' has-error' : '' }}">
                        <label>Genotype</label>
                        <input type="text" class="form-control" name="genotype" value="{{ old('genotype') }}" placeholder="Genotype">
                        @if ($errors->has('genotype'))
                        <span class="help-block">
                            <strong>{{ $errors->first('genotype') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('sensitivity') ? ' has-error' : '' }}">
                        <label>Sensitivity</label>
                        <input type="text" class="form-control" name="sensitivity" value="{{ old('sensitivity') }}" placeholder="Sensitivity">
                        @if ($errors->has('sensitivity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sensitivity') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('religion') ? ' has-error' : '' }}">
                        <label>Religion</label>
                        <input type="text" class="form-control" name="religion" value="{{ old('religion') }}" placeholder="Religion">
                        @if ($errors->has('religion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('religion') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('next_of_kin') ? ' has-error' : '' }}">
                        <label>Next of Kin</label>
                        <input type="text" class="form-control" name="next_of_kin" value="{{ old('next_of_kin') }}" placeholder="Next of Kin">
                        @if ($errors->has('next_of_kin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('next_of_kin') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('relationship') ? ' has-error' : '' }}">
                        <label>Relationship</label>
                        <input type="text" class="form-control" name="relationship" value="{{ old('relationship') }}" placeholder="Relationship">
                        @if ($errors->has('relationship'))
                        <span class="help-block">
                            <strong>{{ $errors->first('relationship') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('sex') ? ' has-error' : '' }}">
                        <label>Sex</label>
                        <select name="sex" class="form-control">
                            <option value=""></option>
                            <option>male</option>
                            <option>female</option>
                        </select>
                        @if ($errors->has('sex'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sex') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('kin_address') ? ' has-error' : '' }}">
                        <label>Next of Kin Address</label>
                        <input type="text" class="form-control" name="kin_address" value="{{ old('kin_address') }}" placeholder="Next of Kin Address">
                        @if ($errors->has('kin_address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kin_address') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('kin_email') ? ' has-error' : '' }}">
                        <label>Next of Kin Email</label>
                        <input type="email" class="form-control" name="kin_email" value="{{ old('kin_email') }}" placeholder="Next of Kin Email">
                        @if ($errors->has('kin_email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kin_email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-md-6 has-feedback {{ $errors->has('kin_phone') ? ' has-error' : '' }}">
                        <label>Next of Kin Phone</label>
                        <input type="text" class="form-control" name="kin_phone" value="{{ old('kin_phone') }}" placeholder="Next of Kin Phone">
                        @if ($errors->has('kin_phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('kin_phone') }}</strong>
                        </span>
                        @endif
                    </div>
<input type="submit" class="btn btn-primary" >
                </form>

            </div>

        </div>

    </div>
</div>
@endsection