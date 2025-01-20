<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // Task title
            $table->text('description')->nullable(); // Optional task description
            $table->enum('status', ['to_do', 'in_progress', 'done'])->default('to_do'); // Task status
            $table->date('due_date')->nullable();  // Due date
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assigned user
            $table->timestamps();                  // Created at and updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
