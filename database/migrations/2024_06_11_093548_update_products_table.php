<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('products', function (Blueprint $table) {
            // Thêm ví dụ: sửa đổi cột hiện tại
            $table->decimal('price', 10, 2)->change(); // Thay đổi độ chính xác của cột price
            $table->unsignedInteger('discount')->default(0)->after('price'); // Thêm cột mới sau cột price

            // Thêm cột mới
            $table->unsignedInteger('stock')->default(0)->after('quantity'); // Thêm cột stock mới
            
            // Xóa cột
            $table->dropColumn('bill'); // Nếu không cần cột bill nữa
        });
    }

    public function down(): void {
        Schema::table('products', function (Blueprint $table) {
            // Hoàn tác các thay đổi ở hàm up()
            $table->decimal('price', 8, 2)->change(); // Đưa cột price về trạng thái ban đầu
            $table->dropColumn('discount'); // Xóa cột discount
            $table->dropColumn('stock'); // Xóa cột stock
            $table->unsignedInteger('bill')->default(0); // Thêm lại cột bill nếu cần
        });
    }
};
