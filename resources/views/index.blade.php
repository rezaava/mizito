@extends('layout.master')

@section('title')
میزیتو |صفحه اصلی 
@endsection


@section('head')
<link rel="stylesheet" href="{{asset('css/style-index.css')}}">
@endsection

@section('content')
<!-- ===== سه کارت ===== -->
<div class="row stats-row g-3">
    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-icon purple"><i class="fas fa-calendar-day"></i></div>
            <div class="stat-info">
                <div class="stat-value">۸</div>
                <div class="stat-label">کارهای امروز من</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-clock"></i></div>
            <div class="stat-info">
                <div class="stat-value">۳</div>
                <div class="stat-label">کارهای دارای تاخیر</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-flag"></i></div>
            <div class="stat-info">
                <div class="stat-value">۵</div>
                <div class="stat-label">کارهای قابل پیگیری</div>
            </div>
        </div>
    </div>
</div>

<!-- ===== دو دیو ===== -->
<div class="row g-4">
    <!-- کارهای من -->
    <div class="col-lg-6">
        <div class="section-card">
            <div class="section-title">
                <i class="fas fa-tasks"></i>
                کارهای من
                <span class="badge-count">۴ مورد</span>
            </div>

            <div class="task-item">
                <input class="form-check-input" type="checkbox">
                <div>
                    <div class="task-title">طراحی داشبورد مدیریتی</div>
                    <span class="task-meta"><i class="far fa-clock"></i> امروز، ۱۴:۰۰</span>
                </div>
            </div>
            <div class="task-item">
                <input class="form-check-input" type="checkbox">
                <div>
                    <div class="task-title">بررسی مستندات API</div>
                    <span class="task-meta"><i class="far fa-clock"></i> فردا، ۱۰:۰۰</span>
                </div>
            </div>
            <div class="task-item">
                <input class="form-check-input" type="checkbox">
                <div>
                    <div class="task-title">گزارش هفتگی تیم</div>
                    <span class="task-meta"><i class="far fa-clock"></i> امروز، ۱۷:۰۰</span>
                </div>
            </div>
            <div class="task-item">
                <input class="form-check-input" type="checkbox">
                <div>
                    <div class="task-title">رفع باگ شماره ۴۱۲</div>
                    <span class="task-meta"><i class="far fa-clock"></i> دیروز (تاخیر)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- پیگیری دیگران -->
    <div class="col-lg-6">
        <div class="section-card">
            <div class="section-title">
                <i class="fas fa-users"></i>
                پیگیری از دیگران
                <span class="badge-count">۳ نفر</span>
            </div>

            <div class="colleague-item">
                <div class="colleague-avatar" style="background: #818CF8;">س</div>
                <div class="colleague-info">
                    <div class="name">سارا کمالی</div>
                    <div class="position">توسعه‌دهنده ارشد</div>
                </div>
            </div>
            <div class="colleague-item">
                <div class="colleague-avatar" style="background: #FBBF24;">ع</div>
                <div class="colleague-info">
                    <div class="name">علی رضایی</div>
                    <div class="position">طراح محصول</div>
                </div>
            </div>
            <div class="colleague-item">
                <div class="colleague-avatar" style="background: #34D399;">م</div>
                <div class="colleague-info">
                    <div class="name">مریم جعفری</div>
                    <div class="position">مدیر پروژه</div>
                </div>
            </div>

            <a href="{{ route('workspace.create') }}" class="btn-create">
                <i class="fas fa-plus-circle"></i> ایجاد میزکار جدید
            </a>
        </div>
    </div>
</div>
@endsection