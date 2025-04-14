@extends('admin.index')

@section('content')

 <!-- Start::main-content -->
 <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Setting</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Setting <i
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
                                        Form Setting
                                    </div>
                                   
                                </div>
                                <div class="box-body !-mt-4">
                                    <form action="{{ route ('setting.update', $setting->id_setting) }}" method="POST" enctype="multipart/form-data">
                                  
                                    @csrf
                                    
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Nama</label>
                                        <input type="text" class="form-control " name="nama" placeholder="nama lengkap"
                                        value="{{old('nama') ?? $setting->nama}}">
                                        @error('nama_sekolah')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control "  name="email" placeholder="email"
                                        value="{{old('email') ?? $setting->email}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Alamat</label>
                                        <input type="text" class="form-control " name="alamat" placeholder="alamat lengkap"
                                        value="{{old('alamat') ?? $setting->alamat}}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Telepon</label>
                                        <input type="number" class="form-control " name="telepon" placeholder="telepon"
                                        value="{{old('telepon') ?? $setting->telepon}}">
                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <!-- <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Kode post</label>
                                        <input type="number" class="form-control " name="kode_post" placeholder="kode post"
                                        value="{{old('kode_post') ?? $setting->kode_post}}">
                                        @error('kode_post')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div> -->
                                    
                                    
                                    <br>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                    <label for="foto" class="form-label">Logo</label>
                                    <input type="file" name="logo" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                       file:border-0
                                      file:bg-light file:me-4
                                      file:py-3 file:px-4
                                      dark:file:bg-black/20 dark:file:text-white/50">
                                      @empty($setting->logo)
                                        <p>foto tidak ada</p>
                                        @else
                                        <div class="mt-2">
                                          <small>Foto lama:</small>
                                          <img src="{{asset('storage/logo/'.$setting->logo) }}" class="img-preview" alt="Foto pengguna" width="120px">
                                        </div>
                                        @endempty
                                      @error('logo')
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