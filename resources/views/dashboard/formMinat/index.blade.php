@extends('layouts.masterDashboard')

@section('title', 'Form Minat')

@section('style')
<style>
  .page-item.active .page-link {
    color: #FFF !important;
    background-color: #1a2960 !important;
    border-color: #1a2960 !important;
  }

  .btn-create{
    color:darken;
    background: #e6c300;
  }

  .btn-create:hover{
    box-shadow: 1px 1px 5px black;
  }

  .main-menu.menu-light .navigation > li.open > a{
    border-right: 4px solid #e6c300;
  }

</style>
@endsection

@section('page-title')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 col-md-6 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block text-capitalize">List Form Minat</h3>
        <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Form Minat</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="content-header-right col-md-6 breadcrumb-new" style="text-align: right;">
        <button type="submit" name="button" class="btn btn-create btn-glow userStoreButton">Buat Tanggapan</button><br><br>
    </div>
</div>
@endsection

@section('content')
    <section id="scroll">
        <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tabel Form Minat</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                <p class="card-text">
                    Tabel ini berisi semua data tentang form minat
                </p>
                <table min-height="200px" class="table table-striped table-bordered zero-configuration d-lg-table">
                    <thead>
                    <tr>
                        <th><i class="ft-list"></i> ID</th>
                        <th><i class="ft-user"></i> Nama</th>
                        <th><i class="ft-message-square"></i> Tanggapan</th>
                        <th><i class="ft-settings"></i> Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($user as $item)
                            <tr>
                                <td>{{ $no_user++ }}</td>
                                <td class="text-capitalize">{{ $item->role }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->domicile }}</td>
                                <td>
                                <div class="btn-group btn-center">
                                    <button style="background: #1a2960 !important; border: solid 4px #1a2960 !important " class="dropdown-toggle btn round btn-info" data-toggle="dropdown">
                                        <i class="la la-gear"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                        <button class="dropdown-item btn btn-outline-info userEditButton" value="{{ $item->id }}">
                                            <i class="la la-info"></i> Edit
                                        </button>
                                        <button class="dropdown-item btn btn-outline-danger userDestroyButton" value="{{ $item->id }}">
                                            <i class="la la-trash"></i> Delete
                                        </button>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                        <tfoot>
                        <tr>
                          <th><i class="ft-list"></i> ID</th>
                          <th><i class="ft-user"></i> Nama</th>
                          <th><i class="ft-message-square"></i> Tanggapan</th>
                          <th><i class="ft-settings"></i> Aksi</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--/ Scroll - vertical table -->

    {{-- <!-- Modal Store -->

    <div class="modal fade" id="create">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('user.store') }}" method="post">
                @csrf
                    <div class="modal-header" style="background: #1a2960 !important; color: white;">
                        <h4 class="text-white modal-title">Create User</h4>
                        <button class="close text-white" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Role :</label>
                                    <select class="form-control" name="role" id="">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Username :</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                            </div>
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Domicile: </label>
                                    <select name="domicile" class="form-control" required>
                                    <option value="" hidden>Select Your Domicile</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Kepulauan Riau (Kepri)">Kepulauan Riau (Kepri)</option>
                                    <option value="Bengkulu">Bengkulu</otion>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Kep. Bangka Belitung">Kep. Bangka Belitung</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Banten">Banten</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Daerah Istimewa Yogyakarta (DIY)">Daerah Istimewa Yogyakarta (DIY)</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="container">
                                <div class="form-group">
                                    <label for="">Password :</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn round" style="background: #1a2960 !important; color: white;">Create user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Modal Store -->

    <!-- Modal Delete -->

        <div class="modal fade" id="delete">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <form action="" method="post" id="actionFormDelete">
                    @csrf
                    @method('DELETE')
                        <div class="modal-header" style="background: #1a2960 !important; color: white;">
                            <h4 class="modal-title text-white">Are you sure you want to delete this user?</h4>
                            <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="id" id="deleteId" class="btn round btn-danger" style="color:white;">
                                <i class="la la-check"></i>
                            </button>
                            <button type="button" class="btn round btn-success" data-dismiss="modal" style="color:white;">
                                <i class="la la-close"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- End Modal Delete -->

    <!-- Modal Edit -->

        <div class="modal fade" id="edit">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="background: #1a2960 !important; color: white;">
                        <h4 class="modal-title text-white">Edit User</h4>
                        <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="" method="post" id="actionFormEdit">
                    @csrf
                    @method('PUT')
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="id">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="">Role :</label>
                                        <select name="role" id="editRole" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <label for="">Username :</label>
                                        <input type="text" name="username" id="editUsername" class="form-control" required>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input type="email" name="email" id="editEmail" class="form-control" required>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="form-group">
                                        <label for="">Domicile: </label>
                                        <select name="domicile" id="editDomicile" class="form-control">
                                        <option value="" hidden>Select Your Domicile</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Kepulauan Riau (Kepri)">Kepulauan Riau (Kepri)</option>
                                        <option value="Bengkulu">Bengkulu</otion>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Kep. Bangka Belitung">Kep. Bangka Belitung</option>
                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Banten">Banten</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Daerah Istimewa Yogyakarta (DIY)">Daerah Istimewa Yogyakarta (DIY)</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn round" style="background: #1a2960 !important; color: white;">Edit User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- End Modal Edit --> --}}

@endsection

@section('script')
    {{-- <script>
        var token = $("meta[name=\"_token\"]").attr("content");
        $(".userStoreButton").on("click", function() {
            $("#create").modal();
        });
        $(".userDestroyButton").on("click", function() {
            var id = $(this).val();
            $("#deleteId").val(id);
            $("#actionFormDelete").attr("action", "/user/"+ id);
            $("#delete").modal();
        });
        $(".userEditButton").on("click", function() {
            var id = $(this).val();
            $.ajax({
                method: "GET",
                url: "/user/"+ id +"/edit"
            }).done(function(response){
                console.log(response);
                $("#editId").val(id);
                $('#actionFormEdit').attr("action", "/user/"+ id);
                $("#editRole option[value=\""+response.role+"\"]").attr("selected", true);
                $("#editUsername").val(response.username);
                $("#editEmail").val(response.email);
                $("#editDomicile option[value=\""+response.domicile+"\"]").attr("selected", true);
                $("#edit").modal();
            });
        });
    </script> --}}
@endsection
