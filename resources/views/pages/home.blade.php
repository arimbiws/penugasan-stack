@extends('layouts.index')
@section('title')
    Home Page
@endsection
@section('content')
    <hr />

    <section class="lg:mt-[120px]">
    <div class="lg:flex mt-[32px]">
        <img src="./images/img1.png" alt="img1" class="lg:size-5/12 mx-auto rounded-lg" />
        <div class="lg:ml-[40px] mx-auto">
        <h4 class="lg:font-semibold lg:text-[21px] text-[14px] mt-[24px]">Wellness Lifestyle & Unburdening Program</h4>
        <h1 class="font-bold lg:text-[48px] text-[24px]">Best app to self improve</h1>
        <p class="lg:text-[18px] text-[14px] mb-[24px] text-[#8CA2C0]">
            Aplikasi layanan publik untuk membantu masyarakat mencapai gaya hidup yang sehat dengan mengatasi dan mengubah kebiasaan buruk.
            <span class="review"> Dirancang untuk menjadi mitra setia dalam perjalanan kesehatan, WELLUP menyediakan beragam fitur dan sumber daya yang mendukung pengguna dalam meraih keseimbangan hidup yang optimal. </span>
        </p>
        </div>
    </div>
    </section>

    <section class="lg:my-[120px] my-[32px] mx-auto">
    <div>
        <h1 class="font-bold lg:text-[40px] text-[20px] mb-[24px]">Review</h1>
        <div class="lg:grid grid-cols-3 mx-[24px]]">
        <div class="border border-[#9CB0C9] rounded-lg mr-[24px] p-[14px] lg:p-[32px] text-center">
            <img src="./images/star5.png" alt="" class="lg:size-auto size-5/12" />
            <p class="lg:text-[17px] text-[12px] text-[#8CA2C0] lg:mt-[16px] mt-[6px]">“WELLUP telah menjadi mitra setia saya dalam meraih gaya hidup yang lebih sehat! ....”</p>
        </div>
        <div class="border border-[#9CB0C9] rounded-lg mr-[24px] p-[32px] text-center review">
            <img src="./images/star4.png" alt="" srcset="" />
            <p class="text-[17px] text-[#8CA2C0] mt-[16px]">“WELLUP adalah teman baik dalam upaya meningkatkan kesehatan dan gaya hidup ....”</p>
        </div>
        <div class="border border-[#9CB0C9] rounded-lg p-[32px] text-center review">
            <img src="./images/star5.png" alt="" srcset="" />
            <p class="text-[17px] text-[#8CA2C0] mt-[16px]">"Saya sangat merekomendasikan WELLUP kepada siapa pun yang ingin meningkatkan kesehatan mereka ....”</p>
        </div>
        </div>
    </div>
    </section>

    <section class="lg:my-[120px] my-[32px] mx-auto">
    <div>
        <h1 class="font-bold text-center text-[40px] mb-[16px]">Services</h1>
        <p class="lg:text-[20px] text-[14px] text-[#8CA2C0] text-center mx-auto lg:mx-[150px]">WELLUP menyediakan beragam fitur dan sumber daya yang mendukung pengguna dalam meraih keseimbangan hidup yang optimal.</p>
    </div>
    <hr class="lg:my-[48px] my-[24px]" />
    <div class="lg:grid grid-cols-2 lg:mx-[10px] mb-[48px]">
        <div class="lg:mr-[64px] mx-[24px]">
        <h2 class="font-medium lg:text-[28px] text-[16px] mb-[16px] ml-[15px]">Stop Adictions</h2>
        <img src="./images/img2.png" alt="image 2" class="rounded-lg" />
        <p class="lg:text-[20px] text-[12px] my-[24px] px-[10px]">
            Pengguna dapat berkonsultasi mengenai bagaimana untuk berhenti terhadap suatu adiksi yang buruk, contohnya berhenti merokok, berhenti self blaming dan kebiasaan lain yang buruk bagi kesehatan fisik maupun mental pengguna.
        </p>
        </div>
        <div class="review lg:mr-[64px] mx-[24px]">
        <h2 class="font-medium lg:text-[28px] text-[16px] mb-[16px] ml-[15px]">Start Good Habits</h2>
        <img src="./images/img3.png" alt="image 3" class="rounded-lg" />
        <p class="lg:text-[20px] text-[12px] my-[24px] px-[10px]">
            Pengguna dapat mencari dan menumbuhkan kebiasaan baru untuk self improvement agar dapat terhindar untuk melakukan kebiasaan buruk. Contohnya terdapat fitur menabung dan belajar menerima diri sendiri.
        </p>
        </div>
    </div>
    </section>

    <section class="lg:my-[120px] my-[32px] mx-auto">
    <div>
        <div>
        <h1 class="font-bold text-center lg:text-[40px] text-[24px] mb-[16px]">Community</h1>
        <p class="lg:text-[20px] text-[12px] text-center lg:mx-[150px]">Pengguna dapat berbagi informasi dan pengalaman di komunitas dengan topik yang relevan</p>
        </div>

        <hr class="lg:my-[48px] my-[32px] mx-auto" />

        <div class="grid lg:grid-cols-4 grid-cols-2">
        <div class="rounded-lg mx-[12px]">
            <img src="./images/img4.png" alt="image3" class="mb-[24px]" />
            <h1 class="font-bold text-[20px] mb-[10px]">Express yourself</h1>
            <p class="lg:text-[16px] text-[12px] text-left">Memberikan pengguna platform untuk secara kreatif dan emosional mengungkapkan diri mereka sehubungan dengan perjalanan kesehatan mereka.</p>
        </div>
        <div class="rounded-lg mx-[12px]">
            <img src="./images/img5.png" alt="image3" class="mb-[24px] rounded-lg" />
            <h1 class="font-bold text-[20px] mb-[10px]">Start read to improve</h1>
            <p class="lg:text-[16px] text-[12px] text-left">Memberikan pengguna akses ke beragam materi bacaan yang dapat meningkatkan pemahaman mereka tentang kesehatan dan gaya hidup sehat.</p>
        </div>
        <div class="rounded-lg mx-[12px] review">
            <img src="./images/img6.png" alt="image3" class="mb-[24px] rounded-lg" />
            <h1 class="font-bold text-[20px] mb-[10px]">Stop blaming yourself</h1>
            <p class="text-[16px] text-left">Memberikan dukungan kepada pengguna yang mengalami perasaan bersalah atau menyalahkan diri sendiri terkait perjalanan mereka menuju gaya hidup sehat.</p>
        </div>
        <div class="rounded-lg mx-[12px] review">
            <img src="./images/img7.png" alt="image3" class="mb-[24px] rounded-lg" />
            <h1 class="font-bold text-[20px] mb-[10px]">Let’s saving from now</h1>
            <p class="text-[16px] text-left">Membantu pengguna mengelola dan meningkatkan pengeluaran keuangan mereka, serta mendorong kebiasaan menyimpan uang secara teratur.</p>
        </div>
        </div>
    </div>
    </section>
@endsection