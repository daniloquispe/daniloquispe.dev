<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('portfolio', function (Blueprint $table)
		{
			$table->id();
			$table->string('name', 50)->unique();
			$table->string('slug', 50)->unique();
			$table->string('short_description', 150)->nullable();
			$table->text('description')->nullable();
			$table->json('technologies');
			$table->string('image', 255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('portfolio');
	}
};
