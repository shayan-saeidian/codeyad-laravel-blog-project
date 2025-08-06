@extends('admin.layouts.master')
@section('content')
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h4 class="card-title">ایجاد مقاله</h4>
                    @include('auth.errors')
                    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">عنوان مقاله</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left" dir="rtl" name="title">
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">متن مقاله</label>
                            <div class="col-sm-10">
                                <textarea class="form-control text-end" dir="rtl" name="body" rows="5" placeholder="متن مقاله را وارد کنید..."></textarea>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">دسته‌بندی مقاله</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                    <option value="">دسته بندی را انتخاب کنید</option>
                                    @foreach($categories as $id => $title)
                                        <option value="{{ $id }}">{{ $title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-sm-2 col-form-label">تصویر مقاله</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-success btn-uppercase">
                                    <i class="ti-check-box m-r-5"></i> ذخیره
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('select').select2({
                dir: "rtl",
                dropdownAutoWidth: true
            });
        });
    </script>
@endpush

