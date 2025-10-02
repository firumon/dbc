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
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['Administrator','Developer','Reseller','Manager','Individual']);
            $table->unsignedBigInteger('created_by')->nullable()->index();
            $table->timestamps();
        });

        $this->addDeveloper();
        $this->PreFill();
    }

    public function addDeveloper(): void {
        \Firumon\DigitalBusinessCard\Models\User::create(['name' => 'Firose Hussain','role' => 'Developer','email' => 'me@firumon.com', 'password' => 123456]);
    }
    public $model = \Firumon\DigitalBusinessCard\Models\User::class;
    public $prefill = 'id	name	email	password	role	created_by	created_at	updated_at
2	Nishad Manayat	nishad@xnture.com	$2y$12$MmP6xYiTA6fcz96f54WHGuX4QnYiVqo/18me48mprLRdh2H.LqhPS	Administrator		2025-09-11 08:49:01	2025-09-14 07:43:15
3	Mujeeb Rahman	muju@xnture.com	$2y$12$UVfNdYf./t.dTN96bEuol.QLve1uOzvdVQqezcF4T7be0.40Li4Q6	Reseller	2	2025-09-13 11:51:10	2025-09-13 11:51:45
4	Firose	admin@firumon.com	$2y$12$J6PBc1/LR.EvsCwBLU4oxeBsObOvfym5aNHxzHFb0aeygUzHcKcU2	Administrator		2025-09-13 23:50:09	2025-09-13 23:50:09
5	Suhu	suhu@xnture.com	$2y$12$UVfNdYf./t.dTN96bEuol.QLve1uOzvdVQqezcF4T7be0.40Li4Q6	Manager	3	2025-09-13 11:51:10	2025-09-13 11:51:45
6	Ali	ali@xnture.com	$2y$12$gLwHZiCr7FlrJyIk5nwa7ut/0JMb8fCRBPBSKS6FdT69LgHPlOyPG	Administrator	1	2025-09-14 07:43:47	2025-09-14 07:43:47
7	Farish Tahani	fari@xnture.com	$2y$12$tXPfIWaFMHLyY7ZLUr8Hluyip5ma0IeVHsGi1JCIjSARXruHHHHH2	Reseller	2	2025-09-14 07:44:35	2025-09-14 07:45:10
8	Ali CM	cm@xnture.com	$2y$12$tXPfIWaFMHLyY7ZLUr8Hluyip5ma0IeVHsGi1JCIjSARXruHHHHH2	Reseller	6	2025-09-14 07:44:35	2025-09-14 07:45:10
11	Talishu	tali@firumon.com	$2y$12$QwoXvsMLAwBdAlHDgDx4XuwL3zYKjCr0c/STi7c13W0PKqbpMRpFe	Manager	2	2025-09-20 15:10:25	2025-09-20 16:38:00
12	angroos	angrus@firumon.com	$2y$12$YwM2UTPI4H1epy7ZSV1dJ.AuAaI9pjireRg0fbf6fnjtDRMyPhLH.	Manager	2	2025-09-20 15:26:36	2025-09-20 16:39:37
14	Firose Hussain	firo@firumon.com	$2y$12$jugmUvxmTvyjAOpNqU4kweWbH33kNqxfqWq4hgpNdA4TZ4b9YcLV.	Individual	2	2025-09-21 17:58:29	2025-09-21 18:39:22
15	Rafshi	rafshi@firumon.com	$2y$12$Z1qtsTS.2TJIJBjg3It/.uqoTtKQ7aAVvY647akk9u4N/E862Zyme	Manager	2	2025-09-24 20:22:57	2025-09-24 20:22:57
16	Ziwa	ziw@firumon.com	$2y$12$3br.nnA5LWmQPMzIiz3eWeAdD2CFgv3S/AD2HhUOv6.brLF1gWImK	Manager	2	2025-09-24 21:59:07	2025-09-24 21:59:07
17	Pachu	pachu@firumon.com	$2y$12$gFPg8w79WoKbXhqupr74te8ZuzEnFTv2Qr6PYG7nqEm9sGDm1Ivni	Individual	11	2025-09-24 23:19:17	2025-09-24 23:19:17
18	Hussain	hus@firumon.com	$2y$12$eUo.OrRNb6QMFX1UZfSOPukQ7lfO8qw5rVhkp3JezrzWScjyU0OSK	Individual	11	2025-09-24 23:21:00	2025-09-24 23:21:00';
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }
};
