@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Job Sheet
                    <span class="pull-right"><a href="{{ url('job-sheets') }}">All Job Sheets</a></span>
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Job Sheet Form -->
                    <form action="{{ url('jobSheet') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        
                        <div class="text-info">
                            <u><strong>Mobile Details</strong></u>
                        </div>
                        <br/>
                        <div class="form-group">
                             <label for="model_no" class="col-sm-3 control-label">Model No</label>

                            <div class="col-sm-3">
                                <input type="text" name="model_no" id="model_no" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="mobile_brand" class="col-sm-3 control-label">Mobile Brand</label>

                            <div class="col-sm-3">
                                <input type="text" name="mobile_brand" id="mobile_brand" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <!-- Job Sheet Name -->
                        <div class="form-group">
                            <label for="imei_1" class="col-sm-3 control-label">IMEI 1</label>

                            <div class="col-sm-3">
                                <input type="text" name="imei_1" id="imei_1" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="imei_2" class="col-sm-3 control-label">IMEI 2</label>

                            <div class="col-sm-3">
                                <input type="text" name="imei_2" id="imei_2" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <!-- Job Sheet Name -->
                        <div class="form-group">
                            <label for="fault" class="col-sm-3 control-label">Fault</label>

                            <div class="col-sm-3">
                                <input type="text" name="fault" id="fault" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="target_delivery" class="col-sm-3 control-label">Target Delivery Date</label>

                            <div class="col-sm-3">
                                <input type="text" name="target_delivery" id="target_delivery" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                        </div>
                        
                        <hr/>
                        <div class="text-info">
                            <u><strong>Personal Details</strong></u>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-3">
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="mobileno" class="col-sm-3 control-label">Mobile No</label>

                            <div class="col-sm-3">
                                <input type="text" name="mobile_no" id="mobileno" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alternate_mobile_no" class="col-sm-3 control-label">Alternate Mobile No.</label>

                            <div class="col-sm-3">
                                <input type="text" name="alternate_mobile_no" id="alternate_mobile_no" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-3">
                                <input type="text" name="email" id="email" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-3">
                                <input type="text" name="address" id="address" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="district" class="col-sm-3 control-label">District</label>

                            <div class="col-sm-3">
                                <input type="text" name="district" id="district" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-sm-3 control-label">State</label>

                            <div class="col-sm-3">
                                <input type="text" name="state" id="state" class="form-control" value="{{ old('job-sheets') }}">
                            </div>


                            <label for="pincode" class="col-sm-3 control-label">Pin Code</label>

                            <div class="col-sm-3">
                                <input type="text" name="pincode" id="pincode" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <hr/>
                        <div class="text-info">
                            <u><strong>Accessories Section</strong></u>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="battery" class="col-sm-2 control-label">Battery</label>

                            <div class="col-sm-2">
                                <input type="checkbox" name="battery" id="battery" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="battery_cover" class="col-sm-2 control-label">Battery Cover</label>

                            <div class="col-sm-2">
                                <input type="checkbox" name="battery_cover" id="battery_cover" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="headset" class="col-sm-2 control-label">Headset</label>

                            <div class="col-sm-2">
                                <input type="checkbox" name="headset" id="headset" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mmc" class="col-sm-2 control-label">Memory Card</label>

                            <div class="col-sm-2">
                                <input type="checkbox" name="mmc" id="mmc" class="form-control" value="{{ old('job-sheets') }}">
                            </div>

                            <label for="sim" class="col-sm-2 control-label">SIM</label>

                            <div class="col-sm-2">
                                <input type="checkbox" name="sim" id="sim" class="form-control" value="{{ old('job-sheets') }}">
                            </div>
                        </div>

                        <!-- Save Job Sheet Button -->
                        <hr/>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Save Job Sheet
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
