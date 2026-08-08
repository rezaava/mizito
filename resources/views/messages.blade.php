@extends('layout.master')

@section('title')
میزیتو | نامه‌ها
@endsection

@section('head')
<link rel="stylesheet" href="{{asset('css/style-messages.css')}}">
@endsection

@section('content')
<!-- ===== نوار بالای صفحه نامه‌ها ===== -->
<div class="messages-toolbar">
    <div class="messages-toolbar-nav">
        <a href="#" class="toolbar-item active">
            <i class="fas fa-inbox"></i>
            صندوق ورودی
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-paper-plane"></i>
            صندوق خروجی
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-bookmark"></i>
            پاراف‌های من
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-tags"></i>
            برچسب‌ها
        </a>
        <a href="#" class="toolbar-item">
            <i class="fas fa-archive"></i>
            ورودی آرشیو شده
        </a>
    </div>
</div>

<!-- ===== هدر صندوق ورودی ===== -->
<div class="messages-header">
    <h2 class="messages-title">صندوق ورودی</h2>
    <button class="btn-create-message" id="showCreateMessage">
        <i class="fas fa-plus"></i>
        ایجاد نامه
    </button>
</div>

<!-- ===== فرم ایجاد نامه (مخفی در ابتدا) ===== -->
<div class="create-message-form" id="createMessageForm" style="display: none;">
    <div class="form-header">
        <h3>ایجاد نامه جدید</h3>
        <button class="form-close" id="closeCreateMessage">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="form-body">
        <div class="form-group">
            <label class="form-label">گیرنده</label>
            <select class="form-control">
                <option>انتخاب گیرنده...</option>
                <option>سارا کمالی</option>
                <option>علی رضایی</option>
                <option>مریم جعفری</option>
                <option>رضا محمدی</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">عنوان نامه</label>
            <input type="text" class="form-control" placeholder="عنوان نامه را وارد کنید...">
        </div>

        <div class="form-group">
            <label class="form-label">متن نامه</label>
            <textarea class="form-control" rows="6" placeholder="متن نامه را وارد کنید..."></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">اولویت</label>
            <select class="form-control">
                <option>عادی</option>
                <option>متوسط</option>
                <option>بالا</option>
                <option>فوری</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">برچسب‌ها</label>
            <div class="tags-container">
                <span class="tag-item">مهم</span>
                <span class="tag-item">اداری</span>
                <span class="tag-item">شخصی</span>
                <span class="tag-item add-tag">+ افزودن برچسب</span>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">
                <input type="checkbox" class="form-check-input" style="margin-left: 8px;">
                ارسال با تاییدیه
            </label>
        </div>
    </div>

    <div class="form-footer">
        <button class="btn-cancel" id="cancelCreateMessage">انصراف</button>
        <button class="btn-submit">ارسال نامه</button>
    </div>
</div>

