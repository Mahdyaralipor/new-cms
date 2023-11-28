<?php include(__DIR__ . "/layouts/header.php");


$page = explode("/",$_SERVER['REQUEST_URI']);
$page = end($page);
$query = connection()->prepare("select * from projects where id = ?");
$query->bindValue(1,$page);
$query->execute();
$detail = $query->fetch();


$query = connection()->query("select * from comment where project_id =" . $detail['id']);
$comments = $query->fetchAll();


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/build/style.css">
    <title><?=$detail['name']?></title>
</head>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium"><?=$detail['name']?></a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex flex-col items-center justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl"><?=$detail['name']?></h2>

                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>
                <p class="mt-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
            </div> 

            <div class="max-w-4xl mx-auto">
               
                  <div class="mb-12">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper project-main">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="rounded-xl cursor-pointer" src="../assets/images/blog-5.jpg" />
                              </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-9.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-3.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-4.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-6.jpg" />
                          </div>
                        </div>
                        <div class="swiper-button-next after:text-sm"></div>
                        <div class="swiper-button-prev after:text-sm"></div>
                      </div>
                      <div thumbsSlider="" class="swiper gall-project mt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="rounded-xl cursor-pointer" src="../assets/images/blog-5.jpg" />
                              </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-9.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-3.jpg" />
                          </div>
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-4.jpg" />
                          </div>
                        
                          <div class="swiper-slide">
                            <img class="rounded-xl cursor-pointer" src="../assets/images/blog-6.jpg" />
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="leading-8 mb-12">
                    <div class="p-2 mb-4">
                        <div class="flex justify-center space-x-4">
                          <button class="px-10 py-1 bg-stone-900 rounded-full text-white mx-4 tab-button" onclick="showTab('tab1')">تــوضــیحــات</button>
                          <button class="px-8 py-1 bg-stone-900 rounded-full text-white mx-4 tab-button" onclick="showTab('tab2')">اطلاعات بیشتر</button>
                        </div>
                      </div>
                    
                      <!-- Tab Content -->
                      <div id="tab1" class="p-4 tab-content rounded-lg">
                        <h2 class="font-YekanBakh-ExtraBold text-2xl mb-4 text-center">توضیحات</h2>
                        <p><?=$detail['description']?></p>
                      </div>
                      <div id="tab2" class="p-4 tab-content rounded-lg hidden">
                        <h2 class="font-YekanBakh-ExtraBold text-2xl mb-4 text-center">اطلاعات بیشتر</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>                
                              </div>
                              <div class="mr-2">پروژه: شرکت برق ایران</div>
                            </div>
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                                </svg>
                                               
                              </div>
                              <div class="mr-2">محل پروژه: تهران</div>
                            </div>
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                               
                              </div>
                              <div class="mr-2">ناظر پروژه: سهیلا حیدرنیا</div>
                            </div>
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                                                
                              </div>
                              <div class="mr-2">ارزش مالی: یک میلیارد</div>
                            </div>
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                               
                              </div>
                              <div class="mr-2">30 اردیبهشت 1402</div>
                            </div>
                            <div class="bg-orange-200 rounded-lg flex items-center">
                              <div class="bg-stone-900 text-white rounded-lg p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25" />
                                </svg>
                                               
                              </div>
                              <div class="mr-2">مساحت: 2000 متر</div>
                            </div>
                          </div>
                      </div>
                   
                  </div>
                
                  <div>

                  <?php  foreach($comments as $comment){ ?>
                      
                    <div style="margin: 20px;">
                      <p><?=$comment['comment']?></p>
                      <hr>
                    </div>

                  <?php } ?>


                    <div class="flex items-center mb-6">


                    
                  
                        <div class="mr-2">
                            <span class="font-IRANSansWeb_Bold bg-orange-200 rounded-full px-4 py-1">نظرات</span>
                            <p class="mt-2">شما با نام یاسمن وارد شده اید!!</p>
                        </div>
                    </div>
                    <form method="post">
                      <input type="hidden" name="project_id" value="<?=$detail['id']?>">
                    <textarea name="comment" class="textarea textarea-bordered w-full h-36 rounded-3xl" placeholder="نظر خود را بنویسید..."></textarea>
                    <button name="btn" class="btn bg-stone-800 w-36 hover:bg-stone-900 text-white mt-4 rounded-full">ارسال پیام</button>
                    </form>
                    
              </div>
            </div>

        </div>
    </section>
<?php include(__DIR__ . "/layouts/footer.php") ?>