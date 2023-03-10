<?php

namespace App\Http\Controllers;

use App\Models\Booking_detail;
use App\Http\Requests\StoreBooking_detailRequest;
use App\Http\Requests\UpdateBooking_detailRequest;

class BookingDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreBooking_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooking_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking_detail  $booking_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Booking_detail $booking_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking_detail  $booking_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking_detail $booking_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooking_detailRequest  $request
     * @param  \App\Models\Booking_detail  $booking_detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooking_detailRequest $request, Booking_detail $booking_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking_detail  $booking_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking_detail $booking_detail)
    {
        //
    }
}
