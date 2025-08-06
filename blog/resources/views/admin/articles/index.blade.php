@extends('admin.layouts.master')
@section('content')
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="table overflow-auto" tabindex="8">
                    @include('admin.users.messages')
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead class="thead-light">
                        <tr>
                                <th class="text-center align-middle text-primary">ردیف</th>
                                <th class="text-center align-middle text-primary">عکس</th>
                                <th class="text-center align-middle text-primary">عنوان</th>
                                <th class="text-center align-middle text-primary">نویسنده</th>
                                <th class="text-center align-middle text-primary">دسته بندی</th>
                                <th class="text-center align-middle text-primary">ویرایش</th>
                                <th class="text-center align-middle text-primary">حذف</th>
                                <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                            <th class="text-center align-middle text-primary">تاریخ ویرایش</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $index=>$article)
                            <tr>
                                <td class="text-center align-middle">{{$articles->firstItem() + $index}}</td>
                                <td class="text-center align-middle">
                                    <img src="{{ asset('images/articles/' . $article->image) }}"
                                         alt="Article Image"
                                         class="rounded-circle"
                                         width="50"
                                         height="50">
                                </td>
                                <td class="text-center align-middle">{{$article->title}}</td>
                                <td class="text-center align-middle">{{$article->user->name}}</td>
                                <td class="text-center align-middle">{{$article->category->title}}</td>
                                <td class="text-center align-middle">
                                    <a class="btn btn-outline-info" href="{{route('articles.edit',$article->id)}}">
                                        ویرایش
                                    </a>
                                </td>
                                <td class="text-center align-middle">
                                    <form method="POST" action="{{route('articles.destroy',$article->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger">
                                            حذف
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center align-middle">{{verta($article->created_at)->formatJalaliDatetime()}}</td>
                                <td class="text-center align-middle">{{verta($article->updated_at)->formatJalaliDatetime()}}</td>
                            </tr>
                        @endforeach


                    </table>
                    <div style="margin: 40px !important;"
                         class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                        {{$articles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
