<?php include(__DIR__ . "/layouts/header.php") ?>
<section class="px-4 mb-24">


        <div class="container mx-auto max-w-screen-xl">
            <nav class="flex mb-5 border-y border-orange-200 py-3" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center">
                        خانه
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                              </svg>
                              
                            <a href="#" class="mr-1 text-sm font-medium">تماس با ما</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">تمــــــاس بــــا مــــا</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">contact</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="relative">
                <div class="px-5 mx-auto flex sm:flex-nowrap flex-wrap">
                    <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full mt-8 md:mt-0 mb-8 md:mb-0">
                        <div class="mr-2">
                            <p class="font-YekanBakh-Bold text-base mb-2">پیغــام خــود را بـــا مـــا در میـــان بگذاریــــد...</p>
                            <p class="mb-4 text-xs leading-6">جهت ارتباط با ما و ارسال نظرات و پیشنهادات خود می توانید از فرم زیر استفاده نمایید.</p>
                        </div>
                        <form method="post">
                            <div class="form-control w-full flex flex-col gap-y-5">
                                <input type="text" placeholder="نام و نام خانوادگی" name="name" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                                <input type="text" placeholder="موضوع پیام" name="subject" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                                <input type="email" placeholder="پست الکترونیکی:" name="email" class="input w-full rounded-full focus:outline-none placeholder:text-sm" />
                                <textarea class="textarea w-full h-32 rounded-3xl focus:outline-none placeholder:text-sm" name="message" placeholder="متن پیام را بنویسید..."></textarea>
                                <button class="btn bg-stone-800 w-32 hover:bg-stone-900 text-white rounded-full text-sm" name="btn">ارسال پیام</button>
                            </div>
                        </form>
                    </div>
                    <div class="lg:w-2/3 md:w-1/2 rounded-3xl overflow-hidden sm:mr-10 p-10 hidden md:flex items-end justify-start relative">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                            marginwidth="0" scrolling="no"
                            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                        <div class="bg-white relative flex flex-wrap py-6 rounded-2xl mx-8">
                            <div class="lg:w-1/2 px-6">
                                <p class="font-YekanBakh-Bold text-base mb-2">مکـــان:</p>
                                <p class="mb-4 text-xs leading-6">جهت ارتباط با ما و ارسال نظرات و پیشنهادات خود می توانید از فرم زیر استفاده نمایید.</p>
                            </div>
                            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                                <p class="font-YekanBakh-Bold text-base mb-2">ایمیــل:</p>
                                <a class="text-orange-500 leading-relaxed">sitename@gmail.com</a>
                                <p class="font-YekanBakh-Bold text-base mb-2">تمـاس:</p>
                                <p class="leading-relaxed">021-55442345 | 09135553366</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php include(__DIR__ . "/layouts/footer.php") ?>