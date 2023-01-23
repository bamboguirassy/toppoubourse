<?php

use App\Models\User;
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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->string('objet');
            $table->text('message');
            $table->boolean('receptionnee')->default(false);
            $table->boolean('acceptee')->default(false);
            $table->boolean('refusee')->default(false);
            $table->text('motif_refus');
            $table->dateTime('date_traitement')->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignId('user_traitement_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
};
