<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('student', function (Blueprint $table) {
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
        });
    }

};
