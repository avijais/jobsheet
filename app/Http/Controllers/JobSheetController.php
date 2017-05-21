<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JobSheet;
use App\Repositories\JobSheetRepository;

class JobSheetController extends Controller
{
    /**
     * The JobSheet repository instance.
     *
     * @var JobSheetRepository
     */
    protected $jobSheet;

    /**
     * Create a new controller instance.
     *
     * @param  JobSheetRepository  $jobSheet
     * @return void
     */
    public function __construct(JobSheetRepository $jobSheet)
    {
        $this->middleware('auth');

        $this->jobSheet = $jobSheet;
    }

    /**
     * Display a list of all of the user's Job Sheets.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request, $jobSheetId = 0)
    {
        $view = 'jobSheets.index';
        
        $jobSheets = $this->jobSheet->forUser($request->user())->toArray();

        if(!empty($jobSheetId)){
            $jobSheets = $this->jobSheet->forJobSheet($jobSheetId)->toArray();
            $view = 'jobSheets.job-sheet';
        }
        
        return view($view, ['jobSheets' => $jobSheets]);
    }

    /**
     * Display a add job sheet form of all of the user's Job Sheets.
     *
     * @param  Request  $request
     * @return Response
     */
    public function addJobView(Request $request)
    {
        return view('jobSheets.add-job-sheet');
    }

    /**
     * Create a new jobSheet.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|max:255',
        // ]);

        // print_r($request->request);
        // die();
        $request->user()->jobSheets()->create([
            'model_no' => $request->mobile_no,
            'mobile_brand' => $request->mobile_brand,
            'imei_1' => $request->imei_1,
            'imei_2' => $request->imei_2,
            'fault' => $request->fault,
            'target_delivery' => $request->target_delivery,
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'alternate_mobile_no' => $request->alternate_mobile_no,
            'email' => $request->email,
            'address' => $request->address,
            'district' => $request->district,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'battery' => $request->battery,
            'battery_cover' => $request->battery_cover,
            'headset' => $request->headset,
            'mmc' => $request->mmc,
            'sim' => $request->sim
        ]);

        return redirect('/job-sheets');
    }

    /**
     * Destroy the given jobSheet.
     *
     * @param  Request  $request
     * @param  JobSheet  $jobSheet
     * @return Response
     */
    public function destroy(Request $request, JobSheet $jobSheet)
    {
        $this->authorize('destroy', $jobSheet);

        $jobSheet->delete();

        return redirect('/job-sheets');
    }
}
