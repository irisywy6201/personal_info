@extends('layout.index')

@section('title', '首頁')

@section('content')
<div class="">
  <h2>個資資產盤點作業</h2>
  <a href="{{ url('admin/個資資產盤點作業/create') }}"><h3>新增</h3></a>

  <ul>
    @foreach($SectionTwo as $SectionTwo)
      <li>{{ $SectionTwo->title }}</li>

         <form action="{{ url('admin/個資資產盤點作業/'.$SectionTwo->id.'/edit') }}" method="GET">
            <button type="submit" id="edit-category-{{ $SectionTwo->id }}" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-pencil"></span>修改
            </button>
         </form>


          <form action="{{ url('admin/個資資產盤點作業/'.$SectionTwo->id) }}" method="POST">
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button type="submit" id="delete-category-{{ $SectionTwo->id }}" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>刪除
                      </button>
            </form>
            @endforeach
          </ul>


        </div>
@endsection

@section('css')

@endsection

@section('js')
@endsection
