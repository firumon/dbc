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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->char('code',4)->index()->unique();
            $table->string('name')->index();
            $table->string('base_url')->nullable();
            $table->text('logo_url')->nullable();
            $table->string('logo_width')->nullable();
            $table->string('logo_height')->nullable();
            $table->text('brand_primary')->nullable();
            $table->text('brand_secondary')->nullable();
            $table->text('color_primary')->nullable();
            $table->text('color_secondary')->nullable();
            $table->text('font_primary')->nullable();
            $table->text('font_secondary')->nullable();
            $table->unsignedBigInteger('layout_id')->index();
            $table->unsignedBigInteger('created_by')->index();
            $table->text('users')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\Company::class;
    public $prefill = 'id	code	name	base_url	logo_url	logo_width	logo_height	brand_primary	brand_secondary	color_primary	color_secondary	font_primary	font_secondary	layout_id	created_by	users	created_at	updated_at
1	BRK	Barakat	https://dbc.xnture.com	https://i.postimg.cc/BbLsfhDV/barakat.png	175	80	#3BB650	#FFFFFF	#FFFFFF	#3BB650			3	2	-11-12-	2025-09-14 23:55:25	2025-10-01 12:31:07
2	TALU	Talu Traders	https://dbc.xnture.com	https://i.ibb.co/NgVkVhPh/Elite-Card.png	100	100	#222528		#FFFFFF				2	2	-15-12-11-16-	2025-09-24 19:57:26	2025-09-30 10:02:18
3	MDRN	Modern	https://dbc.xnture.com	https://scontent.fcok2-1.fna.fbcdn.net/v/t39.30808-6/481952416_1083411840467196_6067442809873013630_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=Lx876HSubrAQ7kNvwE3TgiX&_nc_oc=Adl8LDzljh88qVWKphAfWI8RbvRYEMA-yKi9_QPCbLaT-HWl3aqoQDU4wZdQFkip6m3xJXxtoJMJEtOTaxAkQdRF&_nc_zt=23&_nc_ht=scontent.fcok2-1.fna&_nc_gid=CNi7yri9v1O22zW-QxXr0Q&oh=00_AfZaOKB5aBAOV7iZ6z2tBjzhYQkIC3jypqAbjFrkvT57MA&oe=68DA1CF8	100	100							1	3	-5-	2025-09-24 23:40:32	2025-09-24 23:45:35';
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
        Schema::dropIfExists('companies');
    }
};
