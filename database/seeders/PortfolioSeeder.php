<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		// Order: Desc
		PortfolioItem::create(['image' => 'portfolio/loco-y-medio.png', 'name' => 'PradoNet', 'description' => 'Inventory, customers, vendors and billing system']);
		PortfolioItem::create(['image' => 'portfolio/webadmin.png', 'name' => 'WebAdmin', 'description' => 'Simple website CMS']);
		PortfolioItem::create(['image' => 'portfolio/loco-y-medio.png', 'name' => 'Loco y medio', 'description' => 'WordPress theme for my personal blog']);
		PortfolioItem::create(['image' => 'portfolio/loco-y-medio.png', 'name' => 'Admisión EPG-UNE', 'description' => 'Post-graduate candidates inscription wizard and manager']);
		PortfolioItem::create(['image' => 'portfolio/appdata.png', 'name' => 'AppData', 'description' => 'Language interpreters\' performance tracking']);
		PortfolioItem::create(['image' => 'portfolio/adminisol.png', 'name' => 'AdminISOL', 'description' => 'Hosting, domains and clients manager']);
    }
}
