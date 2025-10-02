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
        Schema::create('company_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->index();
            $table->string('property_name')->nullable()->index();
            $table->text('value')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\CompanyProperty::class;
    public $prefill = 'id	company_id	property_name	value	created_at	updated_at
14	1	company_name	Barakat	2025-09-19 06:42:13	2025-09-19 06:44:19
15	1	job_title	Developer	2025-09-19 06:44:19	2025-09-19 06:44:36
16	2	company_name	TALU TRADERS PVT LTD	2025-09-24 22:19:05	2025-09-24 22:19:05
17	3	company_name	Modern Restaurant	2025-09-24 23:41:20	2025-09-24 23:41:20
18	1	avatar_span_width	75	2025-09-28 13:44:49	2025-09-28 14:34:36
19	1	cover_photo	https://i.postimg.cc/MH9cksL4/Grace-Card-Cover-Photo.png	2025-09-28 14:34:13	2025-09-28 14:34:13
20	1	company_address	Barakat Quality Plus LLC, P.O. Box 48989, Dubai - United Arab Emirates	2025-09-29 11:00:47	2025-09-29 11:00:47
21	1	website	https://barakatgroup.ae	2025-09-29 11:00:47	2025-09-29 11:00:47
22	1	facebook	https://www.facebook.com/BarakatUAE	2025-09-29 11:00:47	2025-09-29 11:00:47
23	1	instagram	https://www.instagram.com/barakatme	2025-09-29 11:00:47	2025-09-29 11:00:47
24	1	youtube	https://www.youtube.com/@barakat_me	2025-09-29 11:03:21	2025-09-29 11:03:21
25	2	logo_span	14	2025-09-29 19:25:16	2025-09-29 19:25:16
26	2	photo_span	20	2025-09-29 19:25:16	2025-09-29 19:25:16
27	2	background_profile	https://i.ibb.co/BHcVFWqy/4V2A5782.jpg	2025-09-29 19:27:52	2025-09-29 19:27:52
28	2	background_image	https://i.ibb.co/BHcVFWqy/4V2A5782.jpg	2025-09-30 08:50:01	2025-09-30 08:50:01';
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
        Schema::dropIfExists('layouts');
    }
};
