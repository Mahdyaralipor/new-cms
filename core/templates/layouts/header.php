
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<body class="font-YekanBakh-Regular text-sm bg-[#f5f1e4]">

    <section class="px-4 static">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex justify-between items-center py-6">
              <div class="lg:hidden leading-none z-10">
                <div class="drawer">
                    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer-4" class="swap swap-rotate drawer-button">
  
                          <!-- this hidden checkbox controls the state -->
                          <input type="checkbox" />
                          
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-off fill-current">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-black swap-on fill-current">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            
                        </label> 
                      </div> 
                      <div class="drawer-side">
                        <label for="my-drawer-4" class="drawer-overlay"></label>
                        <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
                          <div class="drawer-content text-left">
                              <label for="my-drawer-4" class="swap swap-rotate drawer-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                              </label> 
                            </div> 
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/">صفحه اصلی</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="service">خدمات</a></li>
                            <li><details>
                                <summary><a href="project">پروژه ها</a></summary>
                                <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0">
                                  <li><a href="blog2">وبلاگ دمو دوم</a></li>
                                  <li><a>جزئیات پروژه</a></li>
                                  <li>
                                    <details>
                                      <summary>زیر منوی اول</summary>
                                      <ul>
                                        <li><a>آیتم شماره یک</a></li>
                                        <li><a>آیتم شماره دوم</a></li>
                                      </ul>
                                    </details>
                                  </li>
                                </ul>
                            </details></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="question">سوالات متداول</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
                            <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
                          </ul>
                          </div>
                        </div>
            </div>
              <div class="flex items-center gap-8">
                <div>
                    <a href="/"><img src="../assets/images/logo.png" alt=""></a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex menu lg:menu-horizontal">
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="/">صفحه اصلی</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="service">خدمات</a></li>
                        <li><details>
                            <summary><a href="project">پروژه ها</a></summary>
                            <ul class="p-2 z-10 w-48 bg-[#f5f1e4] m-0">
                              <li><a href="blog2">وبلاگ دمو دوم</a></li>
                              <li><a>جزئیات پروژه</a></li>
                              <li>
                                <details>
                                  <summary>زیر منوی اول</summary>
                                  <ul>
                                    <li><a>آیتم شماره یک</a></li>
                                    <li><a>آیتم شماره دوم</a></li>
                                  </ul>
                                </details>
                              </li>
                            </ul>
                        </details></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="question">سوالات متداول</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="blog">وبلاگ</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="about-us">درباره ما</a></li>
                        <li><a class="hover:border-b hover:border-orange-200 pb-1 duration-300" href="contact-us">تماس با ما</a></li>
                    </ul>
                </div>
              </div>
                <div class="border bg-stone-900 text-orange-200 hover:bg-orange-200 hover:text-stone-900 duration-300 rounded-full">
                      <a href="<?= isset($_SESSION['USER-LOGIN']) ? "/logout" :  "/login"?>" id="01" class="flex py-2.5 px-7 rounded-full font-YekanBakh-Regular"><?=isset($_SESSION['USER-LOGIN']) ? $_SESSION['USER-DETAIL']['username'] . " | خروج" : "ورود | ثبت نام"?></a>
                  </div>
      
            </div>
        </div>
    </section>
