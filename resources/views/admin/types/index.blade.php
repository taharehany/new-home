@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="title">
            <h2>types</h2>
         </div>
         <div class="table-responsive">
            <table class="table custom table-striped" id="example">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>title</th>
                     <th>created at</th>
                     <th>controle</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data as $key => $value)
                  <tr>
                     <td class="dtr-control">{{ $key + 1 }}</td>
                     <td>{{ $value->title }}</td>
                     <td>{{ $value->created_at }}</td>
                     <td>
                        <div class="table-data-feature">
                           <a class="item edit" href="{{ route('types.edit', $value->id) }}" title="Edit"><i class="fas fa-pencil-alt"></i></a>

                           <form id="delete-form-{{ $value->id }}" style="display: inline-table;" action="{{ route('types.destroy', $value->id) }}" method="post">
                              @csrf
                              @method('delete')
                              <button type="submit" class="item delete">
                              <i class="far fa-trash-alt"></i>
                              </button>
                           </form>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
