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
        Schema::create('application_type_versions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_type_id')->nullable()->constrained('application_types');
            $table->string('name')->nullable();
            $table->text('config_nginx')->nullable();
            $table->text('config_apache')->nullable();
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
        Schema::dropIfExists('application_type_versions');
    }
};
