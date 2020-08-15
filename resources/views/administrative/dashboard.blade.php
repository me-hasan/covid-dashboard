@extends('administrative.default')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-filter-area mb-3">
                        <div class="d-flex">
                            <form action="" method="post" class="row">
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="division" id="division_list">
                                        <option value="all">সব বিভাগ</option>
                                        <option class="division-option" value="MYMENSINGH">ময়মনসিংহ</option>
                                        <option class="division-option" value="BARISAL">বরিশাল</option>
                                        <option class="division-option" value="RANGPUR">রংপুর </option>
                                        <option class="division-option" value="SYLHET">সিলেট</option>
                                        <option class="division-option" value="CHATTOGRAM">চট্রগ্রাম </option>
                                        <option class="division-option" value="RAJSHAHI">রাজশাহী </option>
                                        <option class="division-option" value="DHAKA">ঢাকা </option>
                                        <option class="division-option" value="KHULNA">খুলনা </option>
                                    </select>
                                </div>
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="district" id="district_list">
                                        <option value="all">জেলা</option>
                                        <option class="district-option" value="DHAKA" rel="DHAKA">ঢাকা </option>
                                        <option class="district-option" value="CHATTOGRAM" rel="CHATTOGRAM">চট্রগ্রাম </option>
                                        <option class="district-option" value="NARAYANGANJ" rel="DHAKA">নারায়ণগঞ্জ </option>
                                        <option class="district-option" value="COX'S BAZAR" rel="CHATTOGRAM">কক্সবাজার</option>
                                        <option class="district-option" value="FENI" rel="CHATTOGRAM">ফেনী</option>
                                        <option class="district-option" value="GAZIPUR" rel="DHAKA">গাজীপুর </option>
                                        <option class="district-option" value="COMILLA" rel="CHATTOGRAM">কুমিল্লা</option>
                                        <option class="district-option" value="BOGRA" rel="RAJSHAHI">বগুড়া </option>
                                        <option class="district-option" value="SYLHET" rel="SYLHET">সিলেট</option>
                                        <option class="district-option" value="NOAKHALI" rel="CHATTOGRAM">নোয়াখালী </option>
                                        <option class="district-option" value="MYMENSINGH" rel="MYMENSINGH">ময়মনসিংহ</option>
                                        <option class="district-option" value="BARISAL" rel="BARISAL">বরিশাল</option>
                                        <option class="district-option" value="NARSINGDI" rel="DHAKA">নরসিংদী</option>
                                        <option class="district-option" value="KISHOREGANJ" rel="DHAKA">কিশোরগঞ্জ</option>
                                        <option class="district-option" value="FARIDPUR" rel="DHAKA">ফরিদপুর</option>
                                        <option class="district-option" value="KHULNA" rel="KHULNA">খুলনা </option>
                                        <option class="district-option" value="SUNAMGANJ" rel="SYLHET">সুনামগঞ্জ </option>
                                        <option class="district-option" value="RANGPUR" rel="RANGPUR">রংপুর </option>
                                        <option class="district-option" value="LAKSHMIPUR" rel="CHATTOGRAM">লক্ষ্মীপুর </option>
                                        <option class="district-option" value="CHANDPUR" rel="CHATTOGRAM">চাঁদপুর </option>
                                        <option class="district-option" value="BRAHMANBARIA" rel="CHATTOGRAM">ব্রাহ্মণবাড়ীয়া </option>
                                        <option class="district-option" value="DINAJPUR" rel="RANGPUR">দিনাজপুর</option>
                                        <option class="district-option" value="MANIKGANJ" rel="DHAKA">মানিকগঞ্জ </option>
                                        <option class="district-option" value="MADARIPUR" rel="DHAKA">মাদারীপুর </option>
                                        <option class="district-option" value="GOPALGANJ" rel="DHAKA">গোপালগঞ্জ </option>
                                        <option class="district-option" value="JAMALPUR" rel="MYMENSINGH">জামালপুর </option>
                                        <option class="district-option" value="TANGAIL" rel="DHAKA">টাঙ্গাইল </option>
                                        <option class="district-option" value="SHARIATPUR" rel="DHAKA">শরীয়তপুর</option>
                                        <option class="district-option" value="NETROKONA" rel="MYMENSINGH">নেত্রকোনা</option>
                                        <option class="district-option" value="JESSORE" rel="KHULNA">যশোর </option>
                                        <option class="district-option" value="KUSHTIA" rel="KHULNA">কুষ্টিয়া</option>
                                        <option class="district-option" value="NILPHAMARI" rel="RANGPUR">নীলফামারী </option>
                                        <option class="district-option" value="PABNA" rel="RAJSHAHI">পাবনা </option>
                                        <option class="district-option" value="SIRAJGANJ" rel="RAJSHAHI">সিরাজগঞ্জ </option>
                                        <option class="district-option" value="PATUAKHALI" rel="BARISAL">পটুয়াখালী </option>
                                        <option class="district-option" value="NAOGAON" rel="RAJSHAHI">নওগাঁ </option>
                                        <option class="district-option" value="RAJSHAHI" rel="RAJSHAHI">রাজশাহী </option>
                                        <option class="district-option" value="SHERPUR" rel="MYMENSINGH">শেরপুর</option>
                                        <option class="district-option" value="GAIBANDHA" rel="RANGPUR">গাইবান্ধা </option>
                                        <option class="district-option" value="RAJBARI" rel="DHAKA">রাজবাড়ী </option>
                                        <option class="district-option" value="BHOLA" rel="BARISAL">ভোলা </option>
                                        <option class="district-option" value="CHUADANGA" rel="KHULNA">চুয়াডাঙ্গা </option>
                                        <option class="district-option" value="BARGUNA" rel="BARISAL">বরগুনা </option>
                                        <option class="district-option" value="JOYPURHAT" rel="RAJSHAHI">জয়পুরহাট</option>
                                        <option class="district-option" value="PANCHAGARH" rel="RANGPUR">পঞ্চগড় </option>
                                        <option class="district-option" value="JHENAIDAH" rel="KHULNA">ঝিনাইদাহ </option>
                                        <option class="district-option" value="KURIGRAM" rel="RANGPUR">কুড়গ্রিাম </option>
                                        <option class="district-option" value="RANGAMATI" rel="CHATTOGRAM">রাঙ্গামাটি </option>
                                        <option class="district-option" value="BANDARBAN" rel="CHATTOGRAM">বান্দরবান </option>
                                        <option class="district-option" value="BAGERHAT" rel="KHULNA">বাগেরহাট </option>
                                        <option class="district-option" value="SATKHIRA" rel="KHULNA">সাতক্ষীরা </option>
                                        <option class="district-option" value="KHAGRACHHARI" rel="CHATTOGRAM">খাগড়াছড়ি </option>
                                        <option class="district-option" value="NAWABGANJ" rel="RAJSHAHI">নবাবগঞ্জ</option>
                                        <option class="district-option" value="NARAIL" rel="KHULNA">নড়াইল </option>
                                        <option class="district-option" value="LALMONIRHAT" rel="RANGPUR">লালমনরিহাট </option>
                                        <option class="district-option" value="MAGURA" rel="KHULNA">মাগুরা </option>
                                        <option class="district-option" value="MEHERPUR" rel="KHULNA">মহেরেপুর </option>
                                    </select>
                                </div>
                                <div class="dropdown mr-1">
                                    <select class="btn btn-sm btn-custom dropdown-toggle" name="upazilla" id="upazilla_list">
                                        <option value="all">উপজেলা</option>
                                        <option class="upazilla-option" value="AMTALI" rel="BARGUNA">আমতলী</option>
                                        <option class="upazilla-option" value="BAMNA" rel="BARGUNA">বামনা</option>
                                        <option class="upazilla-option" value="BARGUNA-S" rel="BARGUNA">বরগুনা-এস</option>
                                        <option class="upazilla-option" value="BETAGI" rel="BARGUNA">বেতাগী</option>
                                        <option class="upazilla-option" value="PATHARGHATA" rel="BARGUNA">পাথরঘাটা</option>
                                        <option class="upazilla-option" value="TALTALI" rel="BARGUNA">তালতলী</option>
                                        <option class="upazilla-option" value="AGAILJHARA" rel="BARISAL">আগৈলঝাড়া</option>
                                        <option class="upazilla-option" value="BABUGANJ" rel="BARISAL">বাবুগঞ্জে</option>
                                        <option class="upazilla-option" value="BAKERGANJ" rel="BARISAL">বাকেরগঞ্জ</option>
                                        <option class="upazilla-option" value="BANARIPARA" rel="BARISAL">বানারীপাড়া</option>
                                        <option class="upazilla-option" value="BARISHAL-S" rel="BARISAL">বরিশাল-এস</option>
                                        <option class="upazilla-option" value="GOURANADI" rel="BARISAL">গউরানাদি</option>
                                        <option class="upazilla-option" value="HIZLA" rel="BARISAL">হিজলা</option>
                                        <option class="upazilla-option" value="MEHENDIGANJ" rel="BARISAL">মেহেন্দীগঞ্জ</option>
                                        <option class="upazilla-option" value="MULADI" rel="BARISAL">মুলাদী</option>
                                        <option class="upazilla-option" value="UZIRPUR" rel="BARISAL">উজিরপুর</option>
                                        <option class="upazilla-option" value="BHOLA-S" rel="BHOLA">ভোলা-এস</option>
                                        <option class="upazilla-option" value="BORHANUDDIN" rel="BHOLA">বোরহানউদ্দিন</option>
                                        <option class="upazilla-option" value="CHARFASSION" rel="BHOLA"> চ র ্যাশান</option>
                                        <option class="upazilla-option" value="DAULATKHAN" rel="BHOLA">দৌলতখান</option>
                                        <option class="upazilla-option" value="LALMOHAN" rel="BHOLA">লালমোহন</option>
                                        <option class="upazilla-option" value="MONPURA" rel="BHOLA">মনপুরা</option>
                                        <option class="upazilla-option" value="TAZUMUDDIN" rel="BHOLA">তাযুমদ্দিওন</option>
                                        <option class="upazilla-option" value="JHALOKATHI-S" rel="JHALAKATI">ঝালকাঠি-এস</option>
                                        <option class="upazilla-option" value="KATHALIA" rel="JHALAKATI">কাঠালিয়া</option>
                                        <option class="upazilla-option" value="NALCHITY" rel="JHALAKATI">নলছিটি</option>
                                        <option class="upazilla-option" value="RAJAPUR" rel="JHALAKATI">রাজাপুর</option>
                                        <option class="upazilla-option" value="BAUPHAL" rel="PATUAKHALI">বাউফল</option>
                                        <option class="upazilla-option" value="DASHMINA" rel="PATUAKHALI">দশমিনা</option>
                                        <option class="upazilla-option" value="DUMKI" rel="PATUAKHALI">দুমকি</option>
                                        <option class="upazilla-option" value="GALACHIPA" rel="PATUAKHALI">গলাচিপা</option>
                                        <option class="upazilla-option" value="KALAPARA" rel="PATUAKHALI">কলাপাড়া</option>
                                        <option class="upazilla-option" value="MIRJAGANJ" rel="PATUAKHALI">মির্জাগঞ্জ </option>
                                        <option class="upazilla-option" value="PATUAKHALI-S" rel="PATUAKHALI">পটুয়াখালী-এস</option>
                                        <option class="upazilla-option" value="RANGABALI" rel="PATUAKHALI">রাঙ্গাবালি</option>
                                        <option class="upazilla-option" value="BHANDARIA" rel="PIROJPUR">ভান্ডারিয়া</option>
                                        <option class="upazilla-option" value="KAWKHALI" rel="PIROJPUR">কাউখালী</option>
                                        <option class="upazilla-option" value="MATHBARIA" rel="PIROJPUR">মঠবাড়িয়া</option>
                                        <option class="upazilla-option" value="NAZIRPUR" rel="PIROJPUR">নাজিরপুর</option>
                                        <option class="upazilla-option" value="NESARABAD" rel="PIROJPUR">নেছারাবাদ</option>
                                        <option class="upazilla-option" value="PIROJPUR SADAR" rel="PIROJPUR">পিরোজপুর সদর</option>
                                        <option class="upazilla-option" value="ZIANAGAR" rel="PIROJPUR">জিয়ানগর</option>
                                        <option class="upazilla-option" value="ALIKADAM" rel="BANDARBAN">আলীকদম</option>
                                        <option class="upazilla-option" value="BANDARBAN SADAR" rel="BANDARBAN">বান্দরবান সদর</option>
                                        <option class="upazilla-option" value="LAMA" rel="BANDARBAN">লামা</option>
                                        <option class="upazilla-option" value="NAIKHONGCHHARI" rel="BANDARBAN">নাইক্ষ্যংছড়ি</option>
                                        <option class="upazilla-option" value="ROWANGCHHARI" rel="BANDARBAN">রোয়াংছড়ি</option>
                                        <option class="upazilla-option" value="RUMA" rel="BANDARBAN">রুমা</option>
                                        <option class="upazilla-option" value="THANCHI" rel="BANDARBAN">থানচি</option>
                                        <option class="upazilla-option" value="AKHAURA" rel="BRAHMANBARIA">আখাউড়া</option>
                                        <option class="upazilla-option" value="ASHUGANJ" rel="BRAHMANBARIA">আশুগঞ্জ</option>
                                        <option class="upazilla-option" value="BANCHARAMPUR" rel="BRAHMANBARIA">বাঞ্ছারামপুর</option>
                                        <option class="upazilla-option" value="BIJOYNAGAR" rel="BRAHMANBARIA">বিজয়নগর</option>
                                        <option class="upazilla-option" value="BRAHMANBARIA SADAR" rel="BRAHMANBARIA">ব্রাহ্মণবাড়ীয়া সদর</option>
                                        <option class="upazilla-option" value="KASBA" rel="BRAHMANBARIA">কসবা</option>
                                        <option class="upazilla-option" value="NABINAGAR" rel="BRAHMANBARIA">নবীনগর</option>
                                        <option class="upazilla-option" value="NASIRNAGAR" rel="BRAHMANBARIA">নাসিরনগর</option>
                                        <option class="upazilla-option" value="SARAIL" rel="BRAHMANBARIA">সরাইল</option>
                                        <option class="upazilla-option" value="CHANDPUR SADAR" rel="CHANDPUR">চাঁদপুর সদর</option>
                                        <option class="upazilla-option" value="FARIDGANJ" rel="CHANDPUR">ফরিদগঞ্জ</option>
                                        <option class="upazilla-option" value="HAIMCHAR" rel="CHANDPUR">হাইমচর</option>
                                        <option class="upazilla-option" value="HAJIGANJ" rel="CHANDPUR">হাজীগঞ্জ</option>
                                        <option class="upazilla-option" value="KACHUA" rel="CHANDPUR">কচুয়া</option>
                                        <option class="upazilla-option" value="MATLAB DAKSHIN " rel="CHANDPUR">মতলব দক্ষিণ</option>
                                        <option class="upazilla-option" value="MATLAB UTTAR" rel="CHANDPUR">মতলব উত্তর</option>
                                        <option class="upazilla-option" value="SHAHRASTI" rel="CHANDPUR">শাহরাস্তি</option>
                                        <option class="upazilla-option" value="ANOWARA" rel="CHITTAGONG">আনোয়ারা</option>
                                        <option class="upazilla-option" value="BAKALIA" rel="CHITTAGONG">বাকলিয়া থানা</option>
                                        <option class="upazilla-option" value="BANDAR" rel="CHITTAGONG">বন্দর থানা</option>
                                        <option class="upazilla-option" value="BANSHKHALI" rel="CHITTAGONG">বাঁশখালী</option>
                                        <option class="upazilla-option" value="BAYEJID " rel="CHITTAGONG">বায়েজীদ থানা</option>
                                        <option class="upazilla-option" value="BOALKHALI" rel="CHITTAGONG">বোয়ালখালী</option>
                                        <option class="upazilla-option" value="CHANDANAISH" rel="CHITTAGONG">চন্দনাঈশ</option>
                                        <option class="upazilla-option" value="CHANDGAON" rel="CHITTAGONG">চাঁন্দগাও থানা</option>
                                        <option class="upazilla-option" value="DOUBLE MOORING" rel="CHITTAGONG">ডাবলমুরিং থানা</option>
                                        <option class="upazilla-option" value="FATIKCHHARI" rel="CHITTAGONG">ফটিকছড়ি</option>
                                        <option class="upazilla-option" value="HALISHAHAR" rel="CHITTAGONG">হালিশহর থানা</option>
                                        <option class="upazilla-option" value="HATHAZARI" rel="CHITTAGONG">হাটহাজারী</option>
                                        <option class="upazilla-option" value="KHULSHI" rel="CHITTAGONG">খুলশী থানা</option>
                                        <option class="upazilla-option" value="KOTWALI" rel="CHITTAGONG">কোতোয়ালী থানা</option>
                                        <option class="upazilla-option" value="LOHAGARA" rel="CHITTAGONG">লোহাগাড়া</option>
                                        <option class="upazilla-option" value="MIRSHARAI" rel="CHITTAGONG">মীরসরাই</option>
                                        <option class="upazilla-option" value="PAHARTALI" rel="CHITTAGONG">পাহাড়তলী থানা</option>
                                        <option class="upazilla-option" value="PANCHLAISH" rel="CHITTAGONG">পাঁচলাইশ থানা</option>
                                        <option class="upazilla-option" value="PATENGA" rel="CHITTAGONG">পতেঙ্গা থানা</option>
                                        <option class="upazilla-option" value="PATIYA " rel="CHITTAGONG">পটিয়া</option>
                                        <option class="upazilla-option" value="RANGUNIA" rel="CHITTAGONG">রাঙ্গুনিয়া</option>
                                        <option class="upazilla-option" value="RAOZAN" rel="CHITTAGONG">রাউজান</option>
                                        <option class="upazilla-option" value="SANDWIP" rel="CHITTAGONG">সন্দ্বীপ</option>
                                        <option class="upazilla-option" value="SATKANIA" rel="CHITTAGONG">সাতকানিয়া</option>
                                        <option class="upazilla-option" value="SITAKUNDA" rel="CHITTAGONG">সীতাকুণ্ড</option>
                                        <option class="upazilla-option" value="BARURA" rel="COMILLA">বরুড়া</option>
                                        <option class="upazilla-option" value="BRAHMANPARA" rel="COMILLA">ব্রাহ্মণপাড়া</option>
                                        <option class="upazilla-option" value="BURICHANG" rel="COMILLA">বুড়িচং</option>
                                        <option class="upazilla-option" value="CHANDINA" rel="COMILLA">চান্দিনা</option>
                                        <option class="upazilla-option" value="CHAUDDAGRAM" rel="COMILLA">চৌদ্দগ্রাম</option>
                                        <option class="upazilla-option" value="COMILLA ADARSHA SADAR" rel="COMILLA">কুমিল্লা সদর</option>
                                        <option class="upazilla-option" value="COMILLA SADAR DAKSHIN" rel="COMILLA">সদর দক্ষিণ</option>
                                        <option class="upazilla-option" value="DAUDKANDI" rel="COMILLA">দাউদকান্দি</option>
                                        <option class="upazilla-option" value="DEBIDWAR" rel="COMILLA">দেবীদ্বার</option>
                                        <option class="upazilla-option" value="HOMNA" rel="COMILLA">হোমনা</option>
                                        <option class="upazilla-option" value="LAKSHAM" rel="COMILLA">লাকসাম</option>
                                        <option class="upazilla-option" value="MANOHARGANJ" rel="COMILLA">মনোহরগঞ্জ</option>
                                        <option class="upazilla-option" value="MEGHNA" rel="COMILLA">মেঘনা</option>
                                        <option class="upazilla-option" value="MURADNAGAR" rel="COMILLA">মুরাদনগর</option>
                                        <option class="upazilla-option" value="NANGALKOT" rel="COMILLA">নাঙ্গলকোট</option>
                                        <option class="upazilla-option" value="TITAS" rel="COMILLA">তিতাস</option>
                                        <option class="upazilla-option" value="CHAKARIA" rel="COX'S BAZAR">চকরিয়া</option>
                                        <option class="upazilla-option" value="COX'S BAZAR SADAR" rel="COX'S BAZAR">কক্সবাজার সদর</option>
                                        <option class="upazilla-option" value="KUTUBDIA" rel="COX'S BAZAR">কুতুবদিয়া</option>
                                        <option class="upazilla-option" value="MAHESHKHALI" rel="COX'S BAZAR">মহেশখালী</option>
                                        <option class="upazilla-option" value="PEKUA" rel="COX'S BAZAR">পেকুয়া</option>
                                        <option class="upazilla-option" value="RAMU" rel="COX'S BAZAR">রামু</option>
                                        <option class="upazilla-option" value="TEKNAF" rel="COX'S BAZAR">টেকনাফ</option>
                                        <option class="upazilla-option" value="UKHIA" rel="COX'S BAZAR">উখিয়া</option>
                                        <option class="upazilla-option" value="CHHAGALNAIYA" rel="FENI">ছাগলনাইয়া</option>
                                        <option class="upazilla-option" value="DAGANBHUIYAN" rel="FENI">দাগনভূঁইয়া</option>
                                        <option class="upazilla-option" value="FENI SADAR" rel="FENI">ফেনী সদর</option>
                                        <option class="upazilla-option" value="FULGAZI" rel="FENI">ফুলগাজী</option>
                                        <option class="upazilla-option" value="PARSHURAM" rel="FENI">পরশুরাম</option>
                                        <option class="upazilla-option" value="SONAGAZI" rel="FENI">সোনাগাজী</option>
                                        <option class="upazilla-option" value="DIGHINALA" rel="KHAGRACHHARI">দিঘীনালা</option>
                                        <option class="upazilla-option" value="KHAGRACHHARI SADAR" rel="KHAGRACHHARI">খাগড়াছড়ি সদর</option>
                                        <option class="upazilla-option" value="LAKSHMICHHARI" rel="KHAGRACHHARI">লক্ষীছড়ি</option>
                                        <option class="upazilla-option" value="MAHALCHHARI" rel="KHAGRACHHARI">মহালছড়ি</option>
                                        <option class="upazilla-option" value="MANIKCHHARI" rel="KHAGRACHHARI">মানিকছড়ি</option>
                                        <option class="upazilla-option" value="MATIRANGA" rel="KHAGRACHHARI">মাটিরাঙ্গা</option>
                                        <option class="upazilla-option" value="PANCHHARI" rel="KHAGRACHHARI">পানছড়ি</option>
                                        <option class="upazilla-option" value="RAMGARH" rel="KHAGRACHHARI">রামগড়</option>
                                        <option class="upazilla-option" value="KAMALNAGAR" rel="LAKSHMIPUR">কমলনগর</option>
                                        <option class="upazilla-option" value="LAKSHMIPUR SADAR" rel="LAKSHMIPUR">লক্ষ্মীপুর সদর</option>
                                        <option class="upazilla-option" value="RAIPUR" rel="LAKSHMIPUR">রায়পুর</option>
                                        <option class="upazilla-option" value="RAMGANJ" rel="LAKSHMIPUR">রামগঞ্জ</option>
                                        <option class="upazilla-option" value="RAMGATI" rel="LAKSHMIPUR">রামগতি</option>
                                        <option class="upazilla-option" value="BEGUMGANJ" rel="NOAKHALI">বেগমগঞ্জ</option>
                                        <option class="upazilla-option" value="CHATKHIL" rel="NOAKHALI">চাটখিল</option>
                                        <option class="upazilla-option" value="COMPANIGANJ" rel="NOAKHALI">কোম্পানীগঞ্জ</option>
                                        <option class="upazilla-option" value="HATIYA" rel="NOAKHALI">হাতিয়া</option>
                                        <option class="upazilla-option" value="KABIRHAT" rel="NOAKHALI">কবিরহাট</option>
                                        <option class="upazilla-option" value="NOAKHALI SADAR" rel="NOAKHALI">নোয়াখালী সদর</option>
                                        <option class="upazilla-option" value="SENBAGH" rel="NOAKHALI">সেনবাগ</option>
                                        <option class="upazilla-option" value="SONAIMURI" rel="NOAKHALI">সোনাইমুড়ি</option>
                                        <option class="upazilla-option" value="SUBARNACHAR" rel="NOAKHALI">সুবর্ণচর</option>
                                        <option class="upazilla-option" value="BAGHAICHHARI" rel="RANGAMATI">বাঘাইছড়ি</option>
                                        <option class="upazilla-option" value="BARKAL" rel="RANGAMATI">বরকল</option>
                                        <option class="upazilla-option" value="BELAICHHARI" rel="RANGAMATI">বিলাইছড়ি</option>
                                        <option class="upazilla-option" value="JURAICHHARI" rel="RANGAMATI">জুরাছড়ি</option>
                                        <option class="upazilla-option" value="KAPTAI" rel="RANGAMATI">কাপ্তাই</option>
                                        <option class="upazilla-option" value="KAWKHALI" rel="RANGAMATI">কাউখালী</option>
                                        <option class="upazilla-option" value="LANGADU" rel="RANGAMATI">লংগদু</option>
                                        <option class="upazilla-option" value="NANIARCHAR" rel="RANGAMATI">নানিয়ারচর</option>
                                        <option class="upazilla-option" value="RAJASTHALI" rel="RANGAMATI">রাজস্থলী</option>
                                        <option class="upazilla-option" value="RANGAMATI SADAR" rel="RANGAMATI">রাঙ্গামাটি সদর</option>
                                        <option class="upazilla-option" value="DHAMRAI" rel="DHAKA">ধামরাই</option>
                                        <option class="upazilla-option" value="DOHAR" rel="DHAKA">দোহার</option>
                                        <option class="upazilla-option" value="KERANIGANJ" rel="DHAKA">কেরানীগঞ্জ</option>
                                        <option class="upazilla-option" value="NAWABGANJ" rel="DHAKA">নবাবগঞ্জ</option>
                                        <option class="upazilla-option" value="SAVAR" rel="DHAKA">সাভার</option>
                                        <option class="upazilla-option" value="ALFADANGA" rel="FARIDPUR">আলফাডাঙা</option>
                                        <option class="upazilla-option" value="BHANGA" rel="FARIDPUR">ভাঙ্গা</option>
                                        <option class="upazilla-option" value="BOALMARI" rel="FARIDPUR">বোয়ালমারী</option>
                                        <option class="upazilla-option" value="CHARBHADRASAN" rel="FARIDPUR">চর ভদ্রাসন</option>
                                        <option class="upazilla-option" value="FARIDPUR SADAR" rel="FARIDPUR">ফরিদপুর সদর</option>
                                        <option class="upazilla-option" value="MADHUKHALI" rel="FARIDPUR">মধুখালী</option>
                                        <option class="upazilla-option" value="NAGARKANDA" rel="FARIDPUR">নগরকান্দা</option>
                                        <option class="upazilla-option" value="SADARPUR" rel="FARIDPUR">সদরপুর</option>
                                        <option class="upazilla-option" value="SALTHA" rel="FARIDPUR">সালথা</option>
                                        <option class="upazilla-option" value="GAZIPUR SADAR" rel="GAZIPUR">গাজীপুর সদর</option>
                                        <option class="upazilla-option" value="KALIAKAIR" rel="GAZIPUR">কালিয়াকৈর</option>
                                        <option class="upazilla-option" value="KALIGANJ" rel="GAZIPUR">কালীগঞ্জ</option>
                                        <option class="upazilla-option" value="KAPASIA" rel="GAZIPUR">কাপাসিয়া</option>
                                        <option class="upazilla-option" value="SRIPUR [SREEPUR]" rel="GAZIPUR">শ্রীপুর</option>
                                        <option class="upazilla-option" value="GOPALGANJ SADAR" rel="GOPALGANJ">গোপালগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="KASHIANI" rel="GOPALGANJ">কাশিয়ানী</option>
                                        <option class="upazilla-option" value="KOTALIPARA" rel="GOPALGANJ">কোটালীপাড়া</option>
                                        <option class="upazilla-option" value="MUKSUDPUR" rel="GOPALGANJ">মুকসুদপুর</option>
                                        <option class="upazilla-option" value="TUNGIPARA" rel="GOPALGANJ">টুঙ্গিপাড়া</option>
                                        <option class="upazilla-option" value="AUSTAGRAM" rel="KISHOREGANJ">অষ্টগ্রাম</option>
                                        <option class="upazilla-option" value="BAJITPUR" rel="KISHOREGANJ">বাজিতপুর</option>
                                        <option class="upazilla-option" value="BHAIRAB" rel="KISHOREGANJ">ভৈরব</option>
                                        <option class="upazilla-option" value="HOSSAINPUR" rel="KISHOREGANJ">হোসেনপুর</option>
                                        <option class="upazilla-option" value="ITNA" rel="KISHOREGANJ">ইটনা</option>
                                        <option class="upazilla-option" value="KARIMGANJ" rel="KISHOREGANJ">করিমগঞ্জ</option>
                                        <option class="upazilla-option" value="KATIADI" rel="KISHOREGANJ">কটিয়াদী</option>
                                        <option class="upazilla-option" value="KISHOREGANJ SADAR" rel="KISHOREGANJ">কিশোরগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="KULIARCHAR" rel="KISHOREGANJ">কুলিয়ারচর</option>
                                        <option class="upazilla-option" value="MITHAMAIN" rel="KISHOREGANJ">মিঠামইন</option>
                                        <option class="upazilla-option" value="NIKLI" rel="KISHOREGANJ">নিকলী</option>
                                        <option class="upazilla-option" value="PAKUNDIA" rel="KISHOREGANJ">পাকুন্দিয়া</option>
                                        <option class="upazilla-option" value="TARAIL" rel="KISHOREGANJ">তাড়াইল</option>
                                        <option class="upazilla-option" value="KALKINI" rel="MADARIPUR">কালকিনী</option>
                                        <option class="upazilla-option" value="MADARIPUR SADAR" rel="MADARIPUR">মাদারীপুর সদর</option>
                                        <option class="upazilla-option" value="RAJOIR" rel="MADARIPUR">রাজৈর</option>
                                        <option class="upazilla-option" value="SHIBCHAR" rel="MADARIPUR">শিবচর</option>
                                        <option class="upazilla-option" value="DAULATPUR" rel="MANIKGANJ">দৌলতপুর</option>
                                        <option class="upazilla-option" value="GHIOR" rel="MANIKGANJ">ঘিওর</option>
                                        <option class="upazilla-option" value="HARIRAMPUR" rel="MANIKGANJ">হরিরামপুর</option>
                                        <option class="upazilla-option" value="MANIKGANJ SADAR" rel="MANIKGANJ">মানিকগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="SATURIA" rel="MANIKGANJ">সাটুরিয়া</option>
                                        <option class="upazilla-option" value="SHIBALAYA" rel="MANIKGANJ">শিবালয়</option>
                                        <option class="upazilla-option" value="SINGAIR" rel="MANIKGANJ">সিঙ্গাইর</option>
                                        <option class="upazilla-option" value="GAZARIA" rel="MUNSHIGANJ">গজারিয়া</option>
                                        <option class="upazilla-option" value="LOHAJANG" rel="MUNSHIGANJ">লৌহজং</option>
                                        <option class="upazilla-option" value="MUNSHIGANJ SADAR" rel="MUNSHIGANJ">মুন্সিগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="SIRAJDIKHAN" rel="MUNSHIGANJ">সিরাজদীখান</option>
                                        <option class="upazilla-option" value="SREENAGAR" rel="MUNSHIGANJ">শ্রীনগর</option>
                                        <option class="upazilla-option" value="TONGIBARI" rel="MUNSHIGANJ">টঙ্গীবাড়ী</option>
                                        <option class="upazilla-option" value="ARAIHAZAR" rel="NARAYANGANJ">আড়াইহাজার</option>
                                        <option class="upazilla-option" value="BANDAR" rel="NARAYANGANJ">বন্দর</option>
                                        <option class="upazilla-option" value="NARAYANGANJ SADAR" rel="NARAYANGANJ">নারায়ণগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="RUPGANJ" rel="NARAYANGANJ">রূপগঞ্জ</option>
                                        <option class="upazilla-option" value="SONARGAON" rel="NARAYANGANJ">সোনারগাঁও</option>
                                        <option class="upazilla-option" value="BELABO" rel="NARSINGDI">বেলাবো</option>
                                        <option class="upazilla-option" value="MANOHARDI" rel="NARSINGDI">মনোহরদী</option>
                                        <option class="upazilla-option" value="NARSINGDI SADAR" rel="NARSINGDI">নরসিংদী সদর</option>
                                        <option class="upazilla-option" value="PALASH" rel="NARSINGDI">পলাশ</option>
                                        <option class="upazilla-option" value="RAIPURA" rel="NARSINGDI">রায়পুরা</option>
                                        <option class="upazilla-option" value="SHIBPUR" rel="NARSINGDI">শিবপুর</option>
                                        <option class="upazilla-option" value="BALIAKANDI" rel="RAJBARI">বালিয়াকান্দি</option>
                                        <option class="upazilla-option" value="GOALANDA" rel="RAJBARI">গোয়ালন্দ</option>
                                        <option class="upazilla-option" value="KALUKHALI" rel="RAJBARI">কালুখালী</option>
                                        <option class="upazilla-option" value="PANGSHA" rel="RAJBARI">পাংশা</option>
                                        <option class="upazilla-option" value="RAJBARI SADAR" rel="RAJBARI">রাজবাড়ী সদর</option>
                                        <option class="upazilla-option" value="JHENAIGATI" rel="SHARIATPUR">ঝিনাইগাতী</option>
                                        <option class="upazilla-option" value="NAKLA" rel="SHARIATPUR">নকলা</option>
                                        <option class="upazilla-option" value="NALITABARI" rel="SHARIATPUR">নালিতাবাড়ী</option>
                                        <option class="upazilla-option" value="SHERPUR SADAR" rel="SHARIATPUR">শেরপুর সদর</option>
                                        <option class="upazilla-option" value="SREEBARDI" rel="SHARIATPUR">শ্রীবরদী</option>
                                        <option class="upazilla-option" value="BASAIL" rel="TANGAIL">বাসাইল</option>
                                        <option class="upazilla-option" value="BHUAPUR" rel="TANGAIL">ভূঞাপুর</option>
                                        <option class="upazilla-option" value="DELDUAR" rel="TANGAIL">দেলদুয়ার</option>
                                        <option class="upazilla-option" value="DHANBARI" rel="TANGAIL">ধনবাড়ী</option>
                                        <option class="upazilla-option" value="GHATAIL" rel="TANGAIL">ঘাটাইল</option>
                                        <option class="upazilla-option" value="GOPALPUR" rel="TANGAIL">গোপালপুর</option>
                                        <option class="upazilla-option" value="KALIHATI" rel="TANGAIL">কালিহাতি</option>
                                        <option class="upazilla-option" value="MADHUPUR" rel="TANGAIL">মধুপুর</option>
                                        <option class="upazilla-option" value="MIRZAPUR" rel="TANGAIL">মির্জাপুর</option>
                                        <option class="upazilla-option" value="NAGARPUR" rel="TANGAIL">নাগরপুর</option>
                                        <option class="upazilla-option" value="SAKHIPUR" rel="TANGAIL">সখিপুর</option>
                                        <option class="upazilla-option" value="TANGAIL SADAR" rel="TANGAIL">টাঙ্গাইল সদর</option>
                                        <option class="upazilla-option" value="BAKSHIGANJ" rel="JAMALPUR">বকশীগঞ্জ</option>
                                        <option class="upazilla-option" value="DEWANGANJ" rel="JAMALPUR">দেওয়ানগঞ্জ</option>
                                        <option class="upazilla-option" value="ISLAMPUR" rel="JAMALPUR">ইসলামপুর</option>
                                        <option class="upazilla-option" value="JAMALPUR SADAR" rel="JAMALPUR">জামালপুর সদর</option>
                                        <option class="upazilla-option" value="MADARGANJ" rel="JAMALPUR">মাদারগঞ্জ</option>
                                        <option class="upazilla-option" value="MELANDAHA" rel="JAMALPUR">মেলান্দহ</option>
                                        <option class="upazilla-option" value="SARISHABARI" rel="JAMALPUR">সরিষাবাড়ি</option>
                                        <option class="upazilla-option" value="BHALUKA" rel="MYMENSINGH">ভালুকা</option>
                                        <option class="upazilla-option" value="DHOBAURA" rel="MYMENSINGH">ধোবাউড়া</option>
                                        <option class="upazilla-option" value="FULBARIA" rel="MYMENSINGH">ফুলবাড়িয়া</option>
                                        <option class="upazilla-option" value="GAFFARGAON" rel="MYMENSINGH">গফরগাঁও</option>
                                        <option class="upazilla-option" value="GOURIPUR" rel="MYMENSINGH">গৌরীপুর</option>
                                        <option class="upazilla-option" value="HALUAGHAT" rel="MYMENSINGH">হালুয়াঘাট</option>
                                        <option class="upazilla-option" value="ISHWARGANJ" rel="MYMENSINGH">ঈশ্বরগঞ্জ</option>
                                        <option class="upazilla-option" value="MUKTAGACHHA" rel="MYMENSINGH">মুক্তাগাছা</option>
                                        <option class="upazilla-option" value="MYMENSINGH SADAR" rel="MYMENSINGH">ময়মনসিংহ সদর</option>
                                        <option class="upazilla-option" value="NANDAIL" rel="MYMENSINGH">নান্দাইল</option>
                                        <option class="upazilla-option" value="PHULPUR" rel="MYMENSINGH">ফুলপুর</option>
                                        <option class="upazilla-option" value="TRISHAL" rel="MYMENSINGH">ত্রিশাল</option>
                                        <option class="upazilla-option" value="ATPARA" rel="NETRAKONA">আটপাড়া</option>
                                        <option class="upazilla-option" value="BARHATTA" rel="NETRAKONA">বারহাট্টা</option>
                                        <option class="upazilla-option" value="DURGAPUR" rel="NETRAKONA">দুর্গাপুর</option>
                                        <option class="upazilla-option" value="KALMAKANDA" rel="NETRAKONA">কলমাকান্দা</option>
                                        <option class="upazilla-option" value="KENDUA" rel="NETRAKONA">কেন্দুয়া</option>
                                        <option class="upazilla-option" value="KHALIAJURI" rel="NETRAKONA">খালিয়াজুড়ি</option>
                                        <option class="upazilla-option" value="MADAN" rel="NETRAKONA">মদন</option>
                                        <option class="upazilla-option" value="MOHANGANJ" rel="NETRAKONA">মোহনগঞ্জ</option>
                                        <option class="upazilla-option" value="NETRAKONA SADAR" rel="NETRAKONA">নেত্রকোনা সদর</option>
                                        <option class="upazilla-option" value="PURBADHALA" rel="NETRAKONA">পূর্বধলা</option>
                                        <option class="upazilla-option" value="JHENAIGATI" rel="SHERPUR">ঝিনাইগাতী</option>
                                        <option class="upazilla-option" value="NAKLA" rel="SHERPUR">নকলা</option>
                                        <option class="upazilla-option" value="NALITABARI" rel="SHERPUR">নালিতাবাড়ী</option>
                                        <option class="upazilla-option" value="SHERPUR SADAR" rel="SHERPUR">শেরপুর সদর</option>
                                        <option class="upazilla-option" value="SREEBARDI" rel="SHERPUR">শ্রীবরদী</option>
                                        <option class="upazilla-option" value="BAGERHAT SADAR" rel="BAGERHAT">বাগেরহাট সদর</option>
                                        <option class="upazilla-option" value="CHITALMARI" rel="BAGERHAT">চিতলমারী</option>
                                        <option class="upazilla-option" value="FAKIRHAT" rel="BAGERHAT">ফকিরহাট</option>
                                        <option class="upazilla-option" value="KACHUA" rel="BAGERHAT">কচুয়া</option>
                                        <option class="upazilla-option" value="MOLLAHAT" rel="BAGERHAT">মোল্লাহাট</option>
                                        <option class="upazilla-option" value="MONGLA" rel="BAGERHAT">মোংলা</option>
                                        <option class="upazilla-option" value="MORRELGANJ" rel="BAGERHAT">মোড়েলগঞ্জ</option>
                                        <option class="upazilla-option" value="RAMPAL" rel="BAGERHAT">রামপাল</option>
                                        <option class="upazilla-option" value="SHARANKHOLA" rel="BAGERHAT">শরণখোলা</option>
                                        <option class="upazilla-option" value="ALAMDANGA" rel="CHUADANGA">আলমডাঙ্গা</option>
                                        <option class="upazilla-option" value="CHUADANGA SADAR" rel="CHUADANGA">চুয়াডাঙ্গা সদর</option>
                                        <option class="upazilla-option" value="DAMURHUDA" rel="CHUADANGA">দামুড়হুদা</option>
                                        <option class="upazilla-option" value="JIBANNAGAR" rel="CHUADANGA">জীবননগর</option>
                                        <option class="upazilla-option" value="ABHAYNAGAR" rel="JESSORE">অভয়নগর</option>
                                        <option class="upazilla-option" value="BAGHERPARA" rel="JESSORE">বাঘেরপাড়া</option>
                                        <option class="upazilla-option" value="CHAUGACHHA" rel="JESSORE">চৌগাছা</option>
                                        <option class="upazilla-option" value="JESSORE SADAR" rel="JESSORE">যশোর সদর</option>
                                        <option class="upazilla-option" value="JHIKARGACHA" rel="JESSORE">ঝিকরগাছা</option>
                                        <option class="upazilla-option" value="KESHABPUR" rel="JESSORE">কেশবপুর</option>
                                        <option class="upazilla-option" value="MANIRAMPUR" rel="JESSORE">মনিরামপুর</option>
                                        <option class="upazilla-option" value="SHARSHA" rel="JESSORE">শার্শা</option>
                                        <option class="upazilla-option" value="HARINAKUNDU" rel="JHENAIDAH ">হরিণাকুন্ডু</option>
                                        <option class="upazilla-option" value="JHENAIDAH SADAR" rel="JHENAIDAH ">ঝিনাইদহ সদর</option>
                                        <option class="upazilla-option" value="KALIGANJ" rel="JHENAIDAH ">কালীগঞ্জ</option>
                                        <option class="upazilla-option" value="KOTCHANDPUR" rel="JHENAIDAH ">কোটচাঁদপুর</option>
                                        <option class="upazilla-option" value="MAHESHPUR" rel="JHENAIDAH ">মহেশপুর</option>
                                        <option class="upazilla-option" value="SHAILKUPA" rel="JHENAIDAH ">শৈলকুপা</option>
                                        <option class="upazilla-option" value="BATIAGHATA" rel="KHULNA">বটিয়াঘাটা</option>
                                        <option class="upazilla-option" value="DACOPE" rel="KHULNA">দাকোপ</option>
                                        <option class="upazilla-option" value="DAULATPUR" rel="KHULNA">দৌলতপুর থানা</option>
                                        <option class="upazilla-option" value="DIGHALIA" rel="KHULNA">দিঘলিয়া</option>
                                        <option class="upazilla-option" value="DUMURIA" rel="KHULNA">ডুমুরিয়া</option>
                                        <option class="upazilla-option" value="KHALISHPUR" rel="KHULNA">খালিশপুর থানা</option>
                                        <option class="upazilla-option" value="KHAN JAHAN ALI" rel="KHULNA">খানজাহান আলী থানা</option>
                                        <option class="upazilla-option" value="KHULNA SADAR" rel="KHULNA">খুলনা সদর</option>
                                        <option class="upazilla-option" value="KOYRA" rel="KHULNA">কয়রা</option>
                                        <option class="upazilla-option" value="PAIKGACHHA" rel="KHULNA">পাইকগাছা</option>
                                        <option class="upazilla-option" value="PHULTALA" rel="KHULNA">ফুলতলা</option>
                                        <option class="upazilla-option" value="RUPSA" rel="KHULNA">রূপসা</option>
                                        <option class="upazilla-option" value="SONADANGA" rel="KHULNA">সোনাডাঙ্গা থানা</option>
                                        <option class="upazilla-option" value="TEROKHADA" rel="KHULNA">তেরখাদা</option>
                                        <option class="upazilla-option" value="BHERAMARA" rel="KUSHTIA">ভেড়ামারা</option>
                                        <option class="upazilla-option" value="DAULATPUR" rel="KUSHTIA">দৌলতপুর</option>
                                        <option class="upazilla-option" value="KHOKSA" rel="KUSHTIA">খোকসা</option>
                                        <option class="upazilla-option" value="KUMARKHALI" rel="KUSHTIA">কুমারখালী</option>
                                        <option class="upazilla-option" value="KUSHTIA SADAR" rel="KUSHTIA">কুষ্টিয়া সদর</option>
                                        <option class="upazilla-option" value="MIRPUR" rel="KUSHTIA">মিরপুর</option>
                                        <option class="upazilla-option" value="MAGURA SADAR" rel="MAGURA">মাগুরা সদর</option>
                                        <option class="upazilla-option" value="MOHAMMADPUR" rel="MAGURA">মহম্মদপুর</option>
                                        <option class="upazilla-option" value="SHALIKHA" rel="MAGURA">শালিখা</option>
                                        <option class="upazilla-option" value="SREEPUR" rel="MAGURA">শ্রীপুর</option>
                                        <option class="upazilla-option" value="GANGNI" rel="MEHERPUR">গাংনী</option>
                                        <option class="upazilla-option" value="MEHERPUR SADAR" rel="MEHERPUR">মেহেরপুর সদর</option>
                                        <option class="upazilla-option" value="MUJIBNAGAR" rel="MEHERPUR">মুজিবনগর</option>
                                        <option class="upazilla-option" value="KALIA" rel="NARAIL">কালিয়া</option>
                                        <option class="upazilla-option" value="LOHAGARA" rel="NARAIL">লোহাগড়া</option>
                                        <option class="upazilla-option" value="NARAIL SADAR" rel="NARAIL">নড়াইল সদর</option>
                                        <option class="upazilla-option" value="ASSASUNI" rel="SATKHIRA">আশাশুনি</option>
                                        <option class="upazilla-option" value="DEBHATA" rel="SATKHIRA">দেবহাটা</option>
                                        <option class="upazilla-option" value="KALAROA" rel="SATKHIRA">কলারোয়া</option>
                                        <option class="upazilla-option" value="KALIGANJ" rel="SATKHIRA">কালীগঞ্জ</option>
                                        <option class="upazilla-option" value="SATKHIRA SADAR" rel="SATKHIRA">সাতক্ষীরা সদর</option>
                                        <option class="upazilla-option" value="SHYAMNAGAR" rel="SATKHIRA">শ্যামনগর</option>
                                        <option class="upazilla-option" value="TALA" rel="SATKHIRA">তালা</option>
                                        <option class="upazilla-option" value="ADAMDIGHI" rel="BOGRA">আদমদীঘি</option>
                                        <option class="upazilla-option" value="BOGRA SADAR" rel="BOGRA">বগুড়া সদর</option>
                                        <option class="upazilla-option" value="DHUNAT" rel="BOGRA">ধুনট</option>
                                        <option class="upazilla-option" value="DUPCHANCHIA" rel="BOGRA">দুপচাঁচিয়া</option>
                                        <option class="upazilla-option" value="GABTALI" rel="BOGRA">গাবতলী</option>
                                        <option class="upazilla-option" value="KAHALOO" rel="BOGRA">কাহালু</option>
                                        <option class="upazilla-option" value="NANDIGRAM" rel="BOGRA">নন্দীগ্রাম</option>
                                        <option class="upazilla-option" value="SARIAKANDI" rel="BOGRA">সারিয়াকান্দি</option>
                                        <option class="upazilla-option" value="SHAJAHANPUR" rel="BOGRA">শাজাহানপুর</option>
                                        <option class="upazilla-option" value="SHERPUR" rel="BOGRA">শেরপুর</option>
                                        <option class="upazilla-option" value="SHIBGANJ" rel="BOGRA">শিবগঞ্জ</option>
                                        <option class="upazilla-option" value="SONATALA" rel="BOGRA">সোনাতলা</option>
                                        <option class="upazilla-option" value="BHOLAHAT" rel="CHAPAI NAWABGANJ">ভোলাহাট</option>
                                        <option class="upazilla-option" value="CHAPAI NAWABGANJ SADAR" rel="CHAPAI NAWABGANJ">চাঁপাইনবাবগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="GOMASTAPUR" rel="CHAPAI NAWABGANJ">গোমস্তাপুর</option>
                                        <option class="upazilla-option" value="NACHOLE" rel="CHAPAI NAWABGANJ">নাচোল</option>
                                        <option class="upazilla-option" value="SHIBGANJ" rel="CHAPAI NAWABGANJ">শিবগঞ্জ</option>
                                        <option class="upazilla-option" value="AKKELPUR" rel="JAIPURHAT">আক্কেলপুর</option>
                                        <option class="upazilla-option" value="JAIPURHAT SADAR" rel="JAIPURHAT">জয়পুরহাট সদর</option>
                                        <option class="upazilla-option" value="KALAI" rel="JAIPURHAT">কালাই</option>
                                        <option class="upazilla-option" value="KHETLAL" rel="JAIPURHAT">ক্ষেতলাল</option>
                                        <option class="upazilla-option" value="PANCHBIBI" rel="JAIPURHAT">পাঁচবিবি</option>
                                        <option class="upazilla-option" value="ATRAI" rel="NAOGAON">আত্রাই</option>
                                        <option class="upazilla-option" value="BADALGACHHI" rel="NAOGAON">বদলগাছী</option>
                                        <option class="upazilla-option" value="DHAMOIRHAT" rel="NAOGAON">ধামুরহাট</option>
                                        <option class="upazilla-option" value="MAHADEBPUR" rel="NAOGAON">মহাদেবপুর</option>
                                        <option class="upazilla-option" value="MANDA" rel="NAOGAON">মান্দা</option>
                                        <option class="upazilla-option" value="NAOGAON SADAR" rel="NAOGAON">নওগাঁ সদর</option>
                                        <option class="upazilla-option" value="NIAMATPUR" rel="NAOGAON">নিয়ামতপুর</option>
                                        <option class="upazilla-option" value="PATNITALA" rel="NAOGAON">পত্নীতলা</option>
                                        <option class="upazilla-option" value="PORSHA" rel="NAOGAON">পোরশা</option>
                                        <option class="upazilla-option" value="RANINAGAR" rel="NAOGAON">রানীনগর</option>
                                        <option class="upazilla-option" value="SAPAHAR" rel="NAOGAON">সাপাহার</option>
                                        <option class="upazilla-option" value="BAGATIPARA" rel="NATORE">বাগাতিপাড়া</option>
                                        <option class="upazilla-option" value="BARAIGRAM" rel="NATORE">বড়াইগ্রাম</option>
                                        <option class="upazilla-option" value="GURUDASPUR" rel="NATORE">গুরুদাসপুর</option>
                                        <option class="upazilla-option" value="LALPUR" rel="NATORE">লালপুর</option>
                                        <option class="upazilla-option" value="NATORE SADAR" rel="NATORE">নাটোর সদর</option>
                                        <option class="upazilla-option" value="SINGRA" rel="NATORE">সিংড়া</option>
                                        <option class="upazilla-option" value="ATGHARIA" rel="PABNA">আটঘরিয়া</option>
                                        <option class="upazilla-option" value="BERA" rel="PABNA">বেড়া</option>
                                        <option class="upazilla-option" value="BHANGURA" rel="PABNA">ভাঙ্গুরা</option>
                                        <option class="upazilla-option" value="CHATMOHAR" rel="PABNA">চাটমোহর</option>
                                        <option class="upazilla-option" value="FARIDPUR" rel="PABNA">ফরিদপুর</option>
                                        <option class="upazilla-option" value="ISHWARDI" rel="PABNA">ঈশ্বরদী</option>
                                        <option class="upazilla-option" value="PABNA SADAR" rel="PABNA">পাবনা সদর</option>
                                        <option class="upazilla-option" value="SANTHIA" rel="PABNA">সাঁথিয়া</option>
                                        <option class="upazilla-option" value="SUJANAGAR" rel="PABNA">সুজানগর</option>
                                        <option class="upazilla-option" value="BAGHA" rel="RAJSHAHI">বাঘা</option>
                                        <option class="upazilla-option" value="BAGHMARA" rel="RAJSHAHI">বাগমারা</option>
                                        <option class="upazilla-option" value="BOALIA" rel="RAJSHAHI">বোয়ালিয়া</option>
                                        <option class="upazilla-option" value="CHARGHAT" rel="RAJSHAHI">চারঘাট</option>
                                        <option class="upazilla-option" value="DURGAPUR" rel="RAJSHAHI">দূর্গাপুর</option>
                                        <option class="upazilla-option" value="GODAGARI" rel="RAJSHAHI">গোদাগাড়ী</option>
                                        <option class="upazilla-option" value="MATIHAR" rel="RAJSHAHI">মতিহার থানা</option>
                                        <option class="upazilla-option" value="MOHANPUR" rel="RAJSHAHI">মোহনপুর</option>
                                        <option class="upazilla-option" value="PABA" rel="RAJSHAHI">পবা</option>
                                        <option class="upazilla-option" value="PUTHIA" rel="RAJSHAHI">পুঠিয়া</option>
                                        <option class="upazilla-option" value="RAJPARA" rel="RAJSHAHI">রায়পাড়া থানা</option>
                                        <option class="upazilla-option" value="SHAH MAKHDAM" rel="RAJSHAHI">শাহ মখদম থানা</option>
                                        <option class="upazilla-option" value="TANORE" rel="RAJSHAHI">তানোর</option>
                                        <option class="upazilla-option" value="BELKUCHI" rel="SIRAJGANJ">বেলকুচি</option>
                                        <option class="upazilla-option" value="CHAUHALI" rel="SIRAJGANJ">চৌহালি</option>
                                        <option class="upazilla-option" value="KAMARKHANDA" rel="SIRAJGANJ">কামারখন্দ</option>
                                        <option class="upazilla-option" value="KAZIPUR" rel="SIRAJGANJ">কাজীপুর</option>
                                        <option class="upazilla-option" value="RAIGANJ" rel="SIRAJGANJ">রায়গঞ্জ</option>
                                        <option class="upazilla-option" value="SHAHJADPUR" rel="SIRAJGANJ">শাহজাদপুর</option>
                                        <option class="upazilla-option" value="SIRAJGANJ SADAR" rel="SIRAJGANJ">সিরাজগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="TARASH" rel="SIRAJGANJ">তাড়াশ</option>
                                        <option class="upazilla-option" value="ULLAHPARA" rel="SIRAJGANJ">উল্লাপাড়া</option>
                                        <option class="upazilla-option" value="BIRAL" rel="DINAJPUR">বিরল</option>
                                        <option class="upazilla-option" value="BIRAMPUR" rel="DINAJPUR">বিরামপুর</option>
                                        <option class="upazilla-option" value="BIRGANJ" rel="DINAJPUR">বীরগঞ্জ</option>
                                        <option class="upazilla-option" value="BOCHAGANJ" rel="DINAJPUR">বোচাগঞ্জ</option>
                                        <option class="upazilla-option" value="CHIRIRBANDAR" rel="DINAJPUR">চিরিরবন্দর</option>
                                        <option class="upazilla-option" value="DINAJPUR SADAR" rel="DINAJPUR">দিনাজপুর সদর</option>
                                        <option class="upazilla-option" value="GHORAGHAT" rel="DINAJPUR">ঘোড়াঘাট</option>
                                        <option class="upazilla-option" value="HAKIMPUR" rel="DINAJPUR">হাকিমপুর</option>
                                        <option class="upazilla-option" value="KAHAROLE" rel="DINAJPUR">কাহারোল</option>
                                        <option class="upazilla-option" value="KHANSAMA" rel="DINAJPUR">খানসামা</option>
                                        <option class="upazilla-option" value="NAWABGANJ" rel="DINAJPUR">নবাবগঞ্জ</option>
                                        <option class="upazilla-option" value="PARBATIPUR" rel="DINAJPUR">পার্বতীপুর</option>
                                        <option class="upazilla-option" value="PHULBARI" rel="DINAJPUR">ফুলবাড়ী</option>
                                        <option class="upazilla-option" value="GAIBANDHA SADAR" rel="GAIBANDHA">গাইবান্ধা সদর</option>
                                        <option class="upazilla-option" value="GOBINDAGANJ" rel="GAIBANDHA">গোবিন্দগঞ্জ</option>
                                        <option class="upazilla-option" value="PALASHBARI" rel="GAIBANDHA">পলাশবাড়ী</option>
                                        <option class="upazilla-option" value="PHULCHHARI" rel="GAIBANDHA">ফুলছড়ি</option>
                                        <option class="upazilla-option" value="SADULLAPUR" rel="GAIBANDHA">সাদুল্লাপুর</option>
                                        <option class="upazilla-option" value="SAGHATA" rel="GAIBANDHA">সাঘাটা</option>
                                        <option class="upazilla-option" value="SUNDARGANJ" rel="GAIBANDHA">সুন্দরগঞ্জ</option>
                                        <option class="upazilla-option" value="BHURUNGAMARI" rel="KURIGRAM">ভুরুঙ্গামারী</option>
                                        <option class="upazilla-option" value="CHAR RAJIBPUR" rel="KURIGRAM">চর রাজিবপুর</option>
                                        <option class="upazilla-option" value="CHILMARI" rel="KURIGRAM">চিলমারী</option>
                                        <option class="upazilla-option" value="KURIGRAM SADAR" rel="KURIGRAM">কুড়িগ্রাম সদর</option>
                                        <option class="upazilla-option" value="NAGESHWARI" rel="KURIGRAM">নাগেশ্বরী</option>
                                        <option class="upazilla-option" value="PHULBARI" rel="KURIGRAM">ফুলবাড়ী</option>
                                        <option class="upazilla-option" value="RAJARHAT" rel="KURIGRAM">রাজারহাট</option>
                                        <option class="upazilla-option" value="RAUMARI" rel="KURIGRAM">রৌমারী</option>
                                        <option class="upazilla-option" value="ULIPUR" rel="KURIGRAM">উলিপুর</option>
                                        <option class="upazilla-option" value="ADITMARI" rel="LALMONIRHAT">আদিতমারী</option>
                                        <option class="upazilla-option" value="HATIBANDHA" rel="LALMONIRHAT">হাতীবান্ধা</option>
                                        <option class="upazilla-option" value="KALIGANJ" rel="LALMONIRHAT">কালীগঞ্জ</option>
                                        <option class="upazilla-option" value="LALMONIRHAT SADAR" rel="LALMONIRHAT">লালমনিরহাট সদর</option>
                                        <option class="upazilla-option" value="PATGRAM" rel="LALMONIRHAT">পাটগ্রাম</option>
                                        <option class="upazilla-option" value="DIMLA" rel="NILPHAMARI">ডিমলা</option>
                                        <option class="upazilla-option" value="DOMAR" rel="NILPHAMARI">ডোমার</option>
                                        <option class="upazilla-option" value="JALDHAKA" rel="NILPHAMARI">জলঢাকা</option>
                                        <option class="upazilla-option" value="KISHOREGANJ" rel="NILPHAMARI">কিশোরগঞ্জ</option>
                                        <option class="upazilla-option" value="NILPHAMARI SADAR" rel="NILPHAMARI">নীলফামারী সদর</option>
                                        <option class="upazilla-option" value="SAIDPUR" rel="NILPHAMARI">সৈয়দপুর</option>
                                        <option class="upazilla-option" value="ATWARI" rel="PANCHAGARH">আটোয়ারী</option>
                                        <option class="upazilla-option" value="BODA" rel="PANCHAGARH">বোদা</option>
                                        <option class="upazilla-option" value="DEBIGANJ" rel="PANCHAGARH">দেবীগঞ্জ</option>
                                        <option class="upazilla-option" value="PANCHAGARH SADAR" rel="PANCHAGARH">পঞ্চগড় সদর</option>
                                        <option class="upazilla-option" value="TETULIA" rel="PANCHAGARH">তেতুলিয়া</option>
                                        <option class="upazilla-option" value="BADARGANJ" rel="RANGPUR">বদরগঞ্জ</option>
                                        <option class="upazilla-option" value="GANGACHARA" rel="RANGPUR">গংগাচড়া</option>
                                        <option class="upazilla-option" value="KAUNIA" rel="RANGPUR">কাউনিয়া</option>
                                        <option class="upazilla-option" value="MITHAPUKUR" rel="RANGPUR">মিঠাপুকুর</option>
                                        <option class="upazilla-option" value="PIRGACHHA" rel="RANGPUR">পীরগাছা</option>
                                        <option class="upazilla-option" value="PIRGANJ" rel="RANGPUR">পীরগঞ্জ</option>
                                        <option class="upazilla-option" value="RANGPUR SADAR" rel="RANGPUR">রংপুর সদর</option>
                                        <option class="upazilla-option" value="TARAGANJ" rel="RANGPUR">তারাগঞ্জ</option>
                                        <option class="upazilla-option" value="BALIADANGI" rel="THAKURGAON">বালিয়াডাঙ্গী</option>
                                        <option class="upazilla-option" value="HARIPUR" rel="THAKURGAON">হরিপুর</option>
                                        <option class="upazilla-option" value="PIRGANJ" rel="THAKURGAON">পীরগঞ্জ</option>
                                        <option class="upazilla-option" value="RANISANKAIL" rel="THAKURGAON">রানীশংকাইল</option>
                                        <option class="upazilla-option" value="THAKURGAON SADAR" rel="THAKURGAON">ঠাকুরগাঁও সদর</option>
                                        <option class="upazilla-option" value="AJMIRIGANJ" rel="HABIGANJ">আজমিরীগঞ্জ</option>
                                        <option class="upazilla-option" value="BAHUBAL" rel="HABIGANJ">বাহুবল</option>
                                        <option class="upazilla-option" value="BANIACHANG" rel="HABIGANJ">বানিয়াচং</option>
                                        <option class="upazilla-option" value="CHUNARUGHAT" rel="HABIGANJ">চুনারুঘাট</option>
                                        <option class="upazilla-option" value="HABIGANJ SADAR" rel="HABIGANJ">হবিগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="LAKHAI" rel="HABIGANJ">লাখাই</option>
                                        <option class="upazilla-option" value="MADHABPUR" rel="HABIGANJ">মাধবপুর</option>
                                        <option class="upazilla-option" value="NABIGANJ" rel="HABIGANJ">নবীগঞ্জ</option>
                                        <option class="upazilla-option" value="BARLEKHA" rel="MAULVI BAZAR">বড়লেখা</option>
                                        <option class="upazilla-option" value="JURI" rel="MAULVI BAZAR">জুড়ী</option>
                                        <option class="upazilla-option" value="KAMALGANJ" rel="MAULVI BAZAR">কমলগঞ্জ</option>
                                        <option class="upazilla-option" value="KULAURA" rel="MAULVI BAZAR">কুলাউড়া</option>
                                        <option class="upazilla-option" value="MAULVI BAZAR SADAR" rel="MAULVI BAZAR">মৌলভীবাজার সদর</option>
                                        <option class="upazilla-option" value="RAJNAGAR" rel="MAULVI BAZAR">রাজনগর</option>
                                        <option class="upazilla-option" value="SREEMANGAL" rel="MAULVI BAZAR">শ্রীমঙ্গল</option>
                                        <option class="upazilla-option" value="BISHWAMBARPUR" rel="SUNAMGANJ">বিশ্বম্ভরপুর</option>
                                        <option class="upazilla-option" value="CHHATAK" rel="SUNAMGANJ">ছাতক</option>
                                        <option class="upazilla-option" value="DAKSHIN SUNAMGANJ" rel="SUNAMGANJ">দক্ষিণ সুনামগঞ্জ</option>
                                        <option class="upazilla-option" value="DERAI" rel="SUNAMGANJ">দিরাই</option>
                                        <option class="upazilla-option" value="DHARAMAPASHA" rel="SUNAMGANJ">ধর্মপাশা</option>
                                        <option class="upazilla-option" value="DOWARABAZAR" rel="SUNAMGANJ">দোয়ারাবাজার</option>
                                        <option class="upazilla-option" value="JAGANNATHPUR" rel="SUNAMGANJ">জগন্নাথপুর</option>
                                        <option class="upazilla-option" value="JAMALGANJ" rel="SUNAMGANJ">জামালগঞ্জ</option>
                                        <option class="upazilla-option" value="SHALLA [SULLA]" rel="SUNAMGANJ">শাল্লা</option>
                                        <option class="upazilla-option" value="SUNAMGANJ SADAR" rel="SUNAMGANJ">সুনামগঞ্জ সদর</option>
                                        <option class="upazilla-option" value="TAHIRPUR" rel="SUNAMGANJ">তাহিরপুর</option>
                                        <option class="upazilla-option" value="BALAGANJ" rel="SYLHET">বালাগঞ্জ</option>
                                        <option class="upazilla-option" value="BEANI BAZAR" rel="SYLHET">বিয়ানীবাজার</option>
                                        <option class="upazilla-option" value="BISHWANATH" rel="SYLHET">বিশ্বনাথ</option>
                                        <option class="upazilla-option" value="COMPANIGANJ" rel="SYLHET">কোম্পানীগঞ্জ</option>
                                        <option class="upazilla-option" value="DAKSHIN SURMA" rel="SYLHET">দক্ষিণ সুরমা</option>
                                        <option class="upazilla-option" value="FENCHUGANJ" rel="SYLHET">ফেঞ্চুগঞ্জ</option>
                                        <option class="upazilla-option" value="GOLAPGANJ" rel="SYLHET">গোলাপগঞ্জ</option>
                                        <option class="upazilla-option" value="GOWAINGHAT" rel="SYLHET">গোয়াইনঘাট</option>
                                        <option class="upazilla-option" value="JAINTIAPUR" rel="SYLHET">জৈন্তাপুর</option>
                                        <option class="upazilla-option" value="KANAIGHAT" rel="SYLHET">কানাইঘাট</option>
                                        <option class="upazilla-option" value="SYLHET SADAR" rel="SYLHET">সিলেট সদর</option>
                                        <option class="upazilla-option" value="ZAKIGANJ" rel="SYLHET">জকিগঞ্জ</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit"><i class="mdi mdi-map-search menu-icon"></i> অনুসন্ধান</button>
                            </form>
                        </div>
                    </div>
                </div>
               @include('administrative.partials.infected_24_hours')
            </div>
            @include('administrative.partials.country_wise')
            <div class="row">
                @include('administrative.partials.hospital_beds')
                @include('administrative.partials.zone_wise')
            </div>
            <div class="row">
                @include('administrative.partials.important_index')
            </div>
            <div class="row">
                @include('administrative.partials.immigration')
                @include('administrative.partials.top_infected_city')
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between"> <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 </span> </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->

@endsection
