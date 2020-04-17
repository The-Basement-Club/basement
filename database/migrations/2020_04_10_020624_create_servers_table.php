<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('threads');
            $table->integer('memory');
            $table->boolean('is_hypervisor')->default(false);
            $table->boolean('collect_metrics')->default(false);
            $table->boolean('uses_client')->default(false);
            $table->boolean('has_backup')->default(false);
            $table->boolean('is_powered_on')->default(false);
            $table->string('ip_address')->nullable();
            $table->string('ip_v6_address')->nullable();
            $table->string('kernel')->nullable();
            $table->string('distro')->nullable();
            $table->string('boot_disk')->nullable();
            $table->string('filesystem_format')->nullable();
            $table->integer('cost_in_cents')->default(0);
            $table->unsignedInteger('credential_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->dateTime('locked_at')->nullable();
            $table->unsignedBigInteger('locked_by_action_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('servers');
    }
}
