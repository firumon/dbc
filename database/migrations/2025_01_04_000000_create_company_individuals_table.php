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
1	1	BRK0001	Kenneth D\'Costa		2025-10-03 14:52:40	2025-10-03 14:52:40
2	1	BRK0002	Prapthi Rai		2025-10-03 14:52:40	2025-10-03 14:52:40
3	1	BRK0003	Ahmad El Masri		2025-10-03 14:52:40	2025-10-03 14:52:40
4	1	BRK0004	Dinesh K Menon		2025-10-03 14:52:40	2025-10-03 14:52:40
5	1	BRK0005	Srilakshmi Mukkavilli		2025-10-03 14:52:40	2025-10-03 14:52:40
6	1	BRK0006	Rajesh Kale		2025-10-03 14:52:40	2025-10-03 14:52:40
7	1	BRK0007	Mohammed Arshad Saiyed		2025-10-03 14:52:40	2025-10-03 14:52:40
8	1	BRK0008	Siddharth Gupta		2025-10-03 14:52:40	2025-10-03 14:52:40
9	1	BRK0010	Phelistas Alivista Vunya		2025-10-03 14:52:40	2025-10-03 14:52:40
10	1	BRK0011	Suresh S		2025-10-03 14:52:40	2025-10-03 14:52:40
11	1	BRK0012	Muhammad Junaid		2025-10-03 14:52:40	2025-10-03 14:52:40
12	1	BRK0013	M.Phalgunan		2025-10-03 14:52:40	2025-10-03 14:52:40
13	1	BRK0014	Manal Aouni		2025-10-03 14:52:40	2025-10-03 14:52:40
14	1	BRK0015	Anand Potnis		2025-10-03 14:52:40	2025-10-03 14:52:40
15	1	BRK0016	Nichols Kim Mendoza		2025-10-03 14:52:40	2025-10-03 14:52:40
16	1	BRK0017	Walid Nasr		2025-10-03 14:52:40	2025-10-03 14:52:40
17	1	BRK0018	Shanavas K.M		2025-10-03 14:52:40	2025-10-03 14:52:40
18	1	BRK0019	Karl Heinz Reichert		2025-10-03 14:52:40	2025-10-03 14:52:40
19	1	BRK0020	Neil Ranasinghe		2025-10-03 14:52:40	2025-10-03 14:52:40
20	1	BRK0021	Milan Madhusoodanan		2025-10-03 14:52:40	2025-10-03 14:52:40
21	1	BRK0022	Rohan Tiwari		2025-10-03 14:52:40	2025-10-03 14:52:40
22	1	BRK0023	Yasir Ali Yousuff		2025-10-03 14:52:40	2025-10-03 14:52:40
23	1	BRK0024	Fawaz Ahamed		2025-10-03 14:52:40	2025-10-03 14:52:40
24	1	BRK0025	Mahmoud Ismail		2025-10-03 14:52:40	2025-10-03 14:52:40
25	1	BRK0026	Jerome Benedict M		2025-10-03 14:52:40	2025-10-03 14:52:40
26	1	BRK0027	Abshar Rashid		2025-10-03 14:52:40	2025-10-03 14:52:40
27	1	BRK0028	Tiaan Wessels		2025-10-03 14:52:40	2025-10-03 14:52:40
28	1	BRK0029	Dayal Kartik		2025-10-03 14:52:40	2025-10-03 14:52:40
29	1	BRK0030	Deepak Thankappan		2025-10-03 14:52:40	2025-10-03 14:52:40
30	1	BRK0031	Mohit Sachdeva		2025-10-03 14:52:40	2025-10-03 14:52:40
31	1	BRK0032	Abhishek Rao		2025-10-03 14:52:40	2025-10-03 14:52:40
32	1	BRK0033	Asif K		2025-10-03 14:52:40	2025-10-03 14:52:40
33	1	BRK0034	Arjun Sreelal		2025-10-03 14:52:40	2025-10-03 14:52:40
34	1	BRK0035	Muhammad Yousuf		2025-10-03 14:52:40	2025-10-03 14:52:40
35	1	BRK0036	George Joseph Rodrigues		2025-10-03 14:52:40	2025-10-03 14:52:40
36	1	BRK0037	Vivek Thayyil		2025-10-03 14:52:40	2025-10-03 14:52:40
37	1	BRK0038	Jayaraj Perumalsamy		2025-10-03 14:52:40	2025-10-03 14:52:40
38	1	BRK0039	Arun Padmanabhan		2025-10-03 14:52:40	2025-10-03 14:52:40
39	1	BRK0040	Aswin Kumar Mohanaprasad		2025-10-03 14:52:40	2025-10-03 14:52:40
40	1	BRK0041	Sooraj Chenthamarakshan		2025-10-03 14:52:40	2025-10-03 14:52:40
41	1	BRK0042	Chet Narayan Kandel		2025-10-03 14:52:40	2025-10-03 14:52:40
42	1	BRK0043	Jemy Seban Jose		2025-10-03 14:52:40	2025-10-03 14:52:40
43	1	BRK0044	Risamer Bargo		2025-10-03 14:52:40	2025-10-03 14:52:40
44	1	BRK0045	Abdul Kabeer		2025-10-03 14:52:40	2025-10-03 14:52:40
45	1	BRK0046	Abdul Mannan		2025-10-03 14:52:40	2025-10-03 14:52:40
46	1	BRK0047	Hassan Rahhal		2025-10-03 14:52:40	2025-10-03 14:52:40
47	1	BRK0048	Jithin Jayan		2025-10-03 14:52:40	2025-10-03 14:52:40
48	1	BRK0049	Parwaiz Wasi		2025-10-03 14:52:40	2025-10-03 14:52:40
49	1	BRK0050	Abhishek S. Prasad		2025-10-03 14:52:40	2025-10-03 14:52:40
50	1	BRK0051	Sabin Abraham		2025-10-03 14:52:40	2025-10-03 14:52:40
51	1	BRK0052	Asaraf K Mohammed		2025-10-03 14:52:40	2025-10-03 14:52:40
52	1	BRK0053	Govind G Nair		2025-10-03 14:52:40	2025-10-03 14:52:40
53	1	BRK0054	Faisal Khan		2025-10-03 14:52:40	2025-10-03 14:52:40
54	1	BRK0055	Jithin Gopinath		2025-10-03 14:52:40	2025-10-03 14:52:40
55	1	BRK0056	Nidhin SathyaRaj		2025-10-03 14:52:40	2025-10-03 14:52:40
56	1	BRK0057	Amal Dev B		2025-10-03 14:52:40	2025-10-03 14:52:40
57	1	BRK0058	Hisham M		2025-10-03 14:52:40	2025-10-03 14:52:40
58	1	BRK0059	Sooraj Chenthamarakshan		2025-10-03 14:52:40	2025-10-03 14:52:40
59	1	BRK0060	Ratheesh.AB		2025-10-03 14:52:40	2025-10-03 14:52:40
60	1	BRK0061	Ajmal Abdu		2025-10-03 14:52:40	2025-10-03 14:52:40
61	1	BRK0062	Shruti Jeevaraj VP		2025-10-03 14:52:40	2025-10-03 14:52:40
62	1	BRK0063	ANAND POTNIS		2025-10-03 14:52:40	2025-10-03 14:52:40';
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
