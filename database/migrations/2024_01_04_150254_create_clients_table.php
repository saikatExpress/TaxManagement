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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable();
            $table->string('assessment_year', 50)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('tin_no', 250)->nullable();
            $table->string('mobile_no', 250)->nullable();
            $table->string('nid_no', 250)->nullable();
            $table->string('source_income', 250)->nullable();
            $table->string('circle_of_zone', 250)->nullable();
            $table->string('total_income', 250)->nullable();
            $table->string('net_wealth', 250)->nullable();
            $table->string('tax_paid', 250)->nullable();
            $table->string('previous_net_wealth', 250)->nullable();
            $table->string('business_capital', 250)->nullable();
            $table->string('accretion_in_wealth', 250)->nullable();
            $table->string('non_agriculture_property', 250)->nullable();
            $table->string('agriculture_property', 250)->nullable();
            $table->string('investment', 250)->nullable();
            $table->string('motor_vehicle', 250)->nullable();
            $table->string('jewellery', 250)->nullable();
            $table->string('furniture', 250)->nullable();
            $table->string('electronic_equipment', 250)->nullable();
            $table->string('other_asset', 250)->nullable();
            $table->string('cash_in_hand', 250)->nullable();
            $table->string('liabilities', 250)->nullable();
            $table->string('family_expense', 250)->nullable();
            $table->string('source_of_fund', 250)->nullable();
            $table->string('payment', 250)->nullable();
            $table->string('register_number', 250)->nullable();
            $table->string('remarks', 250)->nullable();
            $table->string('submission_date', 250)->nullable();
            $table->string('status', 10)->default('1')->nullable();
            $table->integer('flag')->default(0)->nullable();
            $table->string('pdf_path', 250)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
