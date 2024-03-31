<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
	public function index(): View
	{
		$items = PortfolioItem::query()
			->select(['name', 'slug', 'short_description', 'image'])
			->latest()
			->get();

		$data = compact('items');
		return view('portfolio.index', $data);
	}

	public function show(PortfolioItem $item): View
	{
		$data = compact('item');
		return view('portfolio.show', $data);
	}
}
