@extends('admin.index')

@section('content')

<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Tambah Spare Part</h5>
        </div>
    </div>

    <div class="xl:col-span-6 col-span-12">
        <div class="box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Form Tambah Spare Part
                </div>
            </div>
            <div class="box-body">
                <form action="{{ url('sparepart') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Auto Generate Kode Sparepart -->
                    <div class="mb-4">
                        <label for="kode_sparepart" class="form-label">Kode Spare Part</label>
                        <input type="text" class="form-control" name="kode_sparepart" readonly
   value="{{ 'SPT' . str_pad(\App\Models\SparePart::count() + 1, 3, '0', STR_PAD_LEFT) }}">

                    </div>

                    <!-- Nama Sparepart -->
                    <div class="mb-4">
                        <label for="nama_sparepart" class="form-label">Nama Spare Part</label>
                        <input type="text" class="form-control @error('nama_sparepart') is-invalid @enderror"
                               name="nama_sparepart" placeholder="Masukkan nama spare part"
                               value="{{ old('nama_sparepart') }}">
                        @error('nama_sparepart')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jumlah Stok -->
                    <div class="mb-4">
                        <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
                        <input type="number" class="form-control @error('jumlah_stok') is-invalid @enderror"
                               name="jumlah_stok" placeholder="Masukkan jumlah stok"
                               value="{{ old('jumlah_stok') }}">
                        @error('jumlah_stok')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Harga -->
                    <div class="mb-4">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                               name="harga" placeholder="Masukkan harga"
                               value="{{ old('harga') }}">
                        @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                        <label for="kode_kategori" class="form-label">Kategori</label>
                        <select name="kode_kategori" class="form-control @error('kode_kategori') is-invalid @enderror">
                            <option value="">Pilih Kategori</option>
                            @foreach($kategori as $kat)
                                <option value="{{ $kat->kode_kategori }}">{{ $kat->nama }}</option>
                            @endforeach
                        </select>
                        @error('kode_kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Satuan -->
                    <div class="mb-4">
                        <label for="kode_satuan" class="form-label">Satuan</label>
                        <select name="kode_satuan" class="form-control @error('kode_satuan') is-invalid @enderror">
                            <option value="">Pilih Satuan</option>
                            @foreach($satuan as $sat)
                                <option value="{{ $sat->kode_satuan }}">{{ $sat->nama}}</option>
                            @endforeach
                        </select>
                        @error('kode_satuan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    

                    <!-- Keterangan -->
                    <div class="mb-4">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror"
                                  name="keterangan" placeholder="Tambahkan keterangan">{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
