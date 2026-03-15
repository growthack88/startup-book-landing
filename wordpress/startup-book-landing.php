<?php
/**
 * Template Name: Startup Book - Landing Page
 * Description: صفحة هبوط كتاب طريقك لبناء STARTUP — standalone بدون header/footer
 */

// منع تحميل أي CSS أو JS من الثيم
add_action('wp_enqueue_scripts', function() {
    global $wp_styles, $wp_scripts;
    $wp_styles->queue  = [];
    $wp_scripts->queue = [];
}, 100);

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="طريقك لبناء STARTUP - الكتاب العملي لبناء شركتك الناشئة من الصفر">
<title>طريقك لبناء STARTUP | محمد حميدة</title>
<?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
<style>
/* ===== RESET THEME STYLES ===== */
#wpadminbar{display:none!important;}
html{margin-top:0!important;}
/* ===== VARIABLES ===== */
:root{--gold:#C9A84C;--gold-light:#E8C97A;--gold-dim:#8B6914;--black:#080808;--dark:#0E0E0E;--dark2:#141414;--dark3:#1A1A1A;--dark4:#222222;--white:#F5F0E8;--white-dim:#A89880;--red:#C0392B;}
*{margin:0;padding:0;box-sizing:border-box;}html{scroll-behavior:smooth;}
body{background:var(--black)!important;color:var(--white)!important;font-family:'Cairo',sans-serif!important;overflow-x:hidden;line-height:1.8;max-width:100%!important;}
body::before{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");pointer-events:none;z-index:9999;opacity:0.5;}
.hxl{font-family:'Cairo',sans-serif;font-weight:900;font-size:clamp(2.2rem,5.5vw,4.6rem);line-height:1.15;letter-spacing:-0.02em;}
.hlg{font-family:'Cairo',sans-serif;font-weight:800;font-size:clamp(1.7rem,3.5vw,2.9rem);line-height:1.22;}
.hmd{font-weight:700;font-size:clamp(1.2rem,2.5vw,1.8rem);line-height:1.3;}
.gold{color:var(--gold);}.gg{background:linear-gradient(135deg,var(--gold-light),var(--gold),var(--gold-dim));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
section{position:relative;}.container{max-width:900px;margin:0 auto;padding:0 24px;}
.sticky-bar{position:fixed;top:0;left:0;right:0;z-index:10000;background:rgba(8,8,8,0.94);backdrop-filter:blur(14px);border-bottom:1px solid rgba(201,168,76,0.15);padding:12px 28px;display:flex;justify-content:space-between;align-items:center;transform:translateY(-100%);transition:transform 0.4s ease;}
.sticky-bar.visible{transform:translateY(0);}.sticky-title{font-size:0.88rem;font-weight:600;color:var(--white-dim);}
.sticky-cta{background:linear-gradient(135deg,var(--gold),var(--gold-dim));color:var(--black)!important;font-family:'Cairo',sans-serif;font-weight:800;font-size:0.84rem;padding:8px 22px;border:none;border-radius:4px;cursor:pointer;text-decoration:none!important;white-space:nowrap;}
.urgency{background:linear-gradient(90deg,#8B1A10,var(--red),#8B1A10);padding:11px 0;text-align:center;font-size:0.82rem;font-weight:600;letter-spacing:0.04em;}
.urgency span{color:var(--gold-light);font-weight:900;}
.hero{min-height:100vh;display:flex;align-items:center;padding:100px 0 80px;background:radial-gradient(ellipse 70% 60% at 50% 100%,rgba(201,168,76,0.06) 0%,transparent 70%),linear-gradient(180deg,#0E0E0E 0%,#080808 100%);overflow:hidden;}
.hero::before{content:'';position:absolute;top:-40%;left:50%;transform:translateX(-50%);width:900px;height:900px;background:radial-gradient(circle,rgba(201,168,76,0.04) 0%,transparent 60%);pointer-events:none;}
.hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
.hero-label{display:inline-flex;align-items:center;gap:8px;background:rgba(201,168,76,0.08);border:1px solid rgba(201,168,76,0.25);border-radius:100px;padding:6px 18px;font-size:0.78rem;font-weight:600;color:var(--gold);letter-spacing:0.08em;text-transform:uppercase;margin-bottom:28px;}
.hero-label::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--gold);animation:pulse 2s infinite;}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1);}50%{opacity:0.5;transform:scale(0.8);}}
.hero-subtitle{font-size:1.05rem;color:var(--white-dim);margin-bottom:40px;line-height:2;}
.hero-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(201,168,76,0.12);border:1px solid rgba(201,168,76,0.12);border-radius:12px;overflow:hidden;margin-bottom:40px;}
.stat{background:rgba(14,14,14,0.95);padding:18px 12px;text-align:center;}
.stat-num{font-size:1.7rem;font-weight:900;color:var(--gold);display:block;line-height:1;margin-bottom:5px;}.stat-label{font-size:0.72rem;color:var(--white-dim);}
.cta-group{display:flex;flex-direction:column;gap:12px;}
.btn-p{display:block;background:linear-gradient(135deg,var(--gold-light) 0%,var(--gold) 50%,var(--gold-dim) 100%);color:var(--black)!important;font-family:'Cairo',sans-serif;font-weight:900;font-size:1.1rem;padding:18px 36px;border:none;border-radius:6px;cursor:pointer;text-align:center;text-decoration:none!important;transition:all 0.3s ease;position:relative;overflow:hidden;}
.btn-p::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(255,255,255,0.15),transparent);opacity:0;transition:opacity 0.3s;}
.btn-p:hover::before{opacity:1;}.btn-p:hover{transform:translateY(-2px);box-shadow:0 12px 40px rgba(201,168,76,0.3);}
.btn-s{display:block;background:transparent;border:1px solid rgba(201,168,76,0.3);color:var(--gold)!important;font-family:'Cairo',sans-serif;font-weight:600;font-size:0.95rem;padding:14px 36px;border-radius:6px;cursor:pointer;text-align:center;text-decoration:none!important;transition:all 0.3s;}
.btn-s:hover{border-color:var(--gold);background:rgba(201,168,76,0.06);}
.gline{font-size:0.78rem;color:var(--white-dim);text-align:center;display:flex;align-items:center;justify-content:center;gap:6px;margin-top:8px;}
.book-wrap{position:relative;display:flex;justify-content:center;align-items:center;}
.book-glow{position:absolute;width:380px;height:380px;background:radial-gradient(circle,rgba(201,168,76,0.14) 0%,transparent 70%);border-radius:50%;animation:glow-b 4s ease-in-out infinite;}
@keyframes glow-b{0%,100%{transform:scale(1);opacity:0.6;}50%{transform:scale(1.1);opacity:1;}}
.book-mockup{position:relative;width:290px;filter:drop-shadow(-20px 30px 70px rgba(0,0,0,0.85)) drop-shadow(0 0 30px rgba(201,168,76,0.12));animation:float 6s ease-in-out infinite;transition:all 0.5s ease;}
@keyframes float{0%,100%{transform:perspective(1200px) rotateY(-10deg) rotateX(3deg) translateY(0);}50%{transform:perspective(1200px) rotateY(-10deg) rotateX(3deg) translateY(-14px);}}
.book-mockup:hover{animation:none;transform:perspective(1200px) rotateY(-3deg) rotateX(1deg) translateY(-8px);}
.book-img{width:100%;border-radius:4px 12px 12px 4px;display:block;object-fit:cover;}
.proof-strip{background:var(--dark2);border-top:1px solid rgba(201,168,76,0.08);border-bottom:1px solid rgba(201,168,76,0.08);padding:32px 0;}
.proof-inner{display:flex;justify-content:center;align-items:center;gap:52px;flex-wrap:wrap;}
.proof-item{display:flex;align-items:center;gap:12px;color:var(--white-dim);font-size:0.88rem;font-weight:600;}
.proof-icon{width:38px;height:38px;background:rgba(201,168,76,0.08);border:1px solid rgba(201,168,76,0.2);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}
.slabel{font-size:0.72rem;font-weight:700;color:var(--gold);letter-spacing:0.15em;text-transform:uppercase;margin-bottom:16px;}
.pain-section{padding:100px 0;background:linear-gradient(180deg,var(--dark) 0%,var(--black) 100%);}
.pain-list{list-style:none;margin-top:48px;}
.pain-item{display:flex;align-items:flex-start;gap:24px;padding:28px 0;border-bottom:1px solid rgba(255,255,255,0.04);opacity:0;transform:translateX(30px);transition:all 0.55s ease;}
.pain-item.visible{opacity:1;transform:translateX(0);}
.pain-num{font-family:'Playfair Display',serif;font-size:2.6rem;font-weight:900;color:rgba(201,168,76,0.1);line-height:1;flex-shrink:0;width:52px;text-align:center;}
.pain-text strong{display:block;font-weight:700;font-size:1.05rem;color:var(--white);margin-bottom:6px;}
.pain-text p{color:var(--white-dim);font-size:0.92rem;line-height:1.8;}
.solution-intro{padding:100px 0;background:var(--black);text-align:center;}
.sol-box{background:linear-gradient(135deg,rgba(201,168,76,0.07),rgba(201,168,76,0.02));border:1px solid rgba(201,168,76,0.18);border-radius:16px;padding:56px 52px;margin-top:48px;position:relative;overflow:hidden;}
.sol-box::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);}
.qmark{font-size:7rem;color:rgba(201,168,76,0.08);font-family:'Playfair Display',serif;line-height:0.6;position:absolute;top:32px;right:44px;}
.benefits-section{padding:100px 0;background:var(--dark);}
.ben-grid{display:grid;grid-template-columns:1fr 1fr;gap:2px;margin-top:56px;background:rgba(201,168,76,0.06);border:1px solid rgba(201,168,76,0.08);border-radius:16px;overflow:hidden;}
.ben-card{background:var(--dark2);padding:36px 32px;transition:background 0.3s;}.ben-card:hover{background:var(--dark3);}
.ben-icon{width:48px;height:48px;background:rgba(201,168,76,0.08);border:1px solid rgba(201,168,76,0.15);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:20px;}
.ben-title{font-weight:700;font-size:1rem;color:var(--white);margin-bottom:10px;}.ben-desc{font-size:0.88rem;color:var(--white-dim);line-height:1.75;}
.inside-section{padding:100px 0;background:var(--black);}
.ch-list{margin-top:48px;}
.ch-item{display:flex;align-items:center;gap:24px;padding:20px 0;border-bottom:1px solid rgba(255,255,255,0.04);cursor:default;transition:all 0.3s;}
.ch-item:hover .ch-content{color:var(--white);}.ch-item:hover .ch-num{opacity:1;}
.ch-num{font-family:'Playfair Display',serif;font-size:0.75rem;font-weight:700;color:var(--gold);opacity:0.45;width:32px;flex-shrink:0;letter-spacing:0.1em;}
.ch-content{color:var(--white-dim);font-size:0.95rem;font-weight:500;transition:color 0.3s;flex:1;}
.ch-tag{font-size:0.68rem;font-weight:700;color:var(--gold);background:rgba(201,168,76,0.08);border:1px solid rgba(201,168,76,0.2);padding:3px 10px;border-radius:100px;letter-spacing:0.06em;white-space:nowrap;}
.author-section{padding:100px 0;background:var(--dark);}
.author-card{display:grid;grid-template-columns:300px 1fr;gap:0;align-items:stretch;background:var(--dark2);border:1px solid rgba(201,168,76,0.12);border-radius:20px;overflow:hidden;margin-top:48px;}
.author-img-wrap{position:relative;overflow:hidden;min-height:420px;}
.author-img-wrap::after{content:'';position:absolute;inset:0;background:linear-gradient(90deg,transparent 55%,var(--dark2) 100%);}
.author-photo{width:100%;height:100%;object-fit:cover;object-position:center top;display:block;filter:grayscale(15%) contrast(1.06);transition:filter 0.5s;}
.author-img-wrap:hover .author-photo{filter:grayscale(0%) contrast(1.1);}
.author-info{padding:48px 48px 48px 36px;display:flex;flex-direction:column;justify-content:center;}
.author-name{font-weight:900;font-size:1.9rem;margin-bottom:20px;color:var(--white);}
.author-bio{color:var(--white-dim);font-size:0.93rem;line-height:1.9;margin-bottom:32px;}
.creds{display:flex;flex-wrap:wrap;gap:10px;}
.cred{background:rgba(201,168,76,0.06);border:1px solid rgba(201,168,76,0.2);border-radius:6px;padding:8px 14px;font-size:0.78rem;font-weight:600;color:var(--gold-light);display:flex;align-items:center;gap:6px;}
.testimonials-section{padding:100px 0;background:var(--black);}
.test-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:2px;margin-top:56px;background:rgba(201,168,76,0.06);border-radius:16px;overflow:hidden;}
.test-card{background:var(--dark2);padding:32px 28px;}
.test-stars{display:flex;gap:3px;margin-bottom:18px;color:var(--gold);font-size:0.82rem;}
.test-text{color:var(--white);font-size:0.9rem;line-height:1.85;margin-bottom:24px;font-style:italic;}
.test-author{display:flex;align-items:center;gap:12px;}
.test-avatar{width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,var(--dark4),var(--dark3));border:1px solid rgba(201,168,76,0.2);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0;}
.test-name{font-weight:700;font-size:0.88rem;color:var(--white);display:block;}.test-role{font-size:0.75rem;color:var(--white-dim);}
.offer-section{padding:100px 0;background:var(--dark);}
.offer-card{background:var(--dark2);border:1px solid rgba(201,168,76,0.22);border-radius:20px;overflow:hidden;margin-top:48px;}
.offer-header{background:linear-gradient(135deg,rgba(201,168,76,0.1),rgba(201,168,76,0.03));border-bottom:1px solid rgba(201,168,76,0.12);padding:44px 52px;text-align:center;position:relative;}
.offer-header::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);}
.offer-badge{display:inline-block;background:var(--red);color:var(--white);font-size:0.7rem;font-weight:800;padding:4px 14px;border-radius:100px;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:16px;}
.price-row{display:flex;align-items:center;justify-content:center;gap:20px;margin-top:16px;flex-wrap:wrap;}
.old-price{font-size:1.4rem;font-weight:700;color:var(--white-dim);text-decoration:line-through;opacity:0.45;}
.new-price{font-size:3.8rem;font-weight:900;color:var(--gold);line-height:1;}
.currency{font-size:1rem;font-weight:600;color:var(--gold);align-self:flex-start;margin-top:10px;}
.viewers-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(201,168,76,0.06);border:1px solid rgba(201,168,76,0.15);border-radius:100px;padding:6px 16px;font-size:0.8rem;color:var(--white-dim);margin-top:16px;}
.viewers-dot{width:8px;height:8px;border-radius:50%;background:#22c55e;animation:blink 1.5s infinite;}
@keyframes blink{0%,100%{opacity:1;}50%{opacity:0.3;}}
.offer-body{padding:44px 52px;}
.offer-includes{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:40px;}
.offer-item{display:flex;align-items:flex-start;gap:12px;padding:16px;background:rgba(201,168,76,0.04);border:1px solid rgba(201,168,76,0.08);border-radius:10px;}
.offer-check{width:22px;height:22px;background:rgba(201,168,76,0.12);border:1px solid rgba(201,168,76,0.3);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.65rem;color:var(--gold);flex-shrink:0;margin-top:2px;}
.offer-item-text{font-size:0.88rem;color:var(--white);font-weight:500;line-height:1.5;}
.offer-guar{background:rgba(201,168,76,0.04);border:1px solid rgba(201,168,76,0.12);border-radius:12px;padding:28px 32px;display:flex;gap:20px;align-items:flex-start;margin-bottom:32px;}
.guar-icon{font-size:2.5rem;flex-shrink:0;line-height:1;}
.guar-text strong{display:block;font-size:1rem;font-weight:700;color:var(--gold);margin-bottom:6px;}
.guar-text p{font-size:0.88rem;color:var(--white-dim);line-height:1.75;}
.countdown-section{padding:80px 0;background:var(--black);}
.countdown-inner{background:linear-gradient(135deg,rgba(201,168,76,0.06),rgba(201,168,76,0.02));border:1px solid rgba(201,168,76,0.18);border-radius:20px;padding:56px 48px;text-align:center;position:relative;overflow:hidden;}
.countdown-inner::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);}
.cd-badge{display:inline-block;background:rgba(192,57,43,0.15);border:1px solid rgba(192,57,43,0.4);color:#ff6b6b;font-size:0.75rem;font-weight:700;padding:5px 16px;border-radius:100px;letter-spacing:0.1em;margin-bottom:20px;}
.cd-title{font-family:'Cairo',sans-serif;font-weight:900;font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:40px;color:var(--white);}
.cd-grid{display:flex;justify-content:center;align-items:center;gap:16px;flex-wrap:wrap;}
.cd-block{background:var(--dark2);border:1px solid rgba(201,168,76,0.15);border-radius:14px;padding:20px 28px;min-width:90px;text-align:center;position:relative;}
.cd-block::after{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,rgba(201,168,76,0.3),transparent);}
.cd-num{font-family:'Cairo',sans-serif;font-weight:900;font-size:2.6rem;line-height:1;color:var(--gold);display:block;}
.cd-lbl{font-size:0.72rem;color:var(--white-dim);margin-top:6px;font-weight:500;}
.cd-sep{font-size:2rem;color:rgba(201,168,76,0.3);font-weight:900;align-self:flex-start;margin-top:12px;}
.order-section{padding:80px 0;background:var(--dark);}
.order-card{background:var(--dark2);border:1px solid rgba(201,168,76,0.15);border-radius:20px;overflow:hidden;max-width:620px;margin:48px auto 0;}
.order-header{padding:32px 40px 24px;border-bottom:1px solid rgba(201,168,76,0.08);text-align:center;}
.order-title{font-weight:900;font-size:1.5rem;margin-bottom:8px;color:var(--white);}
.order-viewers{display:inline-flex;align-items:center;gap:6px;font-size:0.78rem;color:var(--white-dim);margin-bottom:12px;}
.order-price-row{display:flex;align-items:center;justify-content:center;gap:12px;}
.order-old{font-size:1.1rem;font-weight:700;color:var(--white-dim);text-decoration:line-through;opacity:0.45;}
.order-new{font-size:2rem;font-weight:900;color:var(--gold);}
.order-body{padding:32px 40px;}
.form-group{margin-bottom:16px;}
.form-input{width:100%;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:8px;padding:13px 16px;color:var(--white);font-family:'Cairo',sans-serif;font-size:0.92rem;text-align:right;transition:border-color 0.3s;}
.form-input:focus{outline:none;border-color:rgba(201,168,76,0.4);background:rgba(201,168,76,0.04);}
.form-input::placeholder{color:rgba(255,255,255,0.2);}
.qty-row{display:flex;align-items:center;justify-content:space-between;padding:13px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:8px;margin-bottom:16px;}
.qty-label{font-size:0.9rem;color:var(--white-dim);}
.qty-ctrl{display:flex;align-items:center;gap:16px;}
.qty-btn{width:32px;height:32px;background:rgba(201,168,76,0.1);border:1px solid rgba(201,168,76,0.25);border-radius:6px;color:var(--gold);font-size:1.1rem;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background 0.2s;}
.qty-btn:hover{background:rgba(201,168,76,0.2);}
.qty-val{font-weight:700;font-size:1rem;color:var(--white);min-width:20px;text-align:center;}
.form-footer{padding-top:8px;border-top:1px solid rgba(255,255,255,0.04);margin-top:8px;}
.shipping-row{display:flex;justify-content:space-between;font-size:0.82rem;color:var(--white-dim);margin-bottom:6px;}
.shipping-row span:last-child{color:#22c55e;font-weight:700;}
.total-row{display:flex;justify-content:space-between;font-size:0.95rem;font-weight:700;color:var(--white);margin-bottom:20px;}
.submit-btn{width:100%;background:linear-gradient(135deg,var(--gold-light),var(--gold),var(--gold-dim));color:var(--black);font-family:'Cairo',sans-serif;font-weight:900;font-size:1.1rem;padding:18px;border:none;border-radius:8px;cursor:pointer;transition:all 0.3s;}
.submit-btn:hover{transform:translateY(-2px);box-shadow:0 12px 40px rgba(201,168,76,0.35);}
.faq-section{padding:100px 0;background:var(--black);}
.faq-list{margin-top:48px;display:flex;flex-direction:column;gap:2px;border:1px solid rgba(201,168,76,0.08);border-radius:16px;overflow:hidden;}
.faq-item{background:var(--dark2);border-bottom:1px solid rgba(201,168,76,0.05);}.faq-item:last-child{border-bottom:none;}
.faq-q{width:100%;background:none;border:none;color:var(--white);font-family:'Cairo',sans-serif;font-size:0.97rem;font-weight:600;padding:24px 28px;text-align:right;cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:16px;transition:color 0.3s;}
.faq-q:hover{color:var(--gold);}
.faq-arr{width:24px;height:24px;border:1px solid rgba(201,168,76,0.2);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.7rem;flex-shrink:0;color:var(--gold);transition:transform 0.3s;}
.faq-ans{max-height:0;overflow:hidden;transition:max-height 0.4s ease,padding 0.3s;}.faq-ans.open{max-height:300px;padding-bottom:24px;}
.faq-ans p{padding:0 28px;color:var(--white-dim);font-size:0.9rem;line-height:1.9;}
.final-cta{padding:120px 0;text-align:center;background:radial-gradient(ellipse 80% 60% at 50% 0%,rgba(201,168,76,0.07) 0%,transparent 60%),var(--dark);}
.lp-footer{background:var(--black);border-top:1px solid rgba(255,255,255,0.04);padding:32px 0;text-align:center;}
.lp-footer p{font-size:0.78rem;color:rgba(255,255,255,0.2);}
.lp-footer a{color:rgba(201,168,76,0.4);text-decoration:none;}
.lp-footer a:hover{color:var(--gold);}
.fade-up{opacity:0;transform:translateY(30px);transition:opacity 0.6s ease,transform 0.6s ease;}.fade-up.visible{opacity:1;transform:translateY(0);}
.s1{transition-delay:0.1s;}.s2{transition-delay:0.2s;}
@media(max-width:768px){
.hero-grid{grid-template-columns:1fr;gap:44px;}.hero-grid .book-wrap{order:-1;}.book-mockup{width:230px;}
.ben-grid{grid-template-columns:1fr;}.test-grid{grid-template-columns:1fr;}
.author-card{grid-template-columns:1fr;}.author-img-wrap{min-height:300px;}
.author-img-wrap::after{background:linear-gradient(180deg,transparent 60%,var(--dark2) 100%);}
.author-info{padding:28px 28px 36px;}.offer-body{padding:28px 24px;}.offer-header{padding:32px 24px;}
.offer-includes{grid-template-columns:1fr;}.proof-inner{gap:24px;}.sol-box{padding:36px 28px;}
.cd-grid{gap:10px;}.cd-block{min-width:72px;padding:16px 18px;}.cd-num{font-size:2rem;}
.order-body{padding:24px;}.order-header{padding:24px 24px 20px;}}
</style>
</head>
<body>

<nav class="sticky-bar" id="stickyBar">
  <div class="sticky-title">طريقك لبناء STARTUP</div>
  <a href="#order" class="sticky-cta">اطلب نسختك الآن ←</a>
</nav>

<div class="urgency">🔥 عرض محدود — السعر سيرتفع قريباً &nbsp;|&nbsp; <span>600 جنيه فقط</span> بدلاً من 1000</div>

<section class="hero">
  <div class="container">
    <div class="hero-grid">
      <div>
        <div class="hero-label">الكتاب الذي ينقصك قبل أي خطوة</div>
        <h1 class="hxl" style="margin-bottom:24px;"><span class="gg">كل</span> من بنى ستارت أب ناجح.. اتبع نفس الطريق</h1>
        <p class="hero-subtitle">مش محتاج تتعلم من غلطاتك لو تقدر تتعلم من تجارب الناجحين. الكتاب ده هيديك الخريطة الكاملة — من الفكرة لحد Exit.</p>
        <div class="hero-stats">
          <div class="stat"><span class="stat-num">+500</span><span class="stat-label">قارئ استفاد</span></div>
          <div class="stat"><span class="stat-num">8</span><span class="stat-label">فصول عملية</span></div>
          <div class="stat"><span class="stat-num">15+</span><span class="stat-label">سنة خبرة</span></div>
        </div>
        <div class="cta-group">
          <a href="#order" class="btn-p">📦 اطلب نسختك دلوقتي — 600 جنيه</a>
          <a href="#inside" class="btn-s">👁️ اعرف أيه اللي جوا الكتاب أولاً</a>
          <p class="gline">🔒 ضمان استرداد كامل خلال 7 أيام — بدون أسئلة</p>
        </div>
      </div>
      <div class="book-wrap">
        <div class="book-glow"></div>
        <div class="book-mockup">
          <img src="https://files.easy-orders.net/1772291850377657490.jpeg" alt="طريقك لبناء STARTUP" class="book-img" loading="eager" />
        </div>
      </div>
    </div>
  </div>
</section>

<div class="proof-strip">
  <div class="container">
    <div class="proof-inner">
      <div class="proof-item"><div class="proof-icon">⭐</div>تقييم 4.9 من 5</div>
      <div class="proof-item"><div class="proof-icon">🚀</div>أكثر من 500 مؤسس</div>
      <div class="proof-item"><div class="proof-icon">📦</div>توصيل لكل المحافظات</div>
      <div class="proof-item"><div class="proof-icon">🔒</div>ضمان 7 أيام</div>
    </div>
  </div>
</div>

<section class="pain-section">
  <div class="container">
    <div class="slabel">المشكلة الحقيقية</div>
    <h2 class="hlg fade-up">ليه معظم الستارت أب بتموت <span class="gg"> في السنة الأولى؟</span></h2>
    <p class="fade-up" style="color:var(--white-dim);margin-top:20px;font-size:1rem;">مش لأن الفكرة وحشة. ومش لأن الناس مش شاطرة. السبب الأساسي واحد: <strong style="color:var(--white)">ماندوش خريطة.</strong></p>
    <ul class="pain-list">
      <li class="pain-item"><span class="pain-num">01</span><div class="pain-text"><strong>بتبني على أساس حدس مش بيانات</strong><p>الفكرة في دماغك بتبان عظيمة — بس ماعملتش validation حقيقي. بتنفق على منتج محدش سأل عليه أصلاً.</p></div></li>
      <li class="pain-item"><span class="pain-num">02</span><div class="pain-text"><strong>بتضيع وقت وفلوس في التفاصيل الغلط</strong><p>بتركز على اللوجو والديزاين قبل ما يكون عندك حتى عميل واحد بيدفع.</p></div></li>
      <li class="pain-item"><span class="pain-num">03</span><div class="pain-text"><strong>معندكش نظام — عندك أفكار</strong><p>كل يوم بتبدأ من الأول. مفيش playbook واضح، مفيش priorities، مفيش طريقة تقيس بيها النجاح.</p></div></li>
      <li class="pain-item"><span class="pain-num">04</span><div class="pain-text"><strong>بتتعلم من المحتوى الغلط</strong><p>محتوى نظري كتير — بس محدش بيقولك إيه اللي لازم تعمله أنت، دلوقتي، في الـ stage اللي أنت فيه.</p></div></li>
    </ul>
  </div>
</section>

<section class="solution-intro">
  <div class="container">
    <div class="slabel fade-up">الحل</div>
    <h2 class="hlg fade-up">مش كتاب تقرأه وتنساه.</h2>
    <div class="sol-box fade-up">
      <div class="qmark">"</div>
      <p style="font-size:1.15rem;line-height:2;color:var(--white);max-width:620px;margin:0 auto;position:relative;z-index:1;">طريقك لبناء STARTUP هو الـ <span class="gold">operating manual</span> اللي كنت محتاجه لما بدأت — فيه الإطار الفكري، الخطوات العملية، والـ mental models اللي بيفرق بين اللي بيكمل واللي بيقف في النص.</p>
      <div style="margin-top:32px;padding-top:24px;border-top:1px solid rgba(201,168,76,0.12);"><p style="color:var(--white-dim);font-size:0.9rem;position:relative;z-index:1;">— محمد حميدة | مؤلف الكتاب</p></div>
    </div>
  </div>
</section>

<section class="benefits-section">
  <div class="container">
    <div class="slabel">إيه اللي هتطلع بيه</div>
    <h2 class="hlg fade-up">6 تحولات حقيقية <span class="gg"> مش مجرد معلومات</span></h2>
    <div class="ben-grid">
      <div class="ben-card fade-up s1"><div class="ben-icon">🗺️</div><div class="ben-title">خريطة واضحة من الصفر للـ Scale</div><div class="ben-desc">هتعرف أنت فين دلوقتي وإيه الخطوة الجاية بالظبط — مش تخمين.</div></div>
      <div class="ben-card fade-up s2"><div class="ben-icon">✅</div><div class="ben-title">Validation قبل ما تنفق جنيه واحد</div><div class="ben-desc">Framework عملي تتأكد بيه إن فكرتك فيها سوق حقيقي قبل ما تبني أي حاجة.</div></div>
      <div class="ben-card fade-up s1"><div class="ben-icon">⚡</div><div class="ben-title">بناء أسرع بموارد أقل</div><div class="ben-desc">هتشتغل بـ lean mindset — تطلق بسرعة، تتعلم، وتحسن بدل ما تكمل تبني حاجة غلط.</div></div>
      <div class="ben-card fade-up s2"><div class="ben-icon">💰</div><div class="ben-title">مسار واضح للـ Revenue</div><div class="ben-desc">هتفهم Business Models وتختار الأنسب لك. ستارت أب بيكسب مش بس بيشتغل.</div></div>
      <div class="ben-card fade-up s1"><div class="ben-icon">🧠</div><div class="ben-title">Founder Mindset حقيقي</div><div class="ben-desc">التحديات اللي بتوقف 90% من المؤسسين — هتعرف تتعامل معاها وتعدي منها.</div></div>
      <div class="ben-card fade-up s2"><div class="ben-icon">📈</div><div class="ben-title">Growth System مش حملات عشوائية</div><div class="ben-desc">هتبني نظام نمو مستدام — مش بتعمل كمبينات كتير وما بتشوفش نتيجة.</div></div>
    </div>
  </div>
</section>

<section class="inside-section" id="inside">
  <div class="container">
    <div class="slabel">محتوى الكتاب</div>
    <h2 class="hlg fade-up">8 فصول — كل فصل <span class="gg"> بيتبني على اللي قبله</span></h2>
    <p class="fade-up" style="color:var(--white-dim);margin-top:16px;font-size:0.95rem;">مش مجرد chapters. كل فصل هو مرحلة في رحلة بناء الستارت أب الفعلية.</p>
    <div class="ch-list fade-up">
      <div class="ch-item"><span class="ch-num">01</span><span class="ch-content">لماذا يفشل 90% من الستارت أب — والـ 10% الناجحة بتفرق في إيه</span><span class="ch-tag">الأساس</span></div>
      <div class="ch-item"><span class="ch-num">02</span><span class="ch-content">الفكرة مش كافية — إزاي تعرف إن فكرتك فيها سوق حقيقي</span><span class="ch-tag">Validation</span></div>
      <div class="ch-item"><span class="ch-num">03</span><span class="ch-content">بناء الـ MVP اللي الناس هتدفع عليه — مش اللي أنت فاكره حلو</span><span class="ch-tag">Build</span></div>
      <div class="ch-item"><span class="ch-num">04</span><span class="ch-content">أول 100 عميل — الاستراتيجيات اللي بتشتغل فعلاً في السوق المصري</span><span class="ch-tag">Acquire</span></div>
      <div class="ch-item"><span class="ch-num">05</span><span class="ch-content">الـ Business Model الصح لستارت أبك — والأرقام اللي لازم تعرفها</span><span class="ch-tag">Revenue</span></div>
      <div class="ch-item"><span class="ch-num">06</span><span class="ch-content">بناء الفريق — إمتى تعين، مين تعين، وإزاي تحتفظ بالناس الصح</span><span class="ch-tag">Team</span></div>
      <div class="ch-item"><span class="ch-num">07</span><span class="ch-content">نظام النمو — كيف تبني Growth Engine مستدام مش حملات عشوائية</span><span class="ch-tag">Scale</span></div>
      <div class="ch-item"><span class="ch-num">08</span><span class="ch-content">Founder Mindset — التحديات النفسية الحقيقية وإزاي تعدي منها</span><span class="ch-tag">Mindset</span></div>
    </div>
  </div>
</section>

<section class="author-section">
  <div class="container">
    <div class="slabel">عن المؤلف</div>
    <div class="author-card fade-up">
      <div class="author-img-wrap">
        <img src="https://files.easy-orders.net/1772315256999115238.jpeg" alt="محمد حميدة" class="author-photo" loading="lazy" />
      </div>
      <div class="author-info">
        <h3 class="author-name">محمد حميدة</h3>
        <p class="author-bio">رائد أعمال بتجربة تعدي 15 سنة في بناء الشركات والستارت آب، ومؤسس شركة <strong style="color:var(--white)">Engaz AI</strong>، قادها لأكثر من 9 سنوات نحو التحول والنمو في التقنيات والمنتجات الرقمية. يؤمن أن النجاح لا يأتي بالصدفة… بل بالاستراتيجية، الفريق، والإصرار.</p>
        <div class="creds">
          <span class="cred">🏆 15+ سنة خبرة</span>
          <span class="cred">🤖 Engaz AI — 9+ سنوات</span>
          <span class="cred">📈 مستثمر ستارت آب</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials-section">
  <div class="container">
    <div class="slabel">ماذا قال القراء</div>
    <h2 class="hlg fade-up"><span class="gg">+500 مؤسس</span> قرأوه — هذا ما قالوا</h2>
    <div class="test-grid fade-up">
      <div class="test-card"><div class="test-stars">★★★★★</div><p class="test-text">"الكتاب ده غير طريقة تفكيري في الستارت أب كلياً. كنت بفكر إن المشكلة في الفكرة — الكتاب خلاني أفهم إن المشكلة كانت في الـ execution."</p><div class="test-author"><div class="test-avatar">👨</div><div><span class="test-name">أحمد الشريف</span><span class="test-role">مؤسس SaaS — القاهرة</span></div></div></div>
      <div class="test-card"><div class="test-stars">★★★★★</div><p class="test-text">"من أفضل الكتب اللي قريتها في المجال. مش نظري خالص — كل فصل عنده تطبيق عملي ممكن تبدأ بيه من نفس اليوم."</p><div class="test-author"><div class="test-avatar">👩</div><div><span class="test-name">سارة منصور</span><span class="test-role">Co-Founder — الإسكندرية</span></div></div></div>
      <div class="test-card"><div class="test-stars">★★★★★</div><p class="test-text">"بدأت أطبق الـ validation framework من الفصل الثاني — وفرت على نفسي 6 أشهر من البناء على فكرة مفيش عليها سوق."</p><div class="test-author"><div class="test-avatar">👨</div><div><span class="test-name">كريم عبدالله</span><span class="test-role">Tech Founder — الرياض</span></div></div></div>
    </div>
  </div>
</section>

<section class="offer-section" id="offer">
  <div class="container">
    <div class="slabel">العرض</div>
    <h2 class="hlg fade-up">استثمر في نفسك. <span class="gg"> قبل ما تستثمر في فكرتك.</span></h2>
    <div class="offer-card fade-up">
      <div class="offer-header">
        <div class="offer-badge">⏳ عرض محدود</div>
        <h3 class="hmd" style="color:var(--white);">طريقك لبناء STARTUP</h3>
        <p style="color:var(--white-dim);margin-top:8px;font-size:0.9rem;">النسخة الورقية المطبوعة + البونص الرقمي</p>
        <div class="price-row">
          <span class="old-price">1000 جنيه</span>
          <div style="display:flex;align-items:flex-start;gap:4px;"><span class="currency">EGP</span><span class="new-price">600</span></div>
        </div>
        <p style="color:var(--gold);font-size:0.8rem;margin-top:8px;font-weight:600;">وفّر 400 جنيه — العرض ده مش هيفضل</p>
        <div class="viewers-badge"><span class="viewers-dot"></span> <span id="viewersCount">47</span> شخص بيشاهد هذا المنتج الآن</div>
      </div>
      <div class="offer-body">
        <div class="offer-includes">
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">الكتاب المطبوع الأصلي (500+ صفحة)</div></div>
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">Startup Checklist — PDF قابل للطباعة</div></div>
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">Validation Framework Template</div></div>
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">آختبار جاهزية المؤسس</div></div>
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">Business Model Canvas بالعربي</div></div>
          <div class="offer-item"><div class="offer-check">✓</div><div class="offer-item-text">توصيل لباب البيت — كل محافظات مصر</div></div>
        </div>
        <div class="offer-guar">
          <span class="guar-icon">🛡️</span>
          <div class="guar-text"><strong>ضمان الرضا الكامل — 7 أيام</strong><p>قرأ الكتاب وما عجبكش؟ تواصل معانا خلال 7 أيام ورجعنالك فلوسك كاملة. من غير أسئلة، ومن غير تعقيد.</p></div>
        </div>
        <a href="#order" class="btn-p" style="font-size:1.2rem;padding:22px;">🚀 اطلب نسختك دلوقتي — 600 جنيه فقط</a>
        <p class="gline" style="margin-top:16px;">🔒 دفع آمن — توصيل سريع — ضمان استرداد 7 أيام</p>
      </div>
    </div>
  </div>
</section>

<section class="faq-section">
  <div class="container">
    <div class="slabel">الأسئلة الشائعة</div>
    <h2 class="hlg fade-up">عندك سؤال؟ <span class="gg"> الإجابة هنا.</span></h2>
    <div class="faq-list fade-up">
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)"><span>الكتاب ده مناسب لمين بالظبط؟</span><span class="faq-arr">▼</span></button><div class="faq-ans"><p>الكتاب مناسب لأي حد عنده فكرة ستارت أب أو في بداية مشروعه. سواء كنت موظف بتفكر تقلع، أو طالب عنده طموح، أو صاحب مشروع صغير عايز يطوره.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)"><span>الكتاب ورقي ولا رقمي؟</span><span class="faq-arr">▼</span></button><div class="faq-ans"><p>الكتاب ورقي مطبوع — بيتبعت لباب بيتك.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)"><span>كام يوم التوصيل؟</span><span class="faq-arr">▼</span></button><div class="faq-ans"><p>التوصيل بيأخد من 2 لـ 5 أيام عمل حسب محافظتك. القاهرة والجيزة عادةً 2-3 أيام. باقي المحافظات من 3 لـ 5 أيام.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)"><span>إيه ضمان الاسترداد؟</span><span class="faq-arr">▼</span></button><div class="faq-ans"><p>لو قرأت الكتاب وحسيت إنه ماضافلكش قيمة، تواصل معانا خلال 7 أيام من استلامه وهنرجعلك فلوسك كاملة. مفيش أسئلة ومفيش تعقيد.</p></div></div>
      <div class="faq-item"><button class="faq-q" onclick="toggleFaq(this)"><span>الكتاب ده بيختلف عن الكتب الإنجليزية ازاي؟</span><span class="faq-arr">▼</span></button><div class="faq-ans"><p>الكتاب مكتوب من واقع تجربة في السوق المصري والعربي تحديداً. الأمثلة والأرقام والتحديات كلها من الواقع المحلي — مش ترجمة أو تكييف لكتاب أجنبي.</p></div></div>
    </div>
  </div>
