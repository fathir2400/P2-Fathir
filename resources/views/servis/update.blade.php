@extends('admin.index')

@section('content')

<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Edit Servis</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]">
                        <a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">
                            Edit
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
                    Edit Data Servis
                </div>
            </div>
            <div class="box-body !-mt-4">
            <form action="{{ route('servis.update', $servis->id_servis) }}" method="POST">
    @csrf
    @method('PUT')  {{-- WAJIB DITAMBAHKAN --}}
    
    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="kode_barang" class="form-label">Barang</label>
                        <select class="form-control" name="kode_barang" id="kode_barang">
                            <option selected disabled hidden>Pilih Barang</option>
                            @foreach($barang as $item)
                            <option value="{{ $item->kode_barang }}" {{ $servis->kode_barang == $item->kode_barang ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="tanggal_servis" class="form-label">Tanggal Servis</label>
                        <input type="date" class="form-control" name="tanggal_servis"
                            value="{{ old('tanggal_servis', $servis->tanggal_servis) }}">
                        @error('tanggal_servis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="Pending" {{ $servis->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Proses" {{ $servis->status == 'Proses' ? 'selected' : '' }}>Proses</option>
                            <option value="Selesai" {{ $servis->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                        </select>
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Servis">{{ old('deskripsi', $servis->deskripsi) }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
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
