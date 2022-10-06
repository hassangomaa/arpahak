<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGoogleIdColumn extends Migration
{
    public function up() {
        if (Schema::hasTable('users') && Schema::hasColumn('users', 'google_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('google_id')->nullable();
            });
        }

    }

    public function down() {
        if (Schema::hasTable('users')) {
            if (Schema::hasColumn('users', 'google_id')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('google_id');
                });
            }
        }
    }
}
