<div class="navigation">
    <div class="navigation-icon-menu">
        <ul>
            <li data-toggle="tooltip" title="کاربران">
                <a href="#users" title=" کاربران">
                    <i class="icon ti-user"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="دسته بندی ها">
                <a href="#categories" title=" دسته بندی ها">
                    <i class="icon ti-book"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="مقاله ها">
                <a href="#articles" title=" مقاله ها">
                    <i class="icon ti-pencil"></i>
                </a>
            </li>
        </ul>
        <ul>
            <li data-toggle="tooltip" title="ویرایش پروفایل">
                <a href="#" class="go-to-page">
                    <i class="icon ti-settings"></i>
                </a>
            </li>
            <li data-toggle="tooltip" title="خروج">
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="btn w-100 text-white text-center">
                        <i class="icon ti-power-off w-100"></i>
                    </button>
                </form>

            </li>
        </ul>
    </div>
    <div class="navigation-menu-body">
        <ul id="users">
            <li>
                <a href="#">کاربران</a>
                <ul>
                    <li><a href="{{route('users.create')}}">ایجاد کاربر</a></li>
                    <li><a href="{{route('users.index')}}">لیست کاربران</a></li>
                </ul>
            </li>
        </ul>
        <ul id="categories">
            <li>
                <a href="#">دسته بندی ها</a>
                <ul>
                    <li><a href="{{route('categories.create')}}">ایجاد دسته بندی</a></li>
                    <li><a href="{{route('categories.index')}}">لیست دستنه بندی ها</a></li>
                </ul>
            </li>
        </ul>
        <ul id="articles">
            <li>
                <a href="#">مقاله ها</a>
                <ul>
                    <li><a href="{{route('articles.create')}}">ایجاد مقاله</a></li>
                    <li><a href="{{route('articles.index')}}">لیست مقاله ها</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
