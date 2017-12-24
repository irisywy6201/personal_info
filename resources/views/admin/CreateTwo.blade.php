@extends('layout.index')

@section('title', '首頁')

@section('content')
    <div class="">
      <h2>新增-個資資產盤點作業</h2>
      <form class="" action="{{ url('/admin/個資資產盤點作業') }}" method="post">
        {{ csrf_field() }}
        標題: <input type="text" name="title" value=""><br>
        內文:
        <textarea  id="editor1" name="content" rows="10" cols="80"></textarea>
              <script>
                  CKEDITOR.replace( 'editor1' );
              </script>
              <button type="submit" name="button">確認</button>
      </form>

    </div>

@endsection

@section('css')

@endsection

@section('js')


@endsection
