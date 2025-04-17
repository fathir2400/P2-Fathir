@extends('admin.index')

@section('content')

          <!-- Start::main-content -->
          <div class="main-content">
                <!-- Page Header -->
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">USER</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> User <i
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
                <!-- Page Header Close -->
                <!-- Page Header Close -->

                <!-- Start:: row-11 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box custom-box">
                            <div class="box-header flex justify-between">
                            <a href="{{ url ('Users/create') }}" class="ti-btn ti-btn-info-full">
                                        Tambah
                                        <i class="fe fe-arrow-right rtl:rotate-180 ms-2 rtl:ms-0 align-middle"></i>
                                    </a>

                                    <a href="{{ route ('Users.invoice') }}" class="ti-btn ti-btn-secondary-full">
                                        invoice
                                        <i class="fe fe-arrow-right rtl:rotate-180 ms-2 rtl:ms-0 align-middle"></i>
                                    </a>

                            </div>

                                    <table class="table">
                                        <thead>
                                            <tr class="border-b border-defaultborder">
                                            <th scope="col" class="text-start">No</th>
                                                <th scope="col" class="text-start">Nama</th>
                                                <th scope="col" class="text-start">Email</th>
                                                <th scope="col" class="text-start">Telepon</th>
                                                <th scope="col" class="text-start">Jenkel</th>
                                                <th scope="col" class="text-start">Outlet</th>
                                                <th scope="col" class="text-start">foto</th>
                                                <th scope="col" class="text-start">Role</th>
                                                <th scope="col" class="text-start">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $key =>$item)
                                            <tr class="border-b border-defaultborder">
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td>{{ $item->jenkel }}</td>
                                            <td>
                                            <img src="{{asset('storage/foto-profile/'. $item->foto_profile) }}" width="50" height="50" alt="Foto_profile">
                                            </td>
                                            <td>{{ $item->role }}</td>


                                                <td>
                                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                                    <a aria-label="anchor" href="{{url('Users/'.$item->id.'/edit')}}"
                                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"><i
                                                                class="ri-edit-line"></i></a>
                                                                <form action="{{ url('Users', $item->id) }}" method="POST">
                                                                  @csrf
                                                                  @method('DELETE')
                                                        <button aria-label="anchor" type="submit"
                                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger-full" onclick="return confirm('apakah andan ingin menghapus data *{{$item->name}}*?')"><i
                                                            class="bi bi-trash"></i>
</button>
                                                          </form>

                                                    </div>
                                                </td>
                                            </tr>
                                          @endforeach


                                        </tbody>
                                    </table>

                            </div>
                            <div class="box-footer hidden border-t-0">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-11 -->

                <!-- Start:: row-12 -->

                <!-- End:: row-12 -->

            </div>
        </div>
@endsection

