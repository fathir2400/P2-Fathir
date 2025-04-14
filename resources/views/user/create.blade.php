@extends('admin.index')

@section('content')

 <!-- Start::main-content -->
 <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Tambah User</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> tambah <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
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
                    
                  </div>
                </div>

                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Tambah
                                    </div>
                                   
                                </div>
                                <div class="box-body !-mt-4">
                                    <form action="{{ url ('Users') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Name</label>
                                        <input type="text" class="form-control " name="name" placeholder="nama lengkap"
                                        value="{{old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control "  name="email" placeholder="email"
                                        value="{{old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Telepon</label>
                                        <input type="number" class="form-control " name="telepon" placeholder="nama lengkap"
                                        value="{{old('telepon')}}">
                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                   
                                    
                                  
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Alamat</label>
                                        <input type="text-box" class="form-control " name="alamat" placeholder="alamat lengkap"
                                        value="{{old('alamat')}}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="password" class="form-label">password</label>
                                        <input type="password" class="form-control "  name="password" placeholder="password"
                                        value="{{old('password')}}">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="password" class="form-label">password comfirmation</label>
                                        <input type="password" class="form-control "  name="password_confirmation" placeholder="confirmasi password"
                                        value="{{old('password_confirmation')}}">
                                        @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <br>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto_profile" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                       file:border-0
                                      file:bg-light file:me-4
                                      file:py-3 file:px-4
                                      dark:file:bg-black/20 dark:file:text-white/50" value="{{old('foto_profile')}}">
                                      @error('foto_profile')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                </div>
                            
                                        <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Submit</button>
                                    </form>
                                </div>
                               

                                </div>
                            </div>
                        </div>
                        @endsection