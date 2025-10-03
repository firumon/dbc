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
        Schema::create('individual_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_individual_id')->index();
            $table->string('property_name')->nullable()->index();
            $table->text('value')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\IndividualProperty::class;
    public $prefill = 'id	company_individual_id	property_name	value	created_at	updated_at
2	1	profile_photo	https://i.postimg.cc/ncKpVCDc/PP2.jpg	2025-09-28 13:45:27	2025-10-01 21:56:11
3	1	mobile_number	+919495155550	2025-10-01 21:56:11	2025-10-01 21:56:11
4	1	email_address	firose@barakatgroup.ae	2025-10-01 21:56:11	2025-10-01 21:56:11
1	1	designation	Software Developer	2025-09-29 10:58:01	2025-09-29 10:58:01';
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
        Schema::dropIfExists('attrs');
    }
};
