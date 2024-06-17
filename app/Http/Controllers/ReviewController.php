<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewWisataRequest;
use App\Models\Review;
use App\Models\Wisata;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index($wisata_id)
    {
        $review = Review::where('wisata_id','=',$wisata_id)->get();
        return $this->successResponseData("Data Review",$review);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewWisataRequest $request)
    {
        $request = $request->validated();
        Review::create($request);
        return $this->successResponse("Review telah dikirim");
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
