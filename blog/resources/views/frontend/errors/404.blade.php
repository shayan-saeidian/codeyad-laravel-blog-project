
@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap p-3 bg-white my-4 rounded">
                    <nav>
                        <ol class="d-flex">
                            <li><a href="#">خانه</a></li>
                            <li>404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="mb-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="title-box mb-2">
                        <p class="m-0 p-0">404 - <span class="text-primary">صفحه پیدا نشد ...</span></p>
                        <span class="d-block"><a href="#">بازگشت به صفحه اصلی</a> <i class="bi bi-arrow-left position-relative"></i></span>
                    </div>
                </div>
                <div class="col-md-8 text-center">
                    <div class="not-found bg-white rounded border p-3 pb-5">
                     <span class="d-block display-1 my-3 my-md-4">
                     404
                     </span>
                        <p class="m-0">متاسفانه محتوا مد نظر یافت نشد !</p>
                        <span class="d-block my-3">بازگشت به <a href="#">صفحه اصلی</a> سایت</span>
                        <div class="search-box px-0 px-md-5 mt-5">
                            <form action="" class="position-relative w-100">
                                <input type="text" placeholder="جستجو کنید ...">
                                <button class="position-absolute"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-white py-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex justify-content-center social-bx">
                        <li class="p-2 m-1"><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li class="p-2 m-1"><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li class="p-2 m-1"><a href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <p>قالب وبلاگی سئو 90 رایگان</p>
                    <p class="mb-0">&copy; حقوق انتشار برای مجموعه محفوظ است</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll_top">
         <span class="btn btn-info text-center text-light">
         <i class="bi bi-arrow-up"></i>
         </span>
    </div>
@endsection


