<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::where('status', '1')->latest()->get();

        return view('admin.client.list', compact('clients'));
    }

    public function pdfIndex()
    {
        $pdfs = Client::whereNotNull('pdf_path')->get();

        return view('admin.file.pdf_view', compact('pdfs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        try {
            DB::beginTransaction();

            $clientObj = new Client;

            $clientObj->name                     = $request->input('name');
            $clientObj->assessment_year          = $request->input('assessment_year');
            $clientObj->address                  = $request->input('address');
            $clientObj->mobile_no                = $request->input('mobile_no');
            $clientObj->nid_no                   = $request->input('nid_no');
            $clientObj->source_income            = $request->input('source_income');
            $clientObj->circle_of_zone           = $request->input('circle_of_zone');
            $clientObj->total_income             = $request->input('total_income');
            $clientObj->net_wealth               = $request->input('net_wealth');
            $clientObj->tax_paid                 = $request->input('tax_paid');
            $clientObj->tin_no                   = $request->input('tin_no');
            $clientObj->previous_net_wealth      = $request->input('previous_net_wealth');
            $clientObj->business_capital         = $request->input('business_capital');
            $clientObj->accretion_in_wealth      = $request->input('accretion_in_wealth');
            $clientObj->non_agriculture_property = $request->input('non_agriculture_property');
            $clientObj->agriculture_property     = $request->input('agriculture_property');
            $clientObj->investment               = $request->input('investment');
            $clientObj->motor_vehicle            = $request->input('motor_vehicle');
            $clientObj->jewellery                = $request->input('jewellery');
            $clientObj->furniture                = $request->input('furniture');
            $clientObj->electronic_equipment     = $request->input('electronic_equipment');
            $clientObj->other_asset              = $request->input('other_asset');
            $clientObj->cash_in_hand             = $request->input('cash_in_hand');
            $clientObj->liabilities              = $request->input('liabilities');
            $clientObj->family_expense           = $request->input('family_expense');
            $clientObj->source_of_fund           = $request->input('source_of_fund');
            $clientObj->payment                  = $request->input('payment');
            $clientObj->register_number          = $request->input('register_number');
            $clientObj->remarks                  = $request->input('remarks');
            $clientObj->submission_date          = $request->input('submission_date');
            $clientObj->status                   = '1';
            $clientObj->flag                     = 0;

            $client = $clientObj->save();

            DB::commit();

            if($client){
                $action = $request->input('action');

                switch ($action) {
                    case 'print':
                        $id = $clientObj->id;

                        $clientInfo = Client::find($id);
                        return view('admin.file.print_view', compact('clientInfo'));
                        break;
                    case 'save_print':
                        return redirect()->route('client.list')->with('success', 'Data saved successfully.');
                        $id = $clientObj->id;

                        $clientInfo = Client::find($id);
                        return view('admin.file.print_view', compact('clientInfo'));
                        break;

                    case 'save_pdf':
                        $id = $clientObj->id;
                        $clientInfo = Client::find($id);

                        $pdf = PDF::loadView('admin.file.show_pdf', ['clientInfo' => $clientInfo]);

                        // Get the PDF content
                        $pdfContent = $pdf->output();

                        $directory = 'clientsFile';

                        // Define the destination path for storing the PDF file
                        $destinationPath = public_path($directory . '/client_' . $clientInfo->id . '.pdf');
                        $pdf->save($destinationPath);
                        $clientInfo->update(['pdf_path' => $destinationPath]);

                        return redirect()->back()->with('success', 'Data saved and PDF generated successfully.');
                        break;

                    default:
                        return redirect()->back()->with('error', 'Invalid action.');
                        break;
                }

            }

        } catch (\Exception $e) {
            DB::rollback();
            info($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, $id)
    {
        $client = Client::find($id);

        return view('admin.client.edit', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    public function clientView($id)
    {
        $client = Client::find($id);

        return $client;

        return view('admin.client.view');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        try {
            DB::beginTransaction();

            $validatedData = $request->validated();

            $clientid = $request->input('client_id');

            $client = Client::find($clientid);
            if($client){
                DB::commit();
                $res = $client->update($validatedData);

                if($res){
                    $action = $request->input('action');

                    switch ($action) {
                        case 'print':
                            $id = $clientid;

                            $clientInfo = Client::find($id);
                            return view('admin.file.print_view', compact('clientInfo'));
                            break;
                        case 'save_print':
                            $id = $clientid;

                            $clientInfo = Client::find($id);
                            return view('admin.file.print_view', compact('clientInfo'));
                            break;

                        case 'save_pdf':
                            $id = $clientid;
                            $clientInfo = Client::find($id);

                            $pdf = PDF::loadView('admin.file.show_pdf', ['clientInfo' => $clientInfo]);

                            // Get the PDF content
                            $pdfContent = $pdf->output();

                            $directory = 'clientsFile';

                            // Define the destination path for storing the PDF file
                            $destinationPath = public_path($directory . '/client_' . $clientInfo->id . '.pdf');
                            $pdf->save($destinationPath);
                            $clientInfo->update(['pdf_path' => $destinationPath]);

                            return redirect()->back()->with('success', 'Data saved and PDF generated successfully.');
                            break;

                        default:
                            return redirect()->back()->with('error', 'Invalid action.');
                            break;
                    }
                }
            }

        } catch (\Exception $e) {
            DB::rollback();
            info($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client, $id)
    {
        try {
            DB::beginTransaction();

            $client = Client::find($id);

            if(!$client){
                return response()->json(['message' => 'Client not found']);
            }

            $res = $client->delete();

            DB::commit();
            if($res){
                return response()->json(['message' => 'Client deleted']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            info($e);
        }
    }

    public function clientDestroy($id)
    {
        try {
            DB::beginTransaction();

            $client = Client::find($id);

            if(!$client){
                return response()->json(['message' => 'Client not found']);
            }

            $res = $client->delete();

            DB::commit();
            if($res){
                return response()->json(['message' => 'Client deleted']);
            }
        } catch (\Exception $e) {
            DB::rollback();
            info($e);
        }
    }
}
