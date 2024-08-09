<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\Map;
use Illuminate\Http\Request;

// CMS
use App\Models\Page;
use App\Repositories\InvestmentRepository;

class InvestmentController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 3;
    }

    public function index(Request $request)
    {
        $investment = $this->repository->find(1);
//
//        $investment_room = $investment->load(array(
//            'houses' => function ($query) use ($request) {
//                if ($request->input('rooms')) {
//                    $query->where('rooms', $request->input('rooms'));
//                }
//                if ($request->input('status')) {
//                    $query->where('status', $request->input('status'));
//                }
//                if ($request->input('sort')) {
//                    $order_param = explode(':', $request->input('sort'));
//                    $column = $order_param[0];
//                    $direction = $order_param[1];
//                    $query->orderBy($column, $direction);
//                }
//            }
//        ));
//
//        $properties = $investment_room->houses;
//
        $page = Page::where('id', $this->pageId)->first();
//        return view('front.developro.investment.index', [
//            'investment' => $investment,
//            'properties' => $properties,
//            'uniqueRooms' => $this->repository->getUniqueRooms($investment_room->properties),
//            'page' => $page
//        ]);

        $markers = Map::all();
        return view('front.developro.investment.index', [
            'investment' => $investment,
            'page' => $page,
            'gallery' => Gallery::with('photos')->find(1),
            'markers' => $markers,
            'array' => Inline::getElements(1),
            'arrayInvestment' => Inline::getElements(6),
            'isAdmin' => auth()->check()
        ]);
    }
}
