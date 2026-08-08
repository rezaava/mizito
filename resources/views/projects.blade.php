@extends('layout.master')

@section('title')
میزیتو | پروژه‌ها
@endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/style-projects.css')}}">
@endsection

@section('content')
<!-- ===== هدر پروژه‌ها ===== -->
<div class="projects-header">
    <h1 class="projects-title">پروژه‌ها</h1>
    <button class="btn-create-project">
        <i class="fas fa-plus"></i>
        ایجاد پروژه جدید
    </button>
</div>

<!-- ===== کارت‌های پروژه ===== -->
<div class="row g-4">
    <!-- پروژه اول -->
    <div class="col-md-6">
        <div class="project-card">
            <div class="project-card-header">
                <div class="project-info">
                    <h3 class="project-name">پورتال سازمانی</h3>
                    <span class="project-status">در حال انجام</span>
                </div>
                <div class="project-progress">۶۵%</div>
            </div>
            <div class="progress-track">
                <div class="progress-fill" style="width: 65%;"></div>
            </div>
            <div class="project-card-footer">
                <div class="project-team">
                    <div class="team-avatar" style="background: #818CF8;">م</div>
                    <div class="team-avatar" style="background: #34D399;">س</div>
                    <div class="team-avatar" style="background: #FBBF24;">ع</div>
                    <div class="team-avatar more">+۲</div>
                </div>
                <span class="project-deadline">
                    <i class="far fa-clock"></i> ۴ روز مانده
                </span>
            </div>
        </div>
    </div>

    <!-- پروژه دوم -->
    <div class="col-md-6">
        <div class="project-card">
            <div class="project-card-header">
                <div class="project-info">
                    <h3 class="project-name">اپلیکیشن موبایل</h3>
                    <span class="project-status" style="background: #FFFBEB; color: #D97706;">در انتظار</span>
                </div>
                <div class="project-progress">۳۰%</div>
            </div>
            <div class="progress-track">
                <div class="progress-fill" style="width: 30%; background: #F59E0B;"></div>
            </div>
            <div class="project-card-footer">
                <div class="project-team">
                    <div class="team-avatar" style="background: #F87171;">ز</div>
                    <div class="team-avatar" style="background: #60A5FA;">ف</div>
                </div>
                <span class="project-deadline">
                    <i class="far fa-clock"></i> ۱۲ روز مانده
                </span>
            </div>
        </div>
    </div>

    <!-- کارت ایجاد پروژه جدید -->
    <div class="col-md-6">
        <div class="project-card new-project">
            <div class="new-project-content">
                <div class="new-project-icon">
                    <i class="fas fa-plus"></i>
                </div>
                <h3 class="new-project-title">پروژه جدید</h3>
                <p class="new-project-desc">برای شروع یک پروژه جدید کلیک کنید</p>
            </div>
        </div>
    </div>
</div>
@endsection