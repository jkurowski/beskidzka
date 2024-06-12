<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Property;
use App\Repositories\InvestmentRepository;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 7; // @TODO: Do zmiany gdy zostanie utworzona strona
    }
    public function index(Request $request) {
        $page = Page::find(3); // @TODO: Do zmiany gdy zostanie utworzona strona
        $promotion_items = Property::where('name', 'like', '%A3%')->orWhere('name', 'like', '%D3%')->get();
        return view("front.promotion.index", compact("page","promotion_items"));
    }
}