<!-- ===== لیست نامه‌ها ===== -->
<div class="messages-list">
    <!-- نامه اول -->
    <div class="message-item unread">
        <div class="message-check">
            <input type="checkbox" class="form-check-input">
        </div>
        <div class="message-content">
            <div class="message-header-info">
                <div class="message-sender">
                    <span class="sender-avatar" style="background: #818CF8;">س</span>
                    <span class="sender-name">سارا کمالی</span>
                    <span class="message-badge new">جدید</span>
                </div>
                <span class="message-date">امروز، ۱۴:۳۰</span>
            </div>
            <div class="message-subject">گزارش پیشرفت پروژه پورتال سازمانی</div>
            <div class="message-preview">
                سلام مهدی، گزارش پیشرفت پروژه پورتال سازمانی برای این هفته آماده شده است. لطفاً آن را بررسی کنید...
            </div>
            <div class="message-tags">
                <span class="tag-item">مهم</span>
                <span class="tag-item">پروژه</span>
                <span class="tag-item">گزارش</span>
            </div>
        </div>
        <div class="message-actions">
            <button class="action-btn" title="پاسخ">
                <i class="fas fa-reply"></i>
            </button>
            <button class="action-btn" title="آرشیو">
                <i class="fas fa-archive"></i>
            </button>
            <button class="action-btn" title="حذف">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>

    <!-- نامه دوم -->
    <div class="message-item">
        <div class="message-check">
            <input type="checkbox" class="form-check-input">
        </div>
        <div class="message-content">
            <div class="message-header-info">
                <div class="message-sender">
                    <span class="sender-avatar" style="background: #FBBF24;">ع</span>
                    <span class="sender-name">علی رضایی</span>
                </div>
                <span class="message-date">دیروز، ۱۱:۱۵</span>
            </div>
            <div class="message-subject">درخواست بازبینی طراحی رابط کاربری</div>
            <div class="message-preview">
                با سلام، طراحی جدید رابط کاربری برای اپلیکیشن موبایل آماده شده است. خواهشمند است در اسرع وقت بازبینی فرمایید...
            </div>
            <div class="message-tags">
                <span class="tag-item">طراحی</span>
                <span class="tag-item">بازبینی</span>
            </div>
        </div>
        <div class="message-actions">
            <button class="action-btn" title="پاسخ">
                <i class="fas fa-reply"></i>
            </button>
            <button class="action-btn" title="آرشیو">
                <i class="fas fa-archive"></i>
            </button>
            <button class="action-btn" title="حذف">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>

    <!-- نامه سوم -->
    <div class="message-item">
        <div class="message-check">
            <input type="checkbox" class="form-check-input">
        </div>
        <div class="message-content">
            <div class="message-header-info">
                <div class="message-sender">
                    <span class="sender-avatar" style="background: #34D399;">م</span>
                    <span class="sender-name">مریم جعفری</span>
                </div>
                <span class="message-date">دیروز، ۰۹:۴۰</span>
            </div>
            <div class="message-subject">تاییدیه بودجه پروژه جدید</div>
            <div class="message-preview">
                با توجه به جلسه هفته گذشته، بودجه پروژه جدید تصویب شده است. لطفاً برای شروع کار برنامه‌ریزی کنید...
            </div>
            <div class="message-tags">
                <span class="tag-item">مالی</span>
                <span class="tag-item">بودجه</span>
                <span class="tag-item" style="background: #FEF2F2; color: #EF4444;">فوری</span>
            </div>
        </div>
        <div class="message-actions">
            <button class="action-btn" title="پاسخ">
                <i class="fas fa-reply"></i>
            </button>
            <button class="action-btn" title="آرشیو">
                <i class="fas fa-archive"></i>
            </button>
            <button class="action-btn" title="حذف">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>

    <!-- نامه چهارم -->
    <div class="message-item unread">
        <div class="message-check">
            <input type="checkbox" class="form-check-input">
        </div>
        <div class="message-content">
            <div class="message-header-info">
                <div class="message-sender">
                    <span class="sender-avatar" style="background: #60A5FA;">ر</span>
                    <span class="sender-name">رضا محمدی</span>
                    <span class="message-badge new">جدید</span>
                </div>
                <span class="message-date">امروز، ۰۸:۲۰</span>
            </div>
            <div class="message-subject">گزارش خطاهای سیستمی</div>
            <div class="message-preview">
                تعدادی خطا در سیستم انبارداری مشاهده شده است. گزارش کامل خطاها را ضمیمه کردم. لطفاً بررسی فرمایید...
            </div>
            <div class="message-tags">
                <span class="tag-item">سیستم</span>
                <span class="tag-item">خطا</span>
                <span class="tag-item" style="background: #FEF2F2; color: #EF4444;">فوری</span>
            </div>
        </div>
        <div class="message-actions">
            <button class="action-btn" title="پاسخ">
                <i class="fas fa-reply"></i>
            </button>
            <button class="action-btn" title="آرشیو">
                <i class="fas fa-archive"></i>
            </button>
            <button class="action-btn" title="حذف">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/messages.js')}}"></script>
@endsection