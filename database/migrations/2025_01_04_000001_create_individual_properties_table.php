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
1	1	designation	Managing Director	2025-10-03 14:52:40	2025-10-03 14:52:40
2	2	designation	General Manager - Process & Product Excellence	2025-10-03 14:52:40	2025-10-03 14:52:40
3	3	designation	Omni - Channel Sales Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
4	4	designation	Vice President - Commercial	2025-10-03 14:52:40	2025-10-03 14:52:40
5	5	designation	General Manager - Marketing	2025-10-03 14:52:40	2025-10-03 14:52:40
6	6	designation	General Manager - Manufacturing Operations	2025-10-03 14:52:40	2025-10-03 14:52:40
7	7	designation	Vice President - Supply Chain Management	2025-10-03 14:52:40	2025-10-03 14:52:40
8	8	designation	Group Head of Procurement	2025-10-03 14:52:40	2025-10-03 14:52:40
9	9	designation	Asst. Production Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
10	10	designation	Sr. Sales Executive	2025-10-03 14:52:40	2025-10-03 14:52:40
11	11	designation	Sales Lead - Horeca	2025-10-03 14:52:40	2025-10-03 14:52:40
12	12	designation	Centeral Purchase Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
13	13	designation	Sales Lead	2025-10-03 14:52:40	2025-10-03 14:52:40
14	14	designation	Associate B D Manager Café & Restaurant	2025-10-03 14:52:40	2025-10-03 14:52:40
15	15	designation	Sales Lead Cafe & Restaurant	2025-10-03 14:52:40	2025-10-03 14:52:40
16	16	designation	Key Accounts Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
17	17	designation	Sales Manager-Hospitality	2025-10-03 14:52:40	2025-10-03 14:52:40
18	18	designation	Executive Chef - Ice Cream	2025-10-03 14:52:40	2025-10-03 14:52:40
19	19	designation	Senior Technical Consultant	2025-10-03 14:52:40	2025-10-03 14:52:40
20	20	designation	Associate Manager- Hospitality	2025-10-03 14:52:40	2025-10-03 14:52:40
21	21	designation	Channel Manager - Hospitality	2025-10-03 14:52:40	2025-10-03 14:52:40
22	22	designation	Channel Manager Cafes, Restaurants & Ecommerce	2025-10-03 14:52:40	2025-10-03 14:52:40
23	23	designation	Associate Category Manager- Marketing	2025-10-03 14:52:40	2025-10-03 14:52:40
24	24	designation	Manager - Procurement	2025-10-03 14:52:40	2025-10-03 14:52:40
25	25	designation	Sales Executive Cafe & Restaurant	2025-10-03 14:52:40	2025-10-03 14:52:40
26	26	designation	Enterprise Application Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
27	27	designation	Manager-Culinary Development	2025-10-03 14:52:40	2025-10-03 14:52:40
28	28	designation	Sr. Category Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
29	29	designation	Business Development Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
30	30	designation	Manager- Hospitality • Commercial Sales	2025-10-03 14:52:40	2025-10-03 14:52:40
31	31	designation	Manager - Ecommerce	2025-10-03 14:52:40	2025-10-03 14:52:40
32	32	designation	Procurement Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
33	33	designation	Category Management Executive	2025-10-03 14:52:40	2025-10-03 14:52:40
34	34	designation	Sr. Buyer-Procurement	2025-10-03 14:52:40	2025-10-03 14:52:40
35	35	designation	Purchase Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
36	36	designation	Senior Buyer	2025-10-03 14:52:40	2025-10-03 14:52:40
37	37	designation	General Manager - Digital, Information & Technology	2025-10-03 14:52:40	2025-10-03 14:52:40
38	38	designation	Lead-Maintenance Supervisor	2025-10-03 14:52:40	2025-10-03 14:52:40
39	39	designation	Maintenance Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
40	40	designation	Senior Manager – New Product Development	2025-10-03 14:52:40	2025-10-03 14:52:40
41	41	designation	Associate Manager - Sales	2025-10-03 14:52:40	2025-10-03 14:52:40
42	42	designation	Sales Executive – Café and Restaurants	2025-10-03 14:52:40	2025-10-03 14:52:40
43	43	designation	Sales Lead - Hospitality	2025-10-03 14:52:40	2025-10-03 14:52:40
44	44	designation	Van Sales Executive	2025-10-03 14:52:40	2025-10-03 14:52:40
45	45	designation	Senior Sales Executive	2025-10-03 14:52:40	2025-10-03 14:52:40
46	46	designation	Assistant – Business Development Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
47	47	designation	Sales Lead - Retail	2025-10-03 14:52:40	2025-10-03 14:52:40
48	48	designation	Senior Manager - Distribution and Logistics	2025-10-03 14:52:40	2025-10-03 14:52:40
49	49	designation	PMC Projects & Engineering	2025-10-03 14:52:40	2025-10-03 14:52:40
50	50	designation	Sales Executive	2025-10-03 14:52:40	2025-10-03 14:52:40
51	51	designation	Associate Manager - Procurement	2025-10-03 14:52:40	2025-10-03 14:52:40
52	52	designation	Associate Buyer	2025-10-03 14:52:40	2025-10-03 14:52:40
53	53	designation	Associate Manager Fleet Operations	2025-10-03 14:52:40	2025-10-03 14:52:40
54	54	designation	Associate Manager - Quality Control & Assurance	2025-10-03 14:52:40	2025-10-03 14:52:40
55	55	designation	Associate Manager – Quality Control & Assurance	2025-10-03 14:52:40	2025-10-03 14:52:40
56	56	designation	Associate Manager – Quality Control & Assurance	2025-10-03 14:52:40	2025-10-03 14:52:40
57	57	designation	Quality Control & Assurance Manager	2025-10-03 14:52:40	2025-10-03 14:52:40
58	58	designation	Senior Manager – New Product Development	2025-10-03 14:52:40	2025-10-03 14:52:40
59	59	designation	Sr. Administrative Officer	2025-10-03 14:52:40	2025-10-03 14:52:40
60	60	designation	Admin Officer	2025-10-03 14:52:40	2025-10-03 14:52:40
61	61	designation	HR	2025-10-03 14:52:40	2025-10-03 14:52:40
62	62	designation	Channel Manager CNR	2025-10-03 14:52:40	2025-10-03 14:52:40
63	1	mobile_number	+971557492205	2025-10-03 14:52:40	2025-10-03 14:52:40
64	1	email_address	kenneth@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
65	2	mobile_number	+971502362380	2025-10-03 14:52:40	2025-10-03 14:52:40
66	2	email_address	prapthi@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
67	3	email_address	ahmad.e@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
68	3	mobile_number	+971562191067	2025-10-03 14:52:40	2025-10-03 14:52:40
69	4	email_address	dinesh.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
70	4	mobile_number	+971529836483	2025-10-03 14:52:40	2025-10-03 14:52:40
71	5	profile_photo	https://i.postimg.cc/nrLwDX38/No-Photo-Femal.png	2025-10-03 14:52:40	2025-10-03 14:52:40
72	5	email_address	srilakshmi@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
73	5	mobile_number	+971543087466	2025-10-03 14:52:40	2025-10-03 14:52:40
74	6	email_address	rajesh.k@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
75	6	mobile_number	+971564006220	2025-10-03 14:52:40	2025-10-03 14:52:40
76	7	mobile_number	+971564001210	2025-10-03 14:52:40	2025-10-03 14:52:40
77	7	email_address	arshad.s@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
78	8	email_address	siddharth.g@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
79	8	mobile_number	+971504573248	2025-10-03 14:52:40	2025-10-03 14:52:40
80	9	mobile_number	+971564333569	2025-10-03 14:52:40	2025-10-03 14:52:40
81	9	email_address	phelistas.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
82	10	mobile_number	+971568992223	2025-10-03 14:52:40	2025-10-03 14:52:40
83	10	email_address	suresh.s@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
84	11	mobile_number	+971564334301	2025-10-03 14:52:40	2025-10-03 14:52:40
85	11	email_address	junaid.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
86	12	mobile_number	+971505535285	2025-10-03 14:52:40	2025-10-03 14:52:40
87	12	email_address	phalgun@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
88	13	mobile_number	+971569951482	2025-10-03 14:52:40	2025-10-03 14:52:40
89	13	email_address	manel.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
90	14	mobile_number	+971506904659	2025-10-03 14:52:40	2025-10-03 14:52:40
91	14	email_address	anand.p@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
92	15	mobile_number	+971566306058	2025-10-03 14:52:40	2025-10-03 14:52:40
93	15	email_address	kim.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
94	16	mobile_number	+971565010716	2025-10-03 14:52:40	2025-10-03 14:52:40
95	16	email_address	walid.n@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
96	17	mobile_number	+971505251233	2025-10-03 14:52:40	2025-10-03 14:52:40
97	17	email_address	shanavas.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
98	18	mobile_number	+971503568908	2025-10-03 14:52:40	2025-10-03 14:52:40
99	18	email_address	karl.h@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
100	19	mobile_number	+971505323190	2025-10-03 14:52:40	2025-10-03 14:52:40
101	19	email_address	neil.r@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
102	20	mobile_number	+971564748597	2025-10-03 14:52:40	2025-10-03 14:52:40
103	20	email_address	milan.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
104	21	mobile_number	+971562189743	2025-10-03 14:52:40	2025-10-03 14:52:40
105	21	email_address	rohan.t@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
106	22	mobile_number	+971565560247	2025-10-03 14:52:40	2025-10-03 14:52:40
107	22	email_address	yasir.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
108	23	mobile_number	+971564220281	2025-10-03 14:52:40	2025-10-03 14:52:40
109	23	email_address	fawaz.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
110	24	mobile_number	+971507290480	2025-10-03 14:52:40	2025-10-03 14:52:40
111	24	email_address	ismail.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
112	25	mobile_number	+971565043419	2025-10-03 14:52:40	2025-10-03 14:52:40
113	25	email_address	jerome.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
114	26	mobile_number	+971565035541	2025-10-03 14:52:40	2025-10-03 14:52:40
115	26	email_address	abshar.r@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
116	27	mobile_number	+971564331974	2025-10-03 14:52:40	2025-10-03 14:52:40
117	27	email_address	tiaan.w@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
118	28	mobile_number	+971502108219	2025-10-03 14:52:40	2025-10-03 14:52:40
119	28	email_address	kartik.d@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
120	29	mobile_number	+971562189729	2025-10-03 14:52:40	2025-10-03 14:52:40
121	29	email_address	deepak.t@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
122	30	mobile_number	+971565377930	2025-10-03 14:52:40	2025-10-03 14:52:40
123	30	email_address	mohit.s@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
124	31	mobile_number	+971565043469	2025-10-03 14:52:40	2025-10-03 14:52:40
125	31	email_address	abhishek@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
126	32	mobile_number	+971507649324	2025-10-03 14:52:40	2025-10-03 14:52:40
127	32	email_address	asif.k@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
128	33	mobile_number	+971543261254	2025-10-03 14:52:40	2025-10-03 14:52:40
129	33	email_address	arjun.s@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
130	34	mobile_number	+971543087433	2025-10-03 14:52:40	2025-10-03 14:52:40
131	34	email_address	yousuf.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
132	35	mobile_number	+971561977791	2025-10-03 14:52:40	2025-10-03 14:52:40
133	35	email_address	george@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
134	36	mobile_number	+971552378737	2025-10-03 14:52:40	2025-10-03 14:52:40
135	36	email_address	vivek.t@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
136	36	office_number	+971588606909	2025-10-03 14:52:40	2025-10-03 14:52:40
137	37	mobile_number	+971543087431	2025-10-03 14:52:40	2025-10-03 14:52:40
138	37	email_address	jayaraj.p@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
139	38	mobile_number	+971564331702	2025-10-03 14:52:40	2025-10-03 14:52:40
140	38	email_address	arun.p@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
141	39	mobile_number	+971526763585	2025-10-03 14:52:40	2025-10-03 14:52:40
142	39	email_address	aswin.k@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
143	40	mobile_number	+971504832403	2025-10-03 14:52:40	2025-10-03 14:52:40
144	40	email_address	sooraj.c@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
145	41	mobile_number	+971505451706	2025-10-03 14:52:40	2025-10-03 14:52:40
146	41	email_address	chet.n@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
147	42	mobile_number	+971529421853	2025-10-03 14:52:40	2025-10-03 14:52:40
148	42	email_address	Jemy.J@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
149	43	mobile_number	+971564001505	2025-10-03 14:52:40	2025-10-03 14:52:40
150	43	email_address	Risamer.B@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
151	44	mobile_number	+971507675637	2025-10-03 14:52:40	2025-10-03 14:52:40
152	44	email_address	A.Kabeer@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
153	45	mobile_number	+971566652603	2025-10-03 14:52:40	2025-10-03 14:52:40
154	45	email_address	abdul.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
155	46	mobile_number	+971501898017	2025-10-03 14:52:40	2025-10-03 14:52:40
156	46	email_address	hassan.e@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
157	47	mobile_number	+971564003704	2025-10-03 14:52:40	2025-10-03 14:52:40
158	47	email_address	jithin.J@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
159	48	mobile_number	+971565349487	2025-10-03 14:52:40	2025-10-03 14:52:40
160	48	email_address	parwaiz.w@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
161	49	mobile_number	+971543068387	2025-10-03 14:52:40	2025-10-03 14:52:40
162	49	email_address	Abhishek.P@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
163	50	mobile_number	+971563987573	2025-10-03 14:52:40	2025-10-03 14:52:40
164	50	email_address	sabin.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
165	51	mobile_number	+971503130911	2025-10-03 14:52:40	2025-10-03 14:52:40
166	51	email_address	asaraf.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
167	52	mobile_number	+971564330185	2025-10-03 14:52:40	2025-10-03 14:52:40
168	52	email_address	govind.n@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
169	53	mobile_number	+971543079350	2025-10-03 14:52:40	2025-10-03 14:52:40
170	53	email_address	faisal.k@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
171	54	email_address	jithin.t@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
172	54	mobile_number	+971564331697	2025-10-03 14:52:40	2025-10-03 14:52:40
173	55	mobile_number	+971501374722	2025-10-03 14:52:40	2025-10-03 14:52:40
174	55	email_address	nidhin.s@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
175	56	mobile_number	+971564331698	2025-10-03 14:52:40	2025-10-03 14:52:40
176	56	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
177	56	email_address	amal.b@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
178	57	mobile_number	+971564331696	2025-10-03 14:52:40	2025-10-03 14:52:40
179	57	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
180	57	email_address	hisham.m@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
181	58	mobile_number	+971504832403	2025-10-03 14:52:40	2025-10-03 14:52:40
182	58	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
183	58	email_address	sooraj.c@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
184	59	mobile_number	+971557832943	2025-10-03 14:52:40	2025-10-03 14:52:40
185	59	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
186	59	email_address	ratheesh.a@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
187	60	mobile_number	+971562189673	2025-10-03 14:52:40	2025-10-03 14:52:40
188	60	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
189	60	email_address	ajmal@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
190	61	profile_photo	https://i.postimg.cc/nrLwDX38/No-Photo-Femal.png	2025-10-03 14:52:40	2025-10-03 14:52:40
191	61	mobile_number	+971556845923	2025-10-03 14:52:40	2025-10-03 14:52:40
192	61	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40
193	61	email_address	shrutijeeva@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
194	62	mobile_number	+971506904659	2025-10-03 14:52:40	2025-10-03 14:52:40
195	62	email_address	anand.p@barakatgroup.ae	2025-10-03 14:52:40	2025-10-03 14:52:40
196	62	office_number	+97143626080	2025-10-03 14:52:40	2025-10-03 14:52:40';
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
