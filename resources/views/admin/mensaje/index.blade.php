@extends('admin.layouts.main')

@section('head')
<title>Directorio</title>
@endsection

@section('content')



                <div class="flex md:space-x-5 app_height overflow-hidden relative rtl:space-x-reverse">
                  <div class="email-sidebar ">
                    <div class="h-full card">
                      <div class="card-body py-6 h-full flex flex-col">
                        <div class="flex-1 h-full px-6">
                          <button class="btn inline-flex justify-center btn-dark w-full" data-bs-toggle="modal" data-bs-target="#newEmailModal">
                            <span class="flex items-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                <span>Compose</span>
                            </span>
                          </button>
                        </div>
                        <div class="h-full px-6 " data-simplebar="data-simplebar">
                          <ul class="email-categories list mt-6">

                            <!-- BEGIN: Top Filter -->

                            <li class="active email-categorie-list" data-status="all">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl leading-[1]">
                    <iconify-icon icon="uil:image-v"></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                  Inboxs
                </span>
                                </span>

                              </label>
                            </li>

                            <li class="email-categorie-list" data-status="stared">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl">
                    <iconify-icon icon=heroicons:star></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                    Stared
                </span>
                                </span>

                              </label>
                            </li>

                            <li class="email-categorie-list" data-status="sent">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl">
                    <iconify-icon icon=heroicons-outline:paper-airplane></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                    Sent
                </span>
                                </span>

                              </label>
                            </li>

                            <li class="email-categorie-list" data-status="drafts">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl">
                    <iconify-icon icon=heroicons-outline:pencil-alt></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                    Drafts
                </span>
                                </span>

                              </label>
                            </li>

                            <li class="email-categorie-list" data-status="spam">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl">
                    <iconify-icon icon=heroicons:information-circle></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                    Spam
                </span>
                                </span>

                              </label>
                            </li>

                            <li class="email-categorie-list" data-status="trash">
                              <label>
                                <span class="flex-1 flex space-x-2 rtl:space-x-reverse">
                <span class="text-xl">
                    <iconify-icon icon=heroicons:trash></iconify-icon>
                </span>
                                <span class="capitalize text-sm">
                    Trash
                </span>
                                </span>

                              </label>
                            </li>

                            <!-- END: Top Filter -->
                          </ul>
                          <div class="block py-4 text-slate-800 dark:text-slate-400 font-semibold text-xs uppercase">
                            Tags
                          </div>
                          <ul class="email-categories list">

                            <!-- BEGIN: Buttom Filter -->


                            <li data-status="personal" class="flex space-x-2 text-sm capitalize py-2 dark:text-slate-300 cursor-pointer items-center rtl:space-x-reverse email-categorie-list">
                              <span class="bar-c  bg-danger-500 ring-danger-500  inline-block h-2 w-2 rounded-full ring-opacity-30
            transition-all duration-150 "></span>
                              <span class="transition duration-150">personal</span>
                            </li>

                            <li data-status="social" class="flex space-x-2 text-sm capitalize py-2 dark:text-slate-300 cursor-pointer items-center rtl:space-x-reverse email-categorie-list">
                              <span class="bar-c 
            bg-success-500 ring-success-500  inline-block h-2 w-2 rounded-full ring-opacity-30
            transition-all duration-150 "></span>
                              <span class="transition duration-150">Social</span>
                            </li>

                            <li data-status="promotions" class="flex space-x-2 text-sm capitalize py-2 dark:text-slate-300 cursor-pointer items-center rtl:space-x-reverse email-categorie-list">
                              <span class="bar-c  bg-warning-500 ring-warning-500  inline-block h-2 w-2 rounded-full ring-opacity-30
            transition-all duration-150 "></span>
                              <span class="transition duration-150">Promotions</span>
                            </li>

                            <li data-status="business" class="flex space-x-2 text-sm capitalize py-2 dark:text-slate-300 cursor-pointer items-center rtl:space-x-reverse email-categorie-list">
                              <span class="bar-c  bg-primary-500 ring-primary-500  inline-block h-2 w-2 rounded-full ring-opacity-30
            transition-all duration-150 "></span>
                              <span class="transition duration-150">Business</span>
                            </li>

                            <!-- END: Bottom Filter -->
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="email-overlay"></div>
                  <div class="flex-1 md:w-[calc(100%-320px)]">
                    <div class="h-full card">
                      <div class="p-0  h-full relative card-body">

                        <!-- BEGIN: Email Header -->
                        <div class="md:flex justify-between items-center sticky bg-white dark:bg-slate-800 top-0 pt-6 pb-4 px-6 z-[3] border-b
        border-slate-100 dark:border-slate-700 rounded-t-md">
                          <div class="flex items-center rtl:space-x-reverse">
                            <div class="open-sidebar md:h-8 md:w-8 h-6 w-6 bg-slate-100 dark:bg-slate-900 dark:text-slate-400 flex flex-col justify-center
                items-center ltr:mr-3 rlt:ml-3 lg:hidden md:text-base text-sm rounded-full cursor-pointer">
                              <iconify-icon icon="heroicons-outline:menu-alt-2"></iconify-icon>
                            </div>
                            <div class="max-w-[180px] flex items-center space-x-1 rtl:space-x-reverse leading-[0]">
                              <div>
                                <input type="checkbox" class="table-checkbox" id="email-select-all">
                              </div>
                              <div>
                                <input type="text" id="email-search" placeholder="Search Email" class="bg-transparent text-sm font-regular text-slate-600 dark:text-slate-300 transition duration-150 rounded px-2 py-1
                            focus:outline-none">
                              </div>
                            </div>
                          </div>
                          <div class="md:block hidden">
                            <div class="relative">
                              <div class="dropdown relative">
                                <button class="text-xl text-center block w-full " type="button" id="emailDropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                  <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                </button>
                                <ul class=" dropdown-menu min-w-[160px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                            shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                  <li>
                                    <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                                      <span class=" text-lg leading-[0]"><iconify-icon icon="heroicons-outline:sort-ascending"></iconify-icon>
                                </span>
                                      <span>Reset Sort</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                                      <span class=" text-lg leading-[0]"><iconify-icon icon="heroicons-outline:sort-ascending"></iconify-icon>
                                </span>
                                      <span>Sort A-Z</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#" class="w-full text-slate-600 dark:text-white font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600
                                    space-x-2 rtl:space-x-reverse inline-flex items-center dark:hover:text-white">
                                      <span class=" text-lg leading-[0]"><iconify-icon icon="heroicons-outline:sort-descending"></iconify-icon>
                                </span>
                                      <span>Sort Z-A
                                </span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END: Email Header -->
                        <div class="h-full all-todos overflow-x-hidden" data-simplebar="data-simplebar">
                          <ul class="divide-y divide-slate-100 dark:divide-slate-700 -mb-6 h-full email-list">

                            <!-- BEGIN: Email List -->


                            <li data-status="sent,spam,personal,business" data-stared="false" class="flex px-7 space-x-6 group md:py-6 py-3 relative cursor-pointer hover:bg-slate-50 dark:hover:bg-transparent group
                                                                                                                                                                                    items-center rtl:space-x-reverse">
                              <div>
                                <input type="checkbox" class="table-checkbox" name="email-checkbox">
                              </div>
                              <div class="email-fav">
                                <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative "></iconify-icon>
                              </div>
                              <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                <div class="flex-none">
                                  <div class="h-8 w-8 rounded-full text-white">
                                    <img src="assets/images/avatar/av-1.svg" alt="" class="block w-full h-full object-cover">
                                  </div>
                                </div>
                                <div class="read-unread-name flex-1 text-sm min-w-max">
                                  Esther Howard
                                </div>
                              </div>
                              <p class="truncate">
                                <span class="read-unread-name text-sm">
                    Pay bills &amp; win up
                </span>
                                <span class="text-sm text-slate-600 dark:text-slate-300 font-normal">
                     - Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...
                </span>
                              </p>
                              <div class="grow"></div>
                              <span>
                <span class="flex-1 flex space-x-4 items-center rtl:space-x-reverse">
                    <span class="flex-none space-x-2 text-xs text-slate-900 dark:text-slate-300 rtl:space-x-reverse">
                        <span>12:20 pm</span>
                              </span>
                              </span>
                              <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 dark:text-slate-300 group-hover:bg-slate-100
                        dark:group-hover:bg-slate-800 bg-white h-full w-[100px] flex flex-col items-center justify-center opacity-0 invisible
                        delete-button group-hover:opacity-100 group-hover:visible">
                    <iconify-icon icon="heroicons-outline:trash" class="transition duration-150 hover:text-danger-500"></iconify-icon>
                </span>
                              </span>
                            </li>

                            <li data-status="drafts,business,promotions,stared" data-stared="true" class="flex px-7 space-x-6 group md:py-6 py-3 relative cursor-pointer hover:bg-slate-50 dark:hover:bg-transparent group
                                                                                                                                                                                    items-center rtl:space-x-reverse">
                              <div>
                                <input type="checkbox" class="table-checkbox" name="email-checkbox">
                              </div>
                              <div class="email-fav">
                                <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative "></iconify-icon>
                              </div>
                              <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                <div class="flex-none">
                                  <div class="h-8 w-8 rounded-full text-white">
                                    <img src="assets/images/avatar/av-2.svg" alt="" class="block w-full h-full object-cover">
                                  </div>
                                </div>
                                <div class="read-unread-name flex-1 text-sm min-w-max">
                                  Esther Howard
                                </div>
                              </div>
                              <p class="truncate">
                                <span class="read-unread-name text-sm">
                    Pay bills &amp; win up
                </span>
                                <span class="text-sm text-slate-600 dark:text-slate-300 font-normal">
                     - Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...
                </span>
                              </p>
                              <div class="grow"></div>
                              <span>
                <span class="flex-1 flex space-x-4 items-center rtl:space-x-reverse">
                    <span class="flex-none space-x-2 text-xs text-slate-900 dark:text-slate-300 rtl:space-x-reverse">
                        <span>12:20 pm</span>
                              </span>
                              </span>
                              <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 dark:text-slate-300 group-hover:bg-slate-100
                        dark:group-hover:bg-slate-800 bg-white h-full w-[100px] flex flex-col items-center justify-center opacity-0 invisible
                        delete-button group-hover:opacity-100 group-hover:visible">
                    <iconify-icon icon="heroicons-outline:trash" class="transition duration-150 hover:text-danger-500"></iconify-icon>
                </span>
                              </span>
                            </li>

                            <li data-status="stared,promotions,social" data-stared="true" class="flex px-7 space-x-6 group md:py-6 py-3 relative cursor-pointer hover:bg-slate-50 dark:hover:bg-transparent group
                                                                                                                                                                                    items-center rtl:space-x-reverse">
                              <div>
                                <input type="checkbox" class="table-checkbox" name="email-checkbox">
                              </div>
                              <div class="email-fav">
                                <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative "></iconify-icon>
                              </div>
                              <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                <div class="flex-none">
                                  <div class="h-8 w-8 rounded-full text-white">
                                    <img src="assets/images/avatar/av-3.svg" alt="" class="block w-full h-full object-cover">
                                  </div>
                                </div>
                                <div class="read-unread-name flex-1 text-sm min-w-max">
                                  Esther Howard
                                </div>
                              </div>
                              <p class="truncate">
                                <span class="read-unread-name text-sm">
                    1-Pay bills &amp; win 
                </span>
                                <span class="text-sm text-slate-600 dark:text-slate-300 font-normal">
                     - Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...
                </span>
                              </p>
                              <div class="grow"></div>
                              <span>
                <span class="flex-1 flex space-x-4 items-center rtl:space-x-reverse">
                    <span class="flex-none space-x-2 text-xs text-slate-900 dark:text-slate-300 rtl:space-x-reverse">
                        <span>12:20 pm</span>
                              </span>
                              </span>
                              <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 dark:text-slate-300 group-hover:bg-slate-100
                        dark:group-hover:bg-slate-800 bg-white h-full w-[100px] flex flex-col items-center justify-center opacity-0 invisible
                        delete-button group-hover:opacity-100 group-hover:visible">
                    <iconify-icon icon="heroicons-outline:trash" class="transition duration-150 hover:text-danger-500"></iconify-icon>
                </span>
                              </span>
                            </li>

                            <li data-status="spam,social,stared" data-stared="true" class="flex px-7 space-x-6 group md:py-6 py-3 relative cursor-pointer hover:bg-slate-50 dark:hover:bg-transparent group
                                                                                                                                                                                    items-center rtl:space-x-reverse">
                              <div>
                                <input type="checkbox" class="table-checkbox" name="email-checkbox">
                              </div>
                              <div class="email-fav">
                                <iconify-icon icon="heroicons:star" class="text-xl leading-[1] relative "></iconify-icon>
                              </div>
                              <div class="flex items-center space-x-3 rtl:space-x-reverse">
                                <div class="flex-none">
                                  <div class="h-8 w-8 rounded-full text-white">
                                    <img src="assets/images/avatar/av-4.svg" alt="" class="block w-full h-full object-cover">
                                  </div>
                                </div>
                                <div class="read-unread-name flex-1 text-sm min-w-max">
                                  Esther Howard
                                </div>
                              </div>
                              <p class="truncate">
                                <span class="read-unread-name text-sm">
                    1-Pay bills &amp; win 
                </span>
                                <span class="text-sm text-slate-600 dark:text-slate-300 font-normal">
                     - Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...
                </span>
                              </p>
                              <div class="grow"></div>
                              <span>
                <span class="flex-1 flex space-x-4 items-center rtl:space-x-reverse">
                    <span class="flex-none space-x-2 text-xs text-slate-900 dark:text-slate-300 rtl:space-x-reverse">
                        <span>12:20 pm</span>
                              </span>
                              </span>
                              <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 dark:text-slate-300 group-hover:bg-slate-100
                        dark:group-hover:bg-slate-800 bg-white h-full w-[100px] flex flex-col items-center justify-center opacity-0 invisible
                        delete-button group-hover:opacity-100 group-hover:visible">
                    <iconify-icon icon="heroicons-outline:trash" class="transition duration-150 hover:text-danger-500"></iconify-icon>
                </span>
                              </span>
                            </li>

                            <!-- END: Email List -->
                            <li class="mx-6 mt-6 " id="no-result">
                              <span class="badge bg-danger-500 text-white w-full block text-start">
        <span class="inline-flex items-center">No Result Found</span>
                              </span>
                            </li>
                          </ul>
                        </div>

                        <!-- BEGIN: Single Email -->
                        <div class="absolute left-0 top-0 w-full h-full bg-white dark:bg-slate-800 z-[55] rounded-md p-6 overflow-y-auto" id="single-email">
                          <div class="flex items-center border-b border-slate-100 dark:border-slate-700 -mx-6 pb-6 mb-6 px-6">
                            <div class="flex-1">
                              <button class="email-icon close-email" type="button">
                                <iconify-icon icon="heroicons-outline:arrow-left"></iconify-icon>
                              </button>
                            </div>
                            <div class="flex-none flex items-center space-x-4 rtl:space-x-reverse">
                              <button class="email-icon" type="button">
                                <iconify-icon icon="heroicons-outline:logout"></iconify-icon>
                              </button>
                              <button class="email-icon">
                                <iconify-icon icon="heroicons-outline:star"></iconify-icon>
                              </button>
                              <button class="email-icon">
                                <iconify-icon icon="heroicons-outline:archive"></iconify-icon>
                              </button>
                              <button class="email-icon">
                                <iconify-icon icon="heroicons-outline:printer"></iconify-icon>
                              </button>
                              <button class="email-icon">
                                <iconify-icon icon="heroicons-outline:trash"></iconify-icon>
                              </button>
                              <button class="email-icon">
                                <iconify-icon icon="heroicons-outline:dots-horizontal"></iconify-icon>
                              </button>
                            </div>
                          </div>
                          <div>
                            <div class="text-lg font-medium text-slate-600 dark:text-slate-300">
                              Pay bills & win up to 600$ Cashback!
                            </div>
                            <div class="flex space-x-3 pt-4 pb-6 items-start rtl:space-x-reverse">
                              <div class="flex-none">
                                <div class="h-8 w-8 rounded-full text-white">
                                  <img src="assets/images/avatar/av-1.svg" alt="" class="block w-full h-full object-cover">
                                </div>
                              </div>
                              <div class="flex-1">
                                <span class="text-sm text-slate-600 dark:text-slate-300 font-medium leading-4">
                    Esther Howard
                </span>
                              </div>
                            </div>
                            <div class="text-sm text-slate-600 dark:text-slate-300 font-normal">
                              Hi Jane Cooper, <br/> <br/> Jornalists call this critical, introductory section the "Lede," and when bridge properly
            executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if
            you want to get it right on of these 10 clever ways to omen your next blog
                              <br/> <br/> posr with a bang With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part
            of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the
            title, however, the first few sentences of your article are certainly the most important part.
                              <br/> <br/> Best regards,
                              <br/> Esther Howard
                            </div>
                            <div class="border-t border-b py-4 my-6 border-slate-100 dark:border-slate-700 flex flex-wrap space-x-5 rtl:space-x-reverse">
                              <div class="text-center">
                                <div class="h-[95px] w-[150px] rounded">
                                  <img src="assets/images/all-img/inbox-1.png" alt="" class="block w-full h-full object-cover">
                                </div>
                                <button class="text-sm text-primary-500 mt-2" type="button">
                                  Download
                                </button>
                              </div>
                              <div class="text-center">
                                <div class="h-[95px] w-[150px] rounded">
                                  <img src="assets/images/all-img/inbox-2.png" alt="" class="block w-full h-full object-cover">
                                </div>
                                <button class="text-sm text-primary-500 mt-2" type="button">
                                  Download
                                </button>
                              </div>
                              <div class="text-center">
                                <div class="h-[95px] w-[150px] rounded">
                                  <img src="assets/images/all-img/inbox-3.png" alt="" class="block w-full h-full object-cover">
                                </div>
                                <button class="text-sm text-primary-500 mt-2" type="button">
                                  Download
                                </button>
                              </div>
                            </div>
                            <div>
                              <button class="btn bg-slate-100 text-slate-900 dark:text-slate-300 hover:bg-slate-300 dark:bg-slate-900 btn-sm ">
                                Reply
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- END: Single Email -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="newEmailModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog relative w-auto pointer-events-none">
                    <div class="modal-content border-none shadow-lg relative flex flex-col lg:w-[576px] w-full pointer-events-auto bg-white
          bg-clip-padding rounded-md outline-none text-current">
                      <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-slate-900 dark:bg-slate-700">
                          <h3 class="text-base font-medium text-white dark:text-white capitalize">
                            Compose Email
                          </h3>
                          <button type="button" class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                dark:hover:bg-slate-600 dark:hover:text-white" data-bs-dismiss="modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10
                    11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                          </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                          <form class="flex flex-col space-y-3">
                            <div class="input-area">
                              <label for="email" class="form-label">To</label>
                              <input id="email" type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-area">
                              <label for="subject" class="form-label">Subject</label>
                              <input id="subject" type="text" class="form-control" placeholder="Enter Title">
                            </div>
                            <div class="!mt-7 rounded">
                              <div id="editor-container" class="h-32 dark:text-white"></div>
                            </div>
                            <div class="flex items-center justify-end rounded-b dark:border-slate-600">
                              <button data-bs-dismiss="modal" class="btn inline-flex justify-center text-white bg-black-500">Send</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
       

   
@endsection