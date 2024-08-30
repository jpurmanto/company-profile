<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("references", function (Blueprint $table): void {
            $table->dropColumn("associate_link");
        });
    }

    public function down(): void
    {
        Schema::table("references", function (Blueprint $table): void {
            $table->string("associate_link")->nullable();
        });
    }
};