</section>

<section class="countdown-section">
  <div class="container">
    <div class="countdown-inner fade-up">
      <div class="cd-badge">⏰ عرض خاص لفترة محدودة</div>
      <h2 class="cd-title">احصل على الخصم الآن 🔥</h2>
      <div class="cd-grid">
        <div class="cd-block"><span class="cd-num" id="cd-days">05</span><div class="cd-lbl">أيام</div></div>
        <span class="cd-sep">:</span>
        <div class="cd-block"><span class="cd-num" id="cd-hours">12</span><div class="cd-lbl">ساعات</div></div>
        <span class="cd-sep">:</span>
        <div class="cd-block"><span class="cd-num" id="cd-mins">33</span><div class="cd-lbl">دقائق</div></div>
        <span class="cd-sep">:</span>
        <div class="cd-block"><span class="cd-num" id="cd-secs">08</span><div class="cd-lbl">ثواني</div></div>
      </div>
    </div>
  </div>
</section>

<section class="order-section" id="order">
  <div class="container">
    <div class="slabel" style="text-align:center;">اطلب نسختك</div>
    <div class="order-card fade-up">
      <div class="order-header">
        <div class="order-title">طريقك لبناء STARTUP</div>
        <div class="order-viewers"><span class="viewers-dot"></span> <span id="viewersCount2">36</span> يشاهد هذا المنتج الآن</div>
        <div class="order-price-row">
          <span class="order-old">1000 ج.م</span>
          <span class="order-new">600 ج.م</span>
        </div>
      </div>
      <div class="order-body">
        <p style="color:var(--white-dim);font-size:0.85rem;text-align:center;margin-bottom:24px;">يرجى ادخال معلوماتك لإكمال الطلب</p>
        <div class="qty-row">
          <span class="qty-label">عدد القطع</span>
          <div class="qty-ctrl">
            <button class="qty-btn" onclick="changeQty(-1)">−</button>
            <span class="qty-val" id="qtyVal">1</span>
            <button class="qty-btn" onclick="changeQty(1)">+</button>
          </div>
        </div>
        <div class="form-group"><input class="form-input" type="text" placeholder="👤  اسمك بالكامل" /></div>
        <div class="form-group"><input class="form-input" type="tel" placeholder="📱  رقم الهاتف" /></div>
        <div class="form-group"><input class="form-input" type="email" placeholder="✉️  البريد الالكتروني" /></div>
        <div class="form-group"><textarea class="form-input" rows="3" placeholder="📍  العنوان بالتفصيل" style="resize:none;"></textarea></div>
        <div class="form-footer">
          <div class="shipping-row"><span>تكلفة الشحن</span><span>شحن مجاني</span></div>
          <div class="total-row"><span>الاجمالي</span><span id="totalPrice">600 ج.م</span></div>
          <button class="submit-btn">اضغط هنا للشراء</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="final-cta">
  <div class="container">
    <div class="slabel">القرار</div>
    <h2 class="hxl fade-up" style="margin-bottom:24px;">الفكرة وحدها <span class="gg"> مش بتبني ستارت أب.</span></h2>
    <p class="fade-up" style="color:var(--white-dim);font-size:1.05rem;max-width:560px;margin:0 auto 48px;line-height:2;">عندك خيارين: تكمل تتعلم من غلطاتك لوحدك — أو تاخد الخريطة اللي اتبنت من تجارب حقيقية وتبدأ بخطوة صح.</p>
    <div class="fade-up" style="max-width:420px;margin:0 auto;">
      <a href="#order" class="btn-p" style="font-size:1.15rem;padding:20px 48px;">📦 اطلب نسختك الآن — 600 جنيه</a>
      <p class="gline" style="margin-top:16px;">🛡️ ضمان استرداد كامل 7 أيام — بدون شروط</p>
    </div>
  </div>
