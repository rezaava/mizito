<header class="top-header">
    <div class="d-flex align-items-center gap-3">
        <button class="hamburger-btn" id="hamburgerBtn">
            <i class="fas fa-bars"></i>
        </button>
        <div class="brand">
            <div class="brand-icon"><i class="fas fa-cubes"></i></div>
            <span>میزیتو</span>
        </div>
    </div>

    <div class="search-wrap">
        <i class="fas fa-search search-icon"></i>
        <input type="text" placeholder="جستجو در میزیتو...">
        <span class="shortcut-hint">⌘K</span>
    </div>

    <div class="header-actions">
        <div class="icon-btn">
            <i class="far fa-comment-dots"></i>
            <span class="dot"></span>
        </div>
        <div class="icon-btn">
            <i class="far fa-bell"></i>
            <span class="dot"></span>
        </div>

        <div class="user-profile-wrap" id="profileWrap">
            <div class="user-profile" id="profileToggle">
                <div class="user-avatar">MH</div>
                <div class="user-info d-none d-sm-block">
                    <div class="name"> {{ Auth::user()->name }} {{ Auth::user()->family }}</div>
                    <div class="role">مدیر محصول</div>
                </div>
                <i class="fas fa-chevron-down chevron"></i>
            </div>
            <div class="profile-dropdown" id="profileDropdown">
                <a href="#"><i class="fas fa-user-circle dropdown-icon"></i> پروفایل من</a>
                <a href="#"><i class="fas fa-cog dropdown-icon"></i> تنظیمات</a>
                <hr>
                <a href="#"><i class="fas fa-sign-out-alt dropdown-icon" style="color: #EF4444;"></i> <span style="color: #EF4444;">خروج</span></a>
            </div>
        </div>
    </div>
</header>