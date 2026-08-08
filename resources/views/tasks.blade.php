@extends('layout.master')

@section('title')
میزیتو | وظایف
@endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/style-tasks.css')}}">
@endsection

@section('content')
<!-- ===== نوار بالای صفحه وظایف ===== -->
<div class="tasks-toolbar">
    <div class="tasks-toolbar-nav">
        <a href="#" class="toolbar-item active">
            <i class="fas fa-tasks"></i>
            کارهای من
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-calendar-alt"></i>
            تقویم
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-users"></i>
            پیگیری از دیگران
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-check-double"></i>
            انجام‌شده روزانه
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-tags"></i>
            دسته‌بندی کارها
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-tag"></i>
            برچسب‌ها
        </a>
    </div>
</div>

<!-- ===== دکمه ایجاد وظیفه ===== -->
<div class="tasks-header">
    <h2 class="tasks-title">لیست وظایف</h2>
    <button class="btn-create-task" id="showCreateTask">
        <i class="fas fa-plus"></i>
        ایجاد وظیفه
    </button>
</div>

<!-- ===== فرم ایجاد وظیفه (مخفی در ابتدا) ===== -->
<div class="create-task-form" id="createTaskForm" style="display: none;">
    <div class="form-header">
        <h3>ایجاد وظیفه</h3>
        <button class="form-close" id="closeCreateTask">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="form-body">
        <div class="form-group">
            <label class="form-label">عنوان فعالیت</label>
            <input type="text" class="form-control" placeholder="عنوان وظیفه را وارد کنید...">
        </div>

        <div class="form-group">
            <label class="form-label">توضیحات</label>
            <textarea class="form-control" rows="4" placeholder="توضیحات کامل وظیفه..."></textarea>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">اولویت</label>
                <select class="form-control">
                    <option>کم</option>
                    <option selected>متوسط</option>
                    <option>بالا</option>
                    <option>فوری</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">وضعیت</label>
                <select class="form-control">
                    <option>در صف انتظار</option>
                    <option selected>در حال انجام</option>
                    <option>تکمیل شده</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">تاریخ شروع</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">تاریخ پایان</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">مسئول</label>
            <select class="form-control">
                <option>من (مهدی حسینی)</option>
                <option>سارا کمالی</option>
                <option>علی رضایی</option>
                <option>مریم جعفری</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">برچسب‌ها</label>
            <div class="tags-container">
                <span class="tag-item">طراحی</span>
                <span class="tag-item">توسعه</span>
                <span class="tag-item">بازبینی</span>
                <span class="tag-item add-tag">+ افزودن برچسب</span>
            </div>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-cancel" id="cancelCreateTask">انصراف</button>
        <button class="btn-submit">ایجاد</button>
    </div>
</div>

<!-- ===== لیست وظایف ===== -->
<div class="tasks-list">
    <div class="task-item-complete">
        <input class="form-check-input" type="checkbox" checked>
        <div class="task-content">
            <div class="task-title">طراحی داشبورد مدیریتی</div>
            <div class="task-meta">
                <span><i class="far fa-clock"></i> امروز، ۱۴:۰۰</span>
                <span class="task-tag" style="background: #EEF2FF; color: #4F46E5;">طراحی</span>
                <span class="task-tag" style="background: #ECFDF5; color: #10B981;">اولویت بالا</span>
            </div>
        </div>
    </div>

    <div class="task-item-complete">
        <input class="form-check-input" type="checkbox">
        <div class="task-content">
            <div class="task-title">بررسی مستندات API</div>
            <div class="task-meta">
                <span><i class="far fa-clock"></i> فردا، ۱۰:۰۰</span>
                <span class="task-tag" style="background: #FFFBEB; color: #D97706;">توسعه</span>
                <span class="task-tag" style="background: #FEF2F2; color: #EF4444;">فوری</span>
            </div>
        </div>
    </div>

    <div class="task-item-complete">
        <input class="form-check-input" type="checkbox">
        <div class="task-content">
            <div class="task-title">گزارش هفتگی تیم</div>
            <div class="task-meta">
                <span><i class="far fa-clock"></i> امروز، ۱۷:۰۰</span>
                <span class="task-tag" style="background: #EFF6FF; color: #3B82F6;">گزارش</span>
                <span class="task-tag" style="background: #ECFDF5; color: #10B981;">متوسط</span>
            </div>
        </div>
    </div>

    <div class="task-item-complete">
        <input class="form-check-input" type="checkbox">
        <div class="task-content">
            <div class="task-title">رفع باگ شماره ۴۱۲</div>
            <div class="task-meta">
                <span><i class="far fa-clock"></i> دیروز (تاخیر)</span>
                <span class="task-tag" style="background: #FEF2F2; color: #EF4444;">بازبینی</span>
                <span class="task-tag" style="background: #FEF2F2; color: #EF4444;">تاخیر</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/tasks.js')}}"></script>
@endsection