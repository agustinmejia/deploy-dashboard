<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_type_version_id')->nullable()->constrained('application_type_versions');
            $table->string('server_type')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('domain')->nullable();
            $table->text('repository')->nullable();
            $table->string('dir')->nullable();
            $table->string('db_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
