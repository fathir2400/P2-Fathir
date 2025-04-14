@extends('admin.index')

@section('content')

<!-- Start::main-content -->
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Edit Peminjaman</h5>
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
                    Edit Data Peminjaman
                </div>
            </div>
            <div class="box-body !-mt-4">
                <form action="{{ url('peminjaman/' . $peminjaman->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Method for updating -->

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="kode_peminjaman" class="form-label">Kode Peminjaman</label>
                        <input type="text" class="form-control" name="kode_peminjaman" placeholder="Kode Peminjaman"
                            value="{{ $peminjaman->kode_peminjaman }}" readonly>
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="nama_peminjaman" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" name="nama_peminjaman" placeholder="Nama Peminjam"
                            value="{{ $peminjaman->nama_peminjaman }}">
                        @error('nama_peminjaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="barang" class="form-label">Barang</label>
                        <select class="form-control" name="kode_barang" id="barang">
                            <option selected disabled hidden>Pilih Barang</option>
                            @foreach($barang as $item)
                            <option value="{{ $item->kode_barang }}" 
                                {{ $item->kode_barang == $peminjaman->kode_barang ? 'selected' : '' }}>
                                {{ $item->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_peminjaman"
                            value="{{ $peminjaman->tanggal_peminjaman }}">
                        @error('tanggal_peminjaman')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="xl:col-span-12 col-span-12 mt-0">
                        <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" name="tanggal_pengembalian"
                            value="{{ $peminjaman->tanggal_pengembalian }}">
                        @error('tanggal_pengembalian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
    <label for="status_peminjaman">Status Peminjaman</label>
    <select class="form-control" name="status_peminjaman" id="status_peminjaman">
        <option value="" selected>-- Pilih Status --</option>
        <option value="Diajukan" {{ old('status_peminjaman', $peminjaman->status_peminjaman ?? 'Diajukan') == 'Diajukan' ? 'selected' : '' }}>Diajukan</option>
        <option value="Dipinjam" {{ old('status_peminjaman', $peminjaman->status_peminjaman) == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
        <option value="Ditolak" {{ old('status_peminjaman', $peminjaman->status_peminjaman) == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
    </select>
</div>


                    <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
