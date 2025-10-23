<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('hunting_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Guide::class);
            $table->string('tour_name');
            $table->string('hunter_name');
            $table->tinyInteger('participants_count')->unsigned();
            $table->datetime('date');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('HuntingBooking ');
    }
};
