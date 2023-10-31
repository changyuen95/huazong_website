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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamp('publish_date')->nullable();
            $table->tinyInteger('pin')->default(0);
            $table->enum('status', ['Pending', 'Active', 'Rejected', 'Cancelled', 'Inactive'])
                ->default('Pending')
                ->comment('Pending, Active, Rejected, Cancelled, Inactive');
            $table->string('created_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
