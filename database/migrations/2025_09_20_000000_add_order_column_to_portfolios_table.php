<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasColumn('portfolios', 'order_column')) {
            Schema::table('portfolios', function (Blueprint $table) {
                $table->integer('order_column')->default(0);
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('portfolios', 'order_column')) {
            Schema::table('portfolios', function (Blueprint $table) {
                $table->dropColumn('order_column');
            });
        }
    }
};
