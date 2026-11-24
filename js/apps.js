/**
 * 医療系専門学校 公式サイト JavaScript
 * 全機能統合版（修正版）
 */

document.addEventListener('DOMContentLoaded', () => {
  
  /* --- A. 共通要素の取得 --- */
  const header = document.getElementById('js-header');
  const mv = document.querySelector('.section-page-mv') || document.getElementById('js-mv'); // 下層MVクラス名にも対応

  /* --- B. 固定ヘッダー制御（PCのみ） --- */
  const handleScrollHeader = () => {
    if (!header || !mv) return;
    
    if (window.innerWidth >= 1025) {
      const mvHeight = mv.offsetHeight;
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      
      if (scrollTop > mvHeight) {
        // 【状態1】MVより下にスクロール：上からスライドインして固定
        header.classList.remove('is-fixed-out');
        header.classList.add('is-fixed');
      } else if (scrollTop <= mvHeight && header.classList.contains('is-fixed')) {
        // 【状態2】MVより上に戻る瞬間：スライドアップを開始
        header.classList.remove('is-fixed');
        header.classList.add('is-fixed-out');
      } else if (scrollTop === 0) {
        // 【状態3：追加】トップに完全に移動完了：すべての固定クラスを完全に排除（初期位置に戻す）
        header.classList.remove('is-fixed', 'is-fixed-out');
      }
    } else {
      // スマホ表示時は固定・アニメーションを強制解除
      header.classList.remove('is-fixed', 'is-fixed-out');
    }
  };

  /* --- E. 各種イベント登録 --- */
  handleScrollHeader(); // 初回実行
  window.addEventListener('scroll', handleScrollHeader); // スクロール時

  // リサイズ時（負荷軽減付き）
  let resizeTimer;
  window.addEventListener('resize', () => {
    if (resizeTimer) cancelAnimationFrame(resizeTimer);
    resizeTimer = requestAnimationFrame(() => {
      handleScrollHeader();
    });
  });
});

// 3. jQueryを使用したメニュー・アコーディオン制御
$(function() {
  const $hamburger = $('#js-hamburger');
  const $spNav = $('#js-sp-nav');

  /* --- G. ハンバーガーメニュー開閉 --- */
  $hamburger.on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $spNav.toggleClass('open');
    
    if ($spNav.hasClass('open')) {
      $('body').css({ 'overflow': 'hidden', 'height': '100%' });
    } else {
      $('body').css({ 'overflow': '', 'height': '' });
    }
  });

  /* --- H. スマホ用アコーディオン（サブメニュー） --- */
  $('.sp-main-list').on('click', '.parent-link', function(e) {
    e.preventDefault();
    const $subMenu = $(this).next('.sp-sub-menu');
    const $parentLi = $(this).parent('.has-child');

    $subMenu.stop().slideToggle(300);
    $parentLi.toggleClass('active');
  });
});


// 4. スクロールアニメーション（IntersectionObserver）
document.addEventListener('DOMContentLoaded', () => {
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  const revealElements = document.querySelectorAll('.reveal');
  revealElements.forEach(el => observer.observe(el));
});



/* --- FAQ アコーディオン制御 --- */
  $('.js-faq-trigger').on('click', function() {
    const $parentItem = $(this).closest('.js-faq-item');
    const $answer = $parentItem.find('.js-faq-answer');

    // 開閉のアニメーション（スライド時間: 300ms）
    $answer.stop().slideToggle(300);
    $parentItem.toggleClass('is-active');
  });




  document.addEventListener('DOMContentLoaded', () => {
  const featureSwiperEl = document.querySelector('.department-feature-swiper');
  
  if (featureSwiperEl) {
    const featureSwiper = new Swiper(featureSwiperEl, {
      // 繰り返しスライド
      loop: true,
      
      // フェード切り替え（デザインの品格を高める演出）
      effect: 'fade',
      fadeEffect: {
        crossFade: true // クロスフェードでチラつき防止
      },

      // 切り替え速度（ミリ秒）
      speed: 800,

      // 自動再生（3秒ごとに切り替え）
      autoplay: {
        delay: 3000,
        disableOnInteraction: false, // ユーザー操作後も自動再生を継続
        pauseOnMouseEnter: true,     // ホバー時に一時停止してじっくり見せる
      },

      // ドットページネーション
      pagination: {
        el: '.swiper-pagination',
        clickable: true, // ドットクリックで切り替え可能
      },

      // アクセシビリティ（キーボード操作対応）
      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },
    });
  }
});