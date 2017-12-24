@extends('layout.index')

@section('title', '首頁')

@section('content')
<div class="">
  <h2>其它</h2>
  <a href="{{ url('admin/其它/create') }}"><h3>新增</h3></a>

  <ul>
    @foreach($SectionThree as $SectionThree)
      <li>{{ $SectionThree->title }}</li>

         <form action="{{ url('admin/其它/'.$SectionThree->id.'/edit') }}" method="GET">
            <button type="submit" id="edit-category-{{ $SectionThree->id }}" class="btn btn-default btn-sm">
              <span class="glyphicon glyphicon-pencil"></span>修改
            </button>
         </form>


          <form action="{{ url('admin/其它/'.$SectionThree->id) }}" method="POST">
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button type="submit" id="delete-category-{{ $SectionThree->id }}" class="btn btn-danger btn-sm">
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
