@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            <!-- Current Job Sheets -->
            @if (count($jobSheets) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ url('job-sheets') }}">View Job Sheets</a>
                        <span class="pull-right" onclick="window.print()"><a href="javascript:void(0)">Print</a></span>
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')
                        <div class="text-info">
                            <u><strong>Mobile Details</strong></u>
                        </div>
                        <br/>
                        <?php /*
                            <!-- another way to show data but not responsive -->
                            <div>
                                <strong class="col-sm-3 control-label">Model No</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['model_no'] }}</span>

                                <strong class="col-sm-3 control-label">Model Brand</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['mobile_brand'] }}</span>
                            </div>

                            <div>
                                <strong class="col-sm-3 control-label">IMEI 1</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['imei_1'] }}</span>

                                <strong class="col-sm-3 control-label">IMEI 2</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['imei_2'] }}</span>
                            </div>

                            <div>
                                <strong class="col-sm-3 control-label">Fault</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['fault'] }}</span>

                                <strong class="col-sm-3 control-label">Target Delivery Date</strong>
                                <span class="col-sm-3 text-info">{{ $jobSheets[0]['target_delivery'] }}</span>
                            </div> */
                        ?>
                        <div class="form-group">
                            <label for="model_no" class="col-sm-3 control-label">Model No</label>

                            <div class="col-sm-3">
                                <input type="text" name="model_no" id="model_no" class="form-control" value="{{ $jobSheets[0]['model_no'] }}" disabled>
                            </div>

                            <label for="mobile_brand" class="col-sm-3 control-label">Mobile Brand</label>

                            <div class="col-sm-3">
                                <input type="text" name="mobile_brand" id="mobile_brand" class="form-control" value="{{ $jobSheets[0]['mobile_brand'] }}" disabled>
                            </div>
                        </div>

                        <!-- Job Sheet Name -->
                        <div class="form-group">
                            <label for="imei_1" class="col-sm-3 control-label">IMEI 1</label>

                            <div class="col-sm-3">
                                <input type="text" name="imei_1" id="imei_1" class="form-control" value="{{ $jobSheets[0]['imei_1'] }}" disabled>
                            </div>

                            <label for="imei_2" class="col-sm-3 control-label">IMEI 2</label>

                            <div class="col-sm-3">
                                <input type="text" name="imei_2" id="imei_2" class="form-control" value="{{ $jobSheets[0]['imei_2'] }}" disabled>
                            </div>
                        </div>

                        <!-- Job Sheet Name -->
                        <div class="form-group">
                            <label for="fault" class="col-sm-3 control-label">Fault</label>

                            <div class="col-sm-3">
                                <input type="text" name="fault" id="fault" class="form-control" value="{{ $jobSheets[0]['fault'] }}" disabled>
                            </div>

                            <label for="target_delivery" class="col-sm-3 control-label">Target Delivery Date</label>

                            <div class="col-sm-3">
                                <input type="text" name="target_delivery" id="target_delivery" class="form-control" value="{{ $jobSheets[0]['target_delivery'] }}" disabled>
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
                                <input type="text" name="name" id="name" class="form-control" value="{{ $jobSheets[0]['name'] }}" disabled>
                            </div>

                            <label for="mobileno" class="col-sm-3 control-label">Mobile No</label>

                            <div class="col-sm-3">
                                <input type="text" name="mobile_no" id="mobileno" class="form-control" value="{{ $jobSheets[0]['mobile_no'] }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alternate_mobile_no" class="col-sm-3 control-label">Alternate Mobile No.</label>

                            <div class="col-sm-3">
                                <input type="text" name="alternate_mobile_no" id="alternate_mobile_no" class="form-control" value="{{ $jobSheets[0]['alternate_mobile_no'] }}" disabled>
                            </div>

                            <label for="email" class="col-sm-3 control-label">Email</label>

                            <div class="col-sm-3">
                                <input type="text" name="email" id="email" class="form-control" value="{{ $jobSheets[0]['email'] }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Address</label>

                            <div class="col-sm-3">
                                <input type="text" name="address" id="address" class="form-control" value="{{ $jobSheets[0]['address'] }}" disabled>
                            </div>

                            <label for="district" class="col-sm-3 control-label">District</label>

                            <div class="col-sm-3">
                                <input type="text" name="district" id="district" class="form-control" value="{{ $jobSheets[0]['district'] }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-sm-3 control-label">State</label>

                            <div class="col-sm-3">
                                <input type="text" name="state" id="state" class="form-control" value="{{ $jobSheets[0]['state'] }}" disabled>
                            </div>


                            <label for="pincode" class="col-sm-3 control-label">Pin Code</label>

                            <div class="col-sm-3">
                                <input type="text" name="pincode" id="pincode" class="form-control" value="{{ $jobSheets[0]['pincode'] }}" disabled>
                            </div>
                        </div>

                        <hr/>
                        <div class="text-info">
                            <u><strong>Accessories Section</strong></u>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="battery" class="col-sm-3 control-label">Battery</label>
                            <div class="col-sm-3">
                                <input type="text" name="battery" id="battery" class="form-control" value="{{ $jobSheets[0]['battery'] }}" disabled>
                            </div>

                            <label for="battery_cover" class="col-sm-3 control-label">Battery Cover</label>
                            <div class="col-sm-3">
                                <input type="text" name="battery_cover" id="battery_cover" class="form-control" value="{{ $jobSheets[0]['battery_cover'] }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="headset" class="col-sm-3 control-label">Headset</label>
                            <div class="col-sm-3">
                                <input type="text" name="headset" id="headset" class="form-control" value="{{ $jobSheets[0]['headset'] }}" disabled>
                            </div>

                            <label for="mmc" class="col-sm-3 control-label">Memory Card</label>
                            <div class="col-sm-3">
                                <input type="text" name="mmc" id="mmc" class="form-control" value="{{ $jobSheets[0]['mmc'] }}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sim" class="col-sm-3 control-label">SIM</label>
                            <div class="col-sm-3">
                                <input type="text" name="sim" id="sim" class="form-control" value="{{ $jobSheets[0]['sim'] }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection