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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('sesso_id')->nullable()->after('email_verified_at');
            $table->foreign('sesso_id')->references('id')->on('sesso')->onDelete('set null');
        });
    }
    
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['sesso_id']);
            $table->dropColumn('sesso_id');
        });
    }
    
};
