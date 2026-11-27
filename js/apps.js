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

  /* --- F. アンカーリンク：スムーススクロール＋固定ヘッダー分の位置調整 --- */
  // 対象のリンクは selector で指定（学内施設ページの学校ボタン・各施設ボタン）
  const initAnchorScroll = (selector) => {
    const links = document.querySelectorAll(selector);
    if (!header || links.length === 0) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const GAP = 24; // ヘッダーの下に空ける余白(px)

    // 要素のレイアウト上のページ先頭からの距離（.reveal の translateY の影響を受けない）
    const getDocTop = (el) => {
      let y = 0;
      while (el) { y += el.offsetTop; el = el.offsetParent; }
      return y;
    };

    // 固定ヘッダー表示時の高さ（固定前は一時的にクラスを付けて計測）
    const getFixedHeaderHeight = () => {
      if (getComputedStyle(header).position === 'fixed') return header.offsetHeight;
      header.classList.add('is-fixed');
      const h = header.offsetHeight;
      header.classList.remove('is-fixed');
      return h;
    };

    // 移動先のスクロール位置を計算
    // PCではMVを過ぎるとヘッダーが position: fixed になり、ヘッダー分だけ下の要素が上に詰まるため、その分も考慮する
    const getScrollTop = (target) => {
      const fixedH = getFixedHeaderHeight();
      const mvHeight = mv ? mv.offsetHeight : 0;
      const inFlow = getComputedStyle(header).position !== 'fixed';
      let top = getDocTop(target);

      if (inFlow && window.innerWidth >= 1025) {
        const fixedTop = top - header.offsetHeight - fixedH - GAP;
        return fixedTop > mvHeight ? fixedTop : Math.max(0, top - GAP);
      }
      return Math.max(0, top - fixedH - GAP);
    };

    // スクロール停止後に位置がずれていたら補正（ヘッダーの固定化などによるズレ対策）
    const settleScroll = (target) => {
      let last = -1;
      let stable = 0;
      const tick = () => {
        const y = window.pageYOffset;
        stable = Math.abs(y - last) < 1 ? stable + 1 : 0;
        last = y;
        if (stable < 8) { requestAnimationFrame(tick); return; }
        const diff = getScrollTop(target) - y;
        if (Math.abs(diff) > 2) window.scrollTo({ top: y + diff, behavior: 'auto' });
      };
      requestAnimationFrame(tick);
    };

    links.forEach((link) => {
      link.addEventListener('click', (e) => {
        const id = decodeURIComponent((link.getAttribute('href') || '').slice(1));
        const target = id ? document.getElementById(id) : null;
        if (!target) return;

        e.preventDefault();
        window.scrollTo({ top: getScrollTop(target), behavior: reduceMotion ? 'auto' : 'smooth' });
        history.pushState(null, '', '#' + id);
        settleScroll(target);
      });
    });

    // URLにハッシュ付きで直接開いた場合も同じ位置に合わせる
    window.addEventListener('load', () => {
      const id = decodeURIComponent(location.hash.slice(1));
      const target = id ? document.getElementById(id) : null;
      if (target && document.querySelector(selector + '[href="#' + id + '"]')) {
        window.scrollTo({ top: getScrollTop(target), behavior: 'auto' });
      }
    });
  };

  initAnchorScroll('.facilities-card[href^="#"], .floor-guide__room-link[href^="#"]');

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