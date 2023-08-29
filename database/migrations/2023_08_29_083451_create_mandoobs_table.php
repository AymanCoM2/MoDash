<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mandoobs', function (Blueprint $table) {
            $table->id();
            $table->string('userCode')->nullable();
            $table->string('accountType')->nullable();
            $table->string('user_areaCode')->nullable();
            $table->string('areacode')->nullable();
            $table->string('user_auth_level')->nullable();
            $table->string('usertoken')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mandoobs');
    }
};
