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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->unique();
            $table->unsignedBigInteger('v_card_property_id')->nullable()->index();
            $table->text('value')->nullable();
            $table->text('params')->nullable();
            $table->text('description')->nullable();
            $table->text('example')->nullable();
            $table->timestamps();
        });

        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\Property::class;
    public $prefill = 'id	name	v_card_property_id	value	params	description	example	created_at	updated_at
3	full_name	4		{}	Full name of the individual that should be included in vCard	Firose Hussain	2025-09-28 11:10:04	2025-09-28 11:10:04
4	job_title	19		{}	Title of the Job or Position in the Company.		2025-09-28 12:03:58	2025-09-28 12:03:58
5	company_name	22		{}	Name of the company		2025-09-28 12:05:14	2025-09-28 12:05:14
6	company_address_full	12		{"TYPE":"work"}	The address of the company. The full address which will have Door no, Floor, Building Name, Street, Locality, City, Country and Post Code..		2025-09-28 12:17:34	2025-09-28 12:17:34
7	company_address_formated	11		{"TYPE":"work"}	The address of the company in vCard addressing format. The format is like, <PO Box>;<Extended>;<Street>;<City>;<State>;<Postal>;<Country>	12169;;Al Najda Street;Al Wahda;Abu Dhabi;;UAE	2025-09-28 12:24:09	2025-09-28 12:24:09
8	company_phone	13		{"TYPE":"work"}	Phone number of the company in full format, prepending + & country code		2025-09-28 12:26:25	2025-09-28 12:26:25
9	personal_phone	13		{"TYPE":"home"}	Personal phone number in full format, including + and country code		2025-09-28 12:34:42	2025-09-28 12:34:42
10	mobile_number	13		{"TYPE":"cell"}	Mobile number of the individual with + and country code		2025-09-28 12:35:43	2025-09-28 12:35:43
11	whatsapp	13		{"TYPE":"msg,whatsapp"}	WhatsApp number of the individual. The number should be in full format by adding + and country code		2025-09-28 13:16:16	2025-09-28 13:16:16
12	email_address	14		{"TYPE":"internet"}	Email Address of the individual		2025-09-28 13:19:57	2025-09-28 13:19:57
13	company_website	42		{"TYPE":"work"}	The company website		2025-09-28 13:22:28	2025-09-28 13:22:28
14	profile_photo	7		{}	The main image of the individual that to be used as Avatar/Display Photo		2025-09-28 13:24:31	2025-09-28 13:24:31
15	facebook	44		{"TYPE":"facebook"}	The full url including https:// to the facebook profile or page		2025-09-28 18:28:51	2025-09-28 18:28:51
16	instagram	44		{"TYPE":"instagram"}	The full url including https:// to the instagram profile		2025-09-28 18:29:26	2025-09-28 18:29:26
17	linkedin	44		{"TYPE":"linkedin"}	The full url including https:// to the linkedin profile		2025-09-28 18:29:56	2025-09-28 18:29:56
19	twitter	44		{"TYPE":"twitter"}	The full url including https:// to the twitter profile		2025-09-29 10:11:01	2025-09-29 10:11:01
20	pinterest	44		{"TYPE":"pinterest"}	The full url like https://www.pinterest.com/<username>/		2025-09-29 10:28:08	2025-09-29 10:28:08
21	youtube	44		{"TYPE":"youtube"}	The url to youtube handle like https://www.youtube.com/@<handle>, https://www.youtube.com/c/<customname>, https://www.youtube.com/channel/<channelID>		2025-09-29 10:29:09	2025-09-29 10:29:09
22	tiktok	44		{"TYPE":"tiktok"}	https://www.tiktok.com/@<username>		2025-09-29 10:29:51	2025-09-29 10:29:51
23	twitch	44		{"TYPE":"twitch"}	https://www.twitch.tv/<username>		2025-09-29 10:30:12	2025-09-29 10:30:12
24	snapchat	44		{"TYPE":"snapchat"}	https://www.snapchat.com/add/<username>		2025-09-29 10:38:29	2025-09-29 10:38:29
25	telegram	44		{"TYPE":"telegram"}	https://t.me/<username>		2025-09-29 10:39:06	2025-09-29 10:39:06
26	spotify	44		{"TYPE":"spotify"}	https://open.spotify.com/user/<username>		2025-09-29 10:39:29	2025-09-29 10:39:29
27	discord	44		{"TYPE":"discord"}	https://discord.gg/<invitecode>		2025-09-29 10:39:45	2025-09-29 10:39:45
28	github	44		{"TYPE":"github"}	https://github.com/<username>		2025-09-29 10:40:07	2025-09-29 10:40:07
29	medium	44		{"TYPE":"medium"}	https://<username>.medium.com		2025-09-29 10:40:23	2025-09-29 10:40:23
30	soundcloud	44		{"TYPE":"soundcloud"}	https://soundcloud.com/<username>		2025-09-29 10:40:43	2025-09-29 10:40:43
31	reddit	44		{"TYPE":"reddit"}	https://www.reddit.com/user/<username>		2025-09-29 10:41:02	2025-09-29 10:41:02
32	facebook_messenger	44		{"TYPE":"messenger"}	Facebook Messenger. The full url including https:// to the facebook profile or page		2025-09-29 19:20:24	2025-09-29 19:20:24';
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
        Schema::dropIfExists('property_masters');
    }
};
