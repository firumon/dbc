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
        Schema::create('layout_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layout_id')->index();
            $table->string('name')->nullable();
            $table->enum('type',['layout','vcard'])->default('vcard');
            $table->binary('image',1)->default(0);
            $table->binary('mandatory',1)->default(0);
            $table->string('property_name')->nullable()->index();
            $table->text('value')->nullable();
            $table->text('params')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\LayoutProperty::class;
    public $prefill = 'id	layout_id	name	type	image	mandatory	property_name	value	params	description	created_at	updated_at
4	1	cover_photo	layout	1	0		https://i.postimg.cc/MH9cksL4/Grace-Card-Cover-Photo.png		Cover photo that should be displayed behind the profile photo avatar	2025-09-28 10:56:53	2025-09-28 10:56:53
7	1	profile_photo	vcard	1	0	profile_photo	https://i.postimg.cc/856Qgs0Q/Default-Profile-Picture.png		Profile photo that should be included in vCard and also to be displayed as main avatar in website	2025-09-28 13:25:07	2025-09-28 13:25:07
9	1	avatar_span_width	layout	0	0		80		The width of avatar photo that should be displayed. The value should be in unit of vw. Default value is 80 means, 80vw..	2025-09-29 10:16:01	2025-09-29 10:16:01
8	1	designation	vcard	0	0	job_title				2025-09-29 10:15:21	2025-09-29 10:15:21
10	1	company_address	vcard	0	0	company_address_full				2025-09-29 10:16:52	2025-09-29 10:16:52
11	1	phone	vcard	0	0	company_phone				2025-09-29 10:17:21	2025-09-29 10:17:21
12	1	email	vcard	0	0	email_address				2025-09-29 10:17:57	2025-09-29 10:17:57
13	1	website	vcard	0	0	company_website				2025-09-29 10:21:05	2025-09-29 10:21:05
14	1	facebook	vcard	0	0	facebook				2025-09-29 10:21:39	2025-09-29 10:21:39
15	1	instagram	vcard	0	0	instagram				2025-09-29 10:21:49	2025-09-29 10:21:49
18	1	youtube	vcard	0	0	youtube				2025-09-29 11:01:36	2025-09-29 11:01:36
19	2	logo_span	layout	0	0		14		A number which denotes the percentage of height of screen height the logo should be spanned	2025-09-29 19:14:20	2025-09-29 19:14:20
20	2	photo_span	layout	0	0		20		A number which denotes the percentage of height of screen height the profile photo should be spanned. An url to the image of face for displaying as Profile Image	2025-09-29 19:15:08	2025-09-29 19:15:08
21	2	profile_photo	vcard	0	0	profile_photo			An url to the image of face for displaying as Profile Image	2025-09-29 19:16:02	2025-09-29 19:16:02
28	2	background_image	layout	1	0				An Url to the image that should be displayed in the background in less opacity mode	2025-09-29 19:52:19	2025-09-29 19:52:19
23	2	mobile_number	vcard	0	0	mobile_number				2025-09-29 19:16:55	2025-09-29 19:16:55
24	2	email	vcard	0	0	email_address				2025-09-29 19:17:15	2025-09-29 19:17:15
25	2	whatsapp	vcard	0	0	whatsapp				2025-09-29 19:17:31	2025-09-29 19:17:31
26	2	messenger	vcard	0	0	facebook_messenger				2025-09-29 19:20:53	2025-09-29 19:20:53
27	2	designation	vcard	0	0	job_title				2025-09-29 19:35:26	2025-09-29 19:35:26
29	3	designation	vcard	0	0	job_title				2025-10-01 12:19:32	2025-10-01 12:19:32
33	3	profile_photo	vcard	1	0	profile_photo				2025-10-01 12:21:51	2025-10-01 12:21:51
31	3	mobile_number	vcard	0	0	mobile_number				2025-10-01 12:20:37	2025-10-01 12:20:37
32	3	email_address	vcard	0	0	email_address				2025-10-01 12:20:53	2025-10-01 12:20:53
34	3	office_number	vcard	0	0	company_phone				2025-10-01 12:23:39	2025-10-01 12:23:39
35	3	company_website	vcard	0	0	company_website				2025-10-01 12:23:55	2025-10-01 12:23:55
36	3	instagram	vcard	0	0	instagram				2025-10-01 12:24:33	2025-10-01 12:24:33
37	3	logo_span	layout	0	0		14			2025-10-01 21:22:10	2025-10-01 21:22:10
38	3	profile_photo_span	layout	0	0		20			2025-10-01 21:40:57	2025-10-01 21:40:57';
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
        Schema::dropIfExists('layout_property_masters');
    }
};
