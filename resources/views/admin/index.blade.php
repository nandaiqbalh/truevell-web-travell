@extends('admin.admin_master')

@section('admin')
<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up hov-rs">
                    <div class="box-body text-center">
                        <div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
                            <i class="fa fa-hotel"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Paket Travel</p>
                            <h3 class="text-dark mb-0 font-weight-500">3400</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up hov-rs">
                    <div class="box-body text-center">
                        <div class="icon bg-info-light rounded w-60 h-60 mx-auto">
                            <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Transaksi</p>
                            <h3 class="text-dark mb-0 font-weight-500">10</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up hov-rs">
                    <div class="box-body text-center">
                        <div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
                            <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Pending</p>
                            <h3 class="text-dark mb-0 font-weight-500">8</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-6">
                <div class="box overflow-hidden pull-up hov-rs">
                    <div class="box-body text-center">
                        <div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
                            <i class="fa fa-check"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Sukses</p>
                            <h3 class="text-dark mb-0 font-weight-500">11</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
