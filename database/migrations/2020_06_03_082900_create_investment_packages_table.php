<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_packages', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('amount');
            $table->string('referral_bonus');
            $table->string('monthly_profit');
            $table->string('days_turnover');
            $table->string('expert_advice');
            $table->string('deposit_bonus');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('investment_packages');
    }
}
