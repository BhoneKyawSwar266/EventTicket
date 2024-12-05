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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->date('event_date');
            $table->text('description');
            $table->string('location');
            $table->integer('ticket_price');
            $table->integer('total_tickets');
            $table->string('event_image');

            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // This creates a foreign key that references the 'id' column in the 'users' table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
