@extends('layouts.navigation')
@section('page_heading','Add New Member')
@section('section')

    <div class="col-lg-12">
        <form class="form-horizontal" role="form" method="POST" action="/auth/register">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Last Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Address 1</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="address1" value="{{ old('address1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Address 2</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="address2" value="{{ old('address2') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">State</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Zip</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Phone No.</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Member Type</label>
                <div class="col-md-6">
                    <select class="form-control">
                        <option>Regular</option>
                        <option>Regular Junior</option>
                        <option>Paid</option>
                        <option>Paid Junior</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Committees</label>
                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Tifo
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Merch
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Match Day
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Add member
                    </button>
                </div>
            </div>
        </form>
    </div>

@stop