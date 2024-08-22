<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        //Check if the table is empty, and if so, insert default data
        if (DB::table('tests')->count() == 0) {
            DB::table('tests')->insert([
                ['name' => 'Sample Data 1', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Sample Data 2', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Sample Data 3', 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
