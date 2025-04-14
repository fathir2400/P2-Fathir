@extends('admin.index')

@section('content')
<!-- Start::main-content -->
<div class="main-content">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Tambah Pengajuan</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> 
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);"> Tambah 
                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> 
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="xl:col-span-6 col-span-12">
        <div class="box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Tambah Pengajuan
                </div>
            </div>
            <div class="box-body !-mt-4">
                <form action="{{ url ('pengajuan') }}" method="POST">
                    @csrf
                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="nama_pemohon" class="form-label">Nama Pemohon</label>
                        <input type="text" class="form-control" name="nama_pemohon" placeholder="Nama Pemohon" value="{{ old('nama_pemohon') }}">
                        @error('nama_pemohon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="barang" class="form-label">Barang</label>
                        <input type="text" class="form-control" name="barang" placeholder="Barang" value="{{ old('barang') }}">
                        @error('barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="{{ old('jumlah') }}">
                        @error('jumlah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
          
                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" name="keterangan" placeholder="Keterangan">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
