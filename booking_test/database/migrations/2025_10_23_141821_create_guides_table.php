<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            //$table->foreignIdFor(\App\Models\Product::class);
            $table->string('name');
            $table->tinyInteger('experience_years')->unsigned();
            $table->boolean('is_active');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
