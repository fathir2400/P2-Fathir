@extends('admin.index')

@section('content')

 <!-- Start::main-content -->
 <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Edit Barang</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Edit <i
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
                                        Edit Barang
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <form action="{{ url('barang/' . $barang->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        
                                        <div class="xl:col-span-12 col-span-12 mt-0">
                                            <label for="text" class="form-label">Kode barang</label>
                                            <input type="text" class="form-control" name="kode_barang" placeholder="Kode barang"
                                                  value="{{ $barang->kode_barang }}" readonly>
                                        </div>

                                    
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Nama</label>
                                        <input type="text" class="form-control "  name="nama" placeholder="Nama"
                                        value="{{ old('nama', $barang->nama) }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <select class="form-control " name="kode_kategori" id="kategori">
                                        <option selected disabled hidden>Pilih kategori</option>
                                        @foreach($kategori as $item)
                                        <option value="{{$item->kode_kategori}}" {{ $barang->kode_kategori == $item->kode_kategori ? 'selected' : '' }}>{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="satuan" class="form-label">Satuan</label>
                                        <select class="form-control " name="kode_satuan" id="satuan">
                                        <option selected disabled hidden>Pilih satuan</option>
                                        @foreach($satuan as $item)
                                        <option value="{{$item->kode_satuan}}" {{ $barang->kode_satuan == $item->kode_satuan ? 'selected' : '' }}>{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="ruangan" class="form-label">Ruangan</label>
                                        <select class="form-control " name="kode_ruangan" id="ruangan">
                                        <option selected disabled hidden>Pilih ruangan</option>
                                        @foreach($ruangan as $item)
                                        <option value="{{$item->kode_ruangan}}" {{ $barang->kode_ruangan == $item->kode_ruangan ? 'selected' : '' }}>{{$item->nama}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Jumlah barang</label>
                                        <input type="text" class="form-control "  name="jumlah_barang" placeholder="Jumlah barang"
                                        value="{{ old('jumlah_barang', $barang->jumlah_barang) }}">
                                        @error('jumlah_barang')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                  
                             
                                        <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Update</button>
                                    </form>
                                </div>

                                </div>
                            </div>
                        </div>
                        @endsection
