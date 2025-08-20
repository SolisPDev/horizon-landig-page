<?php

namespace App\Http\Controllers;

use App\Models\PageVisit;
use Illuminate\Http\Request;

class PageVisitController extends Controller
{
    public function recordVisit()
    {
        $visit = PageVisit::firstOrCreate(
            ['page_name' => 'homepage'],
            ['visits' => 0]
        );

        $visit->increment('visits');

        return response()->json(['visits' => $visit->visits]);
    }
}