<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToAmitAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amit_assignments', function (Blueprint $table) {
           
            $table->text('body');
            $table->boolean('completed_at')->default(false);
            $table->timestamp('due_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amit_assignments', function (Blueprint $table) {
            //
        });
    }
}
