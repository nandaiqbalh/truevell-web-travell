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
                            <li class="breadcrumb-item"> <a href="{{route('travel-packages.index')}}">Travel Package</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Travel Package</li>
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
             <h4 class="box-title">Create Travel Package</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">

                   <form action="{{route('travel-packages.store')}}" method="POST">
                    @csrf
                     <div class="row">
                       <div class="col-12">
                        <div class="col md-12">
                            <div class="form-group">
                                <h5>Title <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('title')}}" id="title" type="text" name="title" class="form-control" placeholder="Title" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Location <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('location')}}" id="location" type="text" name="location" class="form-control" placeholder="Location" required >
                                </div>
                            </div>


                            <div class="form-group">
                                <h5>About <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <textarea id="about" type="text" name="about" class="form-control" placeholder="About" required >{{old('about')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Featured Events <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('featured_events')}}" id="featured_events" type="text" name="featured_events" class="form-control" placeholder="Featured Eevents" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Language <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('language')}}" id="language" type="text" name="language" class="form-control" placeholder="Language" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Foods <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('foods')}}" id="foods" type="text" name="foods" class="form-control" placeholder="Foods" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Departure Date <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('departure_date')}}" id="departure_date" type="date" name="departure_date" class="form-control" placeholder="Departure Date" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Duration <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('duration')}}" id="duration" type="text" name="duration" class="form-control" placeholder="Duration" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Type <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('type')}}" id="type" type="text" name="type" class="form-control" placeholder="Type" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Price <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input value="{{old('price')}}" id="price" type="number" name="price" class="form-control" placeholder="Price" >
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
