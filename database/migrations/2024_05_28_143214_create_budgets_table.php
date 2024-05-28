<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

 class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->float('amount', 10, 2);
            $table->timestamps();
    });

    DB::table('budgets')->insert([
      ['category' => 'Food', 'amount' => 100],
      ['category' => 'Clothing', 'amount' => 200],
      ['category' => 'Entertainment', 'amount' => 300],
      ['category' => 'Other', 'amount' => 400],
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('budgets'); 
    }
};
