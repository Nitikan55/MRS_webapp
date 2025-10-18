  <div>
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Simple Tables</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                  
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                       <tr> 
                        <th></th>
                        <th colspan="4" class="text-end"><a href="{{ route('addmachine')}}"class="btn btn-success mb-2">Create</a></th>
                       </tr>
                        <tr>
                          <th style="width: 10px">id</th>
                          <th>Machine_name</th>
                          <th>Machine_type</th>
                          <th>Statust</th>
                          <th>Maintenance_cycle</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($model as $item) 
                        <tr class="align-middle">
                          <td>{{$item->id}}</td>
                          <td>{{$item->machine_name}}</td>
                          <td>{{$item->machine_type}}</td> 
                          <td>{{$item->status}}</td>   
                          <td>{{$item->maintenance_cycle}}</td>   
                          
                          <td>
                             <a class="btn btn-warning" href="{{ route('editmachine', ['id' => $item->machine_id]) }}">Edit</a>
                             <button wire:click="delete({{ $item->machine_id }})" class="btn btn-danger">Delete</button>           
                          </td>                                          
                        @endforeach
                        </tbody>
                     </table>
                    </div>
                  <!-- /.card-body -->
                {{-- <div class="card-footer clearfix">
                  {{ $model->links()}}
                </div> --}}
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>     {{-- Care about people's approval and you will be their prisoner. --}}
</div>
