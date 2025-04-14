@extends('admin.index')

@section('content1')
<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
          <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Personal</h5>
            <nav>
              <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                    href="javascript:void(0);"> Dashboard <i
                      class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                  </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                    href="javascript:void(0);">Personal 
                  </a> </li>
              </ol>
            </nav>
          </div>

          <div class="flex xl:my-auto right-content align-items-center">
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                <i class="mdi mdi-filter-variant"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-star"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-refresh"></i>
              </button>
            </div>
            <div class="xl:mb-0">
              <div class="hs-dropdown ti-dropdown">
                <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                </button>
                <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Header Close -->
        <!-- End::page-header -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xxl:col-span-9">
            <div class="grid grid-cols-12 gap-x-6">
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Total Candidates</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">125</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+12.86%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-primary p-3 text-white"> <i
                            class="ti ti-users text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar"
                          style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">50%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Recruiters</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">968</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+5.46%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-danger p-3 text-white"> <i
                            class="ti ti-user-circle  text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-danger text-xs text-white text-center" role="progressbar"
                          style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">80%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Total Subscriptions</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">28</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+3.20%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-success p-3 text-white"> <i
                            class="ti ti-browser-check text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-success text-xs text-white text-center" role="progressbar"
                          style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Page Views</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">645</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+1.20%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-info p-3 text-white"> <i
                            class="ti ti-view-360 text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-info text-xs text-white text-center" role="progressbar"
                          style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 @endsection