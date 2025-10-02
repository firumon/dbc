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
        Schema::create('company_individuals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->index();
            $table->char('code',8)->index()->unique();
            $table->string('name')->nullable();
            $table->text('users')->nullable();
            $table->timestamps();
        });
        $this->PreFill();
    }

    public $model = \Firumon\DigitalBusinessCard\Models\CompanyIndividual::class;
    public $prefill = 'id	company_id	code	name	users	created_at	updated_at
1	1	BRK0001	Firose Hussain	-14-	2025-09-18 18:56:48	2025-09-25 19:52:27
2	1	BRK0002	Ghazen Asad Hussain		2025-09-18 18:58:05	2025-09-25 19:51:03
3	1	BRK0003	Hadiya Ziwa Hussain		2025-09-18 18:58:28	2025-09-18 18:58:28
4	1	BKTH0001	Talish Rayn Hussain		2025-09-18 19:03:18	2025-09-18 19:03:18
5	1	BKTH0002	Jannah		2025-09-22 23:37:38	2025-09-22 23:38:03
6	2	TALU0003	Firose Hussain		2025-09-24 22:18:18	2025-09-30 10:04:05
7	1	BKTH0004	Pachu	-17-	2025-09-24 22:55:57	2025-09-24 23:19:17
8	2	TALU0005	Azad		2025-09-24 22:56:24	2025-09-24 22:56:24
9	2	TALU0006	Hussain	-18-	2025-09-24 23:02:12	2025-09-25 19:47:04
10	3	MDRN0001	Anvar		2025-09-24 23:40:46	2025-09-25 19:52:13
11	3	MDRN0002	Noorudheen		2025-09-24 23:43:30	2025-09-24 23:43:30
12	3	MDRN0003	Basheer		2025-09-24 23:43:49	2025-09-24 23:43:49';
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
        Schema::dropIfExists('individuals');
    }
};
