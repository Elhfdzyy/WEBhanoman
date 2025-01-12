<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // User yang membuat reservasi
            $table->unsignedBigInteger('place_id'); // Restaurant/Place ID
            $table->datetime('reservation_time'); // Waktu reservasi
            $table->integer('number_of_people'); // Jumlah orang
            $table->text('special_requests')->nullable(); // Permintaan khusus (opsional)
            $table->timestamps(); // Timestamps (created_at, updated_at)

            // Menambahkan foreign key untuk relasi
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
