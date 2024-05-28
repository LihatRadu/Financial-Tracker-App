<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
           $table->id();
           $table->string('date');
           $table->string('description');
           $table->float('amount');
           $table->string('type');
           $table->timestamps();
    });
    DB::table('transactions')->insert([
      ['date' => '2022-01-01', 'description' => 'Food', 'amount' => 100, 'type' => 'Expense'],
      ['date' => '2022-01-02', 'description' => 'Clothing', 'amount' => 200, 'type' => 'Expense'],
      ['date' => '2022-01-03', 'description' => 'Entertainment', 'amount' => 300, 'type' => 'Expense'],
      ['date' => '2022-01-04', 'description' => 'Other', 'amount' => 400, 'type' => 'Expense'],
      ['date' => '2022-01-05', 'description' => 'Income', 'amount' => 500, 'type' => 'Income'],
      ['date' => '2022-01-06', 'description' => 'Income', 'amount' => 600, 'type' => 'Income'],
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('transactions'); 
    }
};