</section>

<footer class="lp-footer">
  <div class="container">
    <p>جميع الحقوق محفوظة © 2026 — محمد حميدة | <a href="#">سياسة الخصوصية</a> | <a href="#">الشروط والأحكام</a> | <a href="#">تواصل معنا</a></p>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
const sb=document.getElementById('stickyBar');
window.addEventListener('scroll',()=>{sb.classList.toggle('visible',window.scrollY>600);});
const obs=new IntersectionObserver((e)=>{e.forEach(en=>{if(en.isIntersecting)en.target.classList.add('visible');});},{threshold:0.1,rootMargin:'0px 0px -60px 0px'});
document.querySelectorAll('.fade-up,.pain-item').forEach(el=>obs.observe(el));
function toggleFaq(btn){const ans=btn.nextElementSibling,arr=btn.querySelector('.faq-arr'),isOpen=ans.classList.contains('open');document.querySelectorAll('.faq-ans').forEach(a=>a.classList.remove('open'));document.querySelectorAll('.faq-arr').forEach(a=>a.style.transform='');if(!isOpen){ans.classList.add('open');arr.style.transform='rotate(180deg)';}}
document.querySelectorAll('a[href^="#"]').forEach(a=>{a.addEventListener('click',e=>{const t=document.querySelector(a.getAttribute('href'));if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}});});
(function(){const KEY='startup_book_deadline';let deadline=localStorage.getItem(KEY);if(!deadline){deadline=Date.now()+(5*24*60*60*1000);localStorage.setItem(KEY,deadline);}function pad(n){return String(n).padStart(2,'0');}function tick(){const diff=parseInt(deadline)-Date.now();if(diff<=0){['cd-days','cd-hours','cd-mins','cd-secs'].forEach(id=>document.getElementById(id).textContent='00');return;}const d=Math.floor(diff/86400000),h=Math.floor((diff%86400000)/3600000),m=Math.floor((diff%3600000)/60000),s=Math.floor((diff%60000)/1000);document.getElementById('cd-days').textContent=pad(d);document.getElementById('cd-hours').textContent=pad(h);document.getElementById('cd-mins').textContent=pad(m);document.getElementById('cd-secs').textContent=pad(s);}tick();setInterval(tick,1000);})();
(function(){let v=Math.floor(Math.random()*21)+30;function update(){const delta=Math.floor(Math.random()*7)-3;v=Math.max(30,Math.min(70,v+delta));document.getElementById('viewersCount').textContent=v;document.getElementById('viewersCount2').textContent=v;setTimeout(update,Math.floor(Math.random()*8000)+7000);}document.getElementById('viewersCount').textContent=v;document.getElementById('viewersCount2').textContent=v;setTimeout(update,7000);})();
let qty=1;function changeQty(d){qty=Math.max(1,qty+d);document.getElementById('qtyVal').textContent=qty;document.getElementById('totalPrice').textContent=(600*qty)+' ج.م';}
</script>
</body>
</html>