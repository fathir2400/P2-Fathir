@extends('admin.index')

@section('content')

 <!-- Start::main-content -->
 <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Edit User</h5>
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
                                        EDIT
                                    </div>
                                   
                                </div>
                                <div class="box-body !-mt-4">
                                    <form action="{{ url ('Users/'.$users->id) }}" method="POST" enctype="multipart/form-data"> 
                                        @method('PUT')
                                        @csrf
                                        
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Name</label>
                                        <input type="text" class="form-control " name="name" placeholder="nama lengkap"
                                        value="{{old('name',$users->name)}}">
                                        
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                   
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control "  name="email" placeholder="email"
                                        value="{{old('email',$users->email)}}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Telepon</label>
                                        <input type="number" class="form-control " name="telepon" placeholder="masukan telepon"
                                        value="{{old('telepon',$users->telepon)}}">
                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                        <label for="text" class="form-label">Alamat</label>
                                        <input type="text" class="form-control " name="alamat" placeholder="masukan alamat"
                                        value="{{old('alamat',$users->alamat)}}">
                                        @error('telepon')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="xl:col-span-12 col-span-12 mt-0">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" name="foto_profile" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50
                                       file:border-0
                                      file:bg-light file:me-4
                                      file:py-3 file:px-4
                                      dark:file:bg-black/20 dark:file:text-white/50">
                                      @empty($users->foto_profile)
                                        <p>foto tidak ada</p>
                                        @else
                                        <div class="mt-2">
                                          <small>Foto lama:</small>
                                          <img src="{{asset('storage/foto-profile/'.$users->foto_profile) }}" class="img-preview" alt="Foto pengguna" width="120px">
                                        </div>
                                        @endempty
                                      @error('foto_profile')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                </div>
                                    
                                
    <label for="level">Level</label>
    @if(auth()->user()->role === 'pengguna' )
        <input type="text" class="form-control" value="{{ auth()->user()->role }}" readonly>
    @else
        <select name="role" class="form-control" id="level">
            <option value="admin" {{$users->role == "admin" ? 'selected' : ''}}>Admin</option>
            <option value="supervisor" {{$users->role == "Supervisor" ? 'selected' : ''}}>Supervisor</option>
            <option value="petugas" {{$users->role == "petugas" ? 'selected' : ''}}>Petugas</option>
            <option value="teknisi" {{$users->role == "teknisi" ? 'selected' : ''}}>Teknisi</option>
            <option value="pengguna" {{$users->role == "pengguna" ? 'selected' : ''}}>Pengguna</option>
        </select>
    @endif

                                    <!-- <label for="level" class="form-label">Level</label>
                                    <select  id="user_id" name="level" class="form-control">
                                        @foreach ($levels as $level)
                                            <option value="{{ $level }}" {{ old('level', $users->level) == $level ? 'selected' : '' }}>
                                                {{ $level }}
                                            </option>
                                        @endforeach
</select> -->
                                        <button type="submit" class="ti-btn ti-btn-primary-full mt-2" onclick="return confirm('apakah anda yakin ingin mengupdate?')">Submit</button>
                                    </form>
                                </div>
                               

                                </div>
                            </div>
                        </div>
                        @endsection