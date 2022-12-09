<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('empId')->default('Client');
            $table->string('role')->default('Client');
            $table->string('photo')->nullable();
            $table->string('password')->default(Hash::make('password'));
            $table->timestamps();
        });

          // Insert some stuff
    DB::table('users')->insert(
        array(
            'name' =>'Consider Watch',
            'email' => 'consider@eeztel.com',
            'role'=>'SuperAdmin',
            'empId'=>'SuperAdmin',
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
