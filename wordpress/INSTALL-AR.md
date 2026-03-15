# 🚀 تركيب صفحة الهبوط على WordPress
## 3 خطوات — 5 دقايق — مفيش بلاجن

---

## الخطوة 1 — ارفع الملف

**طريقة A: من لوحة التحكم (الأسهل)**
1. افتح WordPress Admin
2. روح على `Appearance` → `Theme File Editor`
3. من القائمة اليمين اختار أي ملف
4. اضغط على اسم الثيم فوق → افتح مجلد الثيم
5. اضغط `Add New File` (لو موجود) وسمّيه `startup-book-landing.php`
6. الصق محتوى الملف بالكامل واحفظ

**طريقة B: عن طريق FTP/FileManager (أضمن)**
1. افتح الـ File Manager في الـ cPanel أو استخدم FileZilla
2. روح على المسار:
   ```
   /wp-content/themes/[اسم-الثيم-بتاعك]/
   ```
3. ارفع ملف `startup-book-landing.php` هناك مباشرة

---

## الخطوة 2 — إنشاء صفحة جديدة

1. من WordPress Admin روح على `Pages` → `Add New`
2. اكتب عنوان الصفحة: **طريقك لبناء STARTUP**
3. من القائمة اليمين تحت **Page Attributes** أو **Template**
4. اختار: **Startup Book - Landing Page**
5. اضغط **Publish**

---

## الخطوة 3 — جرّب الصفحة

1. اضغط **View Page** بعد النشر
2. المفروض تشوف الصفحة كاملة بالتصميم الأسود الذهبي
3. ✅ خلاص — الصفحة شغالة!

---

## ⚠️ لو الثيم بتاعك بيتعارض مع التصميم

لو لقيت header أو footer بيظهر فوق الصفحة، زيد السطر ده في أول الملف بعد السطر الأول:

```php
// إخفاء الـ Admin Bar
add_filter('show_admin_bar', '__return_false');
```

---

## 🔗 روابط مهمة

- **Preview الصفحة على GitHub Pages:** https://growthack88.github.io/startup-book-landing/
- **الملف PHP جاهز للتحميل:** https://raw.githubusercontent.com/growthack88/startup-book-landing/main/wordpress/startup-book-landing.php

---

## 💡 نصايح

- لو عندك Elementor أو أي Page Builder، مش محتاج تعمل حاجة إضافية — Template بتاعنا بيشتغل مستقل
- الصفحة بتشتغل مع أي ثيم WordPress — Astra, GeneratePress, OceanWP, Hello, وغيرهم
- مش محتاج تثبّت أي بلاجن إضافي
