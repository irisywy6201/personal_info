@extends('layout.index')

@section('title', '首頁')

@section('content')

    <div >
      <h2>編輯</h2>
      <form  action="{{ url('admin/個資資產盤點作業/'.$SectionTwo->id) }}" method="post">
        {{ csrf_field() }}

        <input type="text" name="title" value="{{ $SectionTwo->title }}">
        <textarea  id="editor1" name="content" rows="10" cols="80">{{ $SectionTwo->content }}</textarea>
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
