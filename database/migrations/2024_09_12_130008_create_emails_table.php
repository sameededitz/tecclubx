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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('message_id')->unique()->nullable();
            $table->string('uid')->nullable();
            $table->string('subject')->nullable();          // Subject of the email
            $table->text('body')->nullable();
            $table->string('from')->nullable();        // Body of the email
            $table->string('to');                           // Recipient(s) of the email
            $table->string('cc')->nullable();               // CC recipients
            $table->string('bcc')->nullable();              // BCC recipients
            $table->enum('status', ['draft', 'sent', 'inbox', 'trash'])->default('draft');     // Status (draft, sent)
            $table->boolean('is_starred')->default(false);  // Starred email indicator
            $table->timestamp('received_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->unsignedBigInteger('thread_id')->nullable(); // Track conversation
            $table->foreign('thread_id')->references('id')->on('emails')->onDelete('cascade');
            $table->softDeletes();                          // For mail bin (soft deletes)
            $table->timestamps();                           // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
