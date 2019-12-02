<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $campaign_key = random_str(16);

        $campaign = Campaign::create([
            'product_id' => $request->input('product_id'),
            'key' => $campaign_key
        ]);

        return response()->json(compact('campaign'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }

    public function getKey(Request $request, $product_id, $campaign_key)
    {
        $request->merge(['product_id'   => request('product_id')]);
        $request->merge(['campaign_key' => request('campaign_key')]);

        $validator = Validator::make($request->all(), [
            'product_id'    => 'required|exists:products,id',
            'campaign_key'  => 'required|exists:campaigns,key'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $campaign = Campaign::where('key', $campaign_key)->first();
        $product = $campaign->product;

        return view('product', compact('product'));
    }
}
