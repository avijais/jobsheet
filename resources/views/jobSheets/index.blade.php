@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">

            <!-- Current Job Sheets -->
            @if (count($jobSheets) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Job Sheets
                        <span class="pull-right"><a href="{{ url('add-job') }}">Add New Job Sheet</a></span>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped job-sheettable">
                            <thead>
                                <th>Job No</th>
                                <th>&nbsp;</th>

                                <th>Brand</th>
                                <th>Model No</th>
                                <th>&nbsp;</th>

                                <th>Customer Name</th>
                                <th>Mobile No</th>
                                <th>&nbsp;</th>

                                <th>Fault</th>
                                <th>IMEI</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($jobSheets as $jobSheet)
                                    <tr>
                                        <td class="table-text"><div>{{ 'coming soon..' }}</div></td>
                                        <th>&nbsp;</th>

                                        <td class="table-text"><div>{{ $jobSheet['mobile_brand'] }}</div></td>
                                        <td class="table-text"><div>{{ $jobSheet['model_no'] }}</div></td>
                                        <th>&nbsp;</th>

                                        <td class="table-text"><div>{{ $jobSheet['name'] }}</div></td>
                                        <td class="table-text"><div>{{ $jobSheet['mobile_no'] }}</div></td>
                                        <th>&nbsp;</th>
                                        
                                        <td class="table-text"><div>{{ $jobSheet['fault'] }}</div></td>
                                        <td class="table-text"><div>{{ $jobSheet['imei_1'] }}</div></td>
                                        <th>&nbsp;</th>
                                        <!-- Job Sheet Delete Button -->
                                        <?php /*<td>
                                            <form action="{{url('jobSheet/' . $jobSheet['id'])}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-job-sheet{{ $jobSheet['id'] }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td> */ ?>

                                        <!-- Job Sheet Delete Button -->
                                        <td>
                                            <form action="{{url('job-sheets/' . $jobSheet['id'])}}" method="GET">
                                                {{ csrf_field() }}
                                                {{ method_field('GET') }}

                                                <button type="submit" id="view-job-sheet{{ $jobSheet['id'] }}" class="btn btn-danger">
                                                    <i class="fa fa-print" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
