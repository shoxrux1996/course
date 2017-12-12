@extends('layouts.main')
@section('styles')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('submit')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" class="phone" value="+998 " name="name" data-mask="+000 (00) 000-00-00" pattern=".{19,}" required title="Ввели неправильный номер телефона. Telefon noto'g'ri kiritildi"/>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>

                <div class="panel-heading">Dashboard</div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
    <script>
        $('.phone').keyup(function(e) {
            if (this.value.length < 4) {
                this.value = '+998 ';
            } else if (this.value.indexOf('+998 ') !== 0) {
                this.value = '+998 ' + String.fromCharCode(e.which);
            }
        });
    </script>
@endsection