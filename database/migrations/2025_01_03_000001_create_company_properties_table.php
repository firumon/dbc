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
1	1	company_name	Barakat	2025-09-19 06:42:13	2025-09-19 06:44:19
2	1	job_title	Developer	2025-09-19 06:44:19	2025-09-19 06:44:36
3	1	avatar_span_width	75	2025-09-28 13:44:49	2025-09-28 14:34:36
4	1	cover_photo	https://i.postimg.cc/MH9cksL4/Grace-Card-Cover-Photo.png	2025-09-28 14:34:13	2025-09-28 14:34:13
5	1	company_address	Barakat Quality Plus LLC, P.O. Box 48989, Dubai - United Arab Emirates	2025-09-29 11:00:47	2025-09-29 11:00:47
6	1	website	https://barakatgroup.ae	2025-09-29 11:00:47	2025-09-29 11:00:47
7	1	facebook	https://www.facebook.com/BarakatUAE	2025-09-29 11:00:47	2025-09-29 11:00:47
8	1	instagram	https://instagram.com/barakatme	2025-09-29 11:00:47	2025-10-01 21:54:48
9	1	youtube	https://www.youtube.com/@barakat_me	2025-09-29 11:03:21	2025-09-29 11:03:21
10	1	company_website	https://barakatgroup.ae	2025-10-01 21:54:48	2025-10-01 21:54:48
11	1	office_number	+97148802121	2025-10-01 21:54:48	2025-10-01 21:54:48
12	1	logo_span	14	2025-10-01 21:56:33	2025-10-01 21:56:33
13	1	profile_photo_span	20	2025-10-01 21:56:33	2025-10-01 21:56:33
14	1	profile_photo	https://i.postimg.cc/4xHqPhss/No-Photo-Male.png	2025-10-03 11:23:38	2025-10-03 11:23:38';
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
