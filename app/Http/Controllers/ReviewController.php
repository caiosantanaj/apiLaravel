<?php

namespace App\Http\Controllers;

use App\Http\Resources\Review\ReviewResource;
use App\Model\News;
use App\Model\Review;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(News $news)
    {
        return ReviewResource::collection($news->reviews);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $review = new Review;

            $review->user_id = $request->user_id;
            $review->news_id = $request->news_id;
            $review->review = $request->review;
            $review->rate = $request->rate;

            $review->save();

            return response([
                'data' => new ReviewResource($review),
            ], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return \response([
                "error" => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Review $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return new ReviewResource($review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Review $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Review $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news, Review $review)
    {
        try {
            $review->update($request->all());

            return response([
                'data' => new ReviewResource($review),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return \response([
                "error" => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Review $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, Review $review)
    {
        try {
            $review->delete();

            return response(null, Response::HTTP_NO_CONTENT);

        } catch (\Exception $e) {
            return \response([
                "error" => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
