<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateUsersTable extends Migration
{
    public function up()
=======
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
>>>>>>> f63e19980dbe04dce60ac91948c79b8cd116cfc0
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD
            $table->string('phone');
            $table->string('password');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
=======
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
>>>>>>> f63e19980dbe04dce60ac91948c79b8cd116cfc0
