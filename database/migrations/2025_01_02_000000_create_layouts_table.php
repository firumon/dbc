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
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->unique();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('font_primary')->nullable();
            $table->string('font_secondary')->nullable();
            $table->text('brand_primary')->nullable();
            $table->text('brand_secondary')->nullable();
            $table->text('color_primary')->nullable();
            $table->text('color_secondary')->nullable();
            $table->text('admins')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }
    public $model = \Firumon\DigitalBusinessCard\Models\Layout::class;
    public $prefill = 'id	name	image	description	font_primary	font_secondary	brand_primary	brand_secondary	color_primary	color_secondary	admins	created_at	updated_at
1	GraceCard	https://i.postimg.cc/SsSBMyCX/image-2025-09-08-132839116.png		Poppins	Great Vibes	#73472C		#FFFFFF			2025-09-08 17:36:26	2025-10-01 15:32:32
2	EliteCard	https://i.ibb.co/s9Tk1rgJ/Elite-Card-Preview.png	This layout prominently displays four key contact methods as tappable buttons. Its a clean and modern, suitable with a dark background and white/light text for high contrast.			#222528		#FFFFFF			2025-09-29 19:09:13	2025-10-01 15:43:52
3	ProCard	https://i.postimg.cc/Wzs6f5ZY/DBC-Pro-Card-Layout-Template.png	A neat, single-page mobile profile featuring essential contact details			#3BB650		#FFFFFF			2025-10-01 12:15:26	2025-10-03 11:13:06';
    public function PreFill(){
        $Head = array_map("trim",explode("\t",trim(explode("\n",$this->prefill)[0])));
        $Records = array_map(fn($line) => array_combine($Head,array_map(fn($value) => trim($value) === "" ? null : trim($value),explode("\t",trim($line)))),array_slice(explode("\n",$this->prefill),1));
        (new $this->model)::insert($Records);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout_masters');
    }
};
