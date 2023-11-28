<?php include(__DIR__ . "/layouts/header.php") ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/build/style.css">
    <title>ارور ۴۰۴</title>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium">404</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="container mx-auto max-w-screen-md text-center leading-10">
                <img class="w-3/4 mb-8 mx-auto" src="../assets/images/404.png" alt="">
                <p class="text-xl mb-4">صفحه مورد نظر شما یافت نشد!!</p>
                <a class="bg-stone-800 text-white hover:bg-orange-200 hover:text-stone-900 duration-300 py-2.5 px-6 rounded-full" href="index.html">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </section>
<?php include(__DIR__ . "/layouts/footer.php") ?>