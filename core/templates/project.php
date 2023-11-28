<?php include(__DIR__ . "/layouts/header.php") ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/node_modules/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/build/style.css">
    <title>پروژه ها</title>
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
                              
                            <a href="#" class="mr-1 text-sm font-medium">پروژه ها</a>
                        </div>
                    </li>
                </ol>
            </nav>  
            <div class="flex justify-center relative my-16">
                <h2 class="font-YekanBakh-ExtraBlack text-3xl">پــــــــــــروژه هـــــــا</h2>
                <div class="absolute -top-6">
                    <span class="font-YekanBakh-ExtraBlack text-6xl text-opacity-10 text-stone-900">project</span>

                </div>
                <div class="bg-orange-200 w-20 h-1.5 rounded-full absolute top-10"></div>

            </div> 

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                <!-- image - start -->
                <a href="single-project"
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-72">
                    <img src="../assets/images/project-30.jpg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-white text-center">پروژه شماره یک</span>
                </a>
                <!-- image - end -->
    
                <!-- image - start -->
                <a href="single-project"
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-72">
                    <img src="../assets/images/blog-2.jpg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-white text-center">پروژه شماره دو</span>
                </a>
                <!-- image - end -->
    
                <!-- image - start -->
                <a href="single-project"
                    class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-72">
                    <img src="../assets/images/project-31.jpg" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-white text-center">پروژه شماره سه</span>
                </a>
                <!-- image - end -->
    
                <!-- image - start -->
                <a href="single-project" class="group relative flex justify-center h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-72">
                    <img src="../assets/images/blog-4.jpg" class="absolute inset-0 h-full w-full object-cover object-center transition duration-300 group-hover:scale-110" />
    
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                    </div>
    
                    <span class="relative mb-4 flex justify-center text-base text-white text-center">پروژه شماره 4</span>
                </a>
                <!-- image - end -->
            </div>
        </div>
    </section>

<?php include(__DIR__ . "/layouts/footer.php") ?>