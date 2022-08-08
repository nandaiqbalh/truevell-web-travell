@extends('admin.admin_master')

@section('admin')
<div class="container-full">
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Admin</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item"> <a href="{{route('galleries.index')}}">Gallery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Create Gallery</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">

                   <form action="{{route('galleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                       <div class="col-12">
                        <div class="col md-12">
                            <div class="form-group">
                                <label for="">Travel Package<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <select id="travel_packages_id" name="travel_packages_id" class="form-control">
                                        <option value="" selected="" disabled="">Select Travel Package</option>
                                        @foreach($travel_packages as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group">
                                <h5>Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="image" class="form-control" required >
                                </div>
                            </div>

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-primary mb-5" value="Create">Create</button>
                            </div>
                        </div>
                        </div>
                        </div>
                   </form>
               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </section>

</div>
@endsection
