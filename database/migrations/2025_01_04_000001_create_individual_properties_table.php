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
9	1	company_name_2	Okk	2025-09-19 10:09:00	2025-09-19 10:10:08
10	7	company_name_2	Barakath	2025-09-24 22:56:10	2025-09-24 22:56:10
11	9	job_title	Sotfware Developer - Web	2025-09-24 23:02:38	2025-09-24 23:02:38
12	10	job_title	Accountant	2025-09-24 23:42:30	2025-09-24 23:42:30
13	11	job_title	Manager	2025-09-24 23:43:37	2025-09-24 23:43:37
14	12	job_title	Proprietor	2025-09-24 23:44:01	2025-09-24 23:44:01
15	1	profile_photo	https://scontent.fcok2-1.fna.fbcdn.net/v/t39.30808-1/467522586_10230519237877198_4546831028559208705_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=105&ccb=1-7&_nc_sid=1d2534&_nc_ohc=nszridyluxUQ7kNvwH7rtWg&_nc_oc=AdkWn5kCCTzNE_AlvfMfB6U_jeXnAlbusIIL7o6B-GPJF-NwfTZHhe8FRXB3Ie9ZLkR8xFAJ18SZ9X0rhMYk9Q5m&_nc_zt=24&_nc_ht=scontent.fcok2-1.fna&_nc_gid=Rbqhz_V2BNDLL-I44fOKcw&oh=00_AfYe3fmYuM18FXGKt7ZL106vb8Tf7QTvqai_fuOYzRIumw&oe=68DEBCD8	2025-09-28 13:45:27	2025-09-28 13:45:27
16	1	designation	Software Developer	2025-09-29 10:58:01	2025-09-29 10:58:01
17	1	company_address	Barakat Quality Plus LLC, P.O. Box 48989, Dubai - United Arab Emirates	2025-09-29 10:58:01	2025-09-29 10:58:01
18	1	phone	+971557761485	2025-09-29 10:58:01	2025-09-29 10:58:01
19	1	email	me@firumon.com	2025-09-29 10:58:01	2025-09-29 10:58:01
20	6	profile_photo	https://i.ibb.co/QF2sYwvj/PP2.jpg	2025-09-29 19:29:14	2025-09-30 09:58:44
21	6	mobile_number	+919495155550	2025-09-29 19:29:14	2025-09-29 19:29:14
22	6	email	me@firumon.com	2025-09-29 19:29:14	2025-09-29 19:29:14
23	6	whatsapp	+919495155550	2025-09-29 19:29:14	2025-09-29 19:29:14
24	6	messenger	https://facebook.com/firose.hussain	2025-09-29 19:29:14	2025-09-29 19:29:14
25	6	designation	Software Developer	2025-09-29 19:37:03	2025-09-29 19:37:03';
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
