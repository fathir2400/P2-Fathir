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
                                    <form action="{{ url ('barang') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="xl:col-span-12 col-span-12 mt-0">
                                            <label for="text" class="form-label">Kode barang</label>
                                            <input type="text" class="form-control" name="kode_barang" placeholder="Kode barang"
                                                  value="{{ 'BRG' . str_pad(App\Models\barang::count() + 1, 3, '0', STR_PAD_LEFT) }}" readonly>
                                        </div>

                                    
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Nama</label>
                                        <input type="text" class="form-control "  name="nama" placeholder="nama"
                                        value="{{old('nama')}}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="kategori" class="form-label">kategori</label>
                                        <select class="form-control " name="kode_kategori" id="kategori">
                                        <option selected disabled hidden>Pilih kategori</option>
                                        @foreach($kategori as $item)
                                        <option value="{{$item->kode_kategori}}">{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="satuan" class="form-label">Satuan</label>
                                        <select class="form-control " name="kode_satuan" id="satuan">
                                        <option selected disabled hidden>Pilih satuan</option>
                                        @foreach($satuan as $item)
                                        <option value="{{$item->kode_satuan}}">{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="ruangan" class="form-label">ruangan</label>
                                        <select class="form-control " name="kode_ruangan" id="ruangan">
                                        <option selected disabled hidden>Pilih ruangan</option>
                                        @foreach($ruangan as $item)
                                        <option value="{{$item->kode_ruangan}}">{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="number" class="form-label">Jumlah_barang</label>
                                        <input type="number" class="form-control "  name="jumlah_barang" placeholder="jumlah barang"
                                        value="{{old('jumlah_barang')}}">
                                        @error('jumlah_barang')
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