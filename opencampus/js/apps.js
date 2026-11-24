/**
 * 医療系専門学校 公式サイト JavaScript
 * 全機能統合版
 */

// 1. DOM読み込み完了時の処理
document.addEventListener('DOMContentLoaded', () => {
  
  /* --- A. 共通要素の取得 --- */
  const header = document.getElementById('js-header');
  const mv = document.getElementById('js-mv');
  const hamburger = document.getElementById('js-hamburger');
  const spNav = document.getElementById('js-sp-nav');

  /* --- B. 固定ヘッダー制御（PCのみ） --- */
  const handleScrollHeader = () => {
    if (!header || !mv) return;
    
    // PC表示（1025px以上）のときのみ実行
    if (window.innerWidth >= 1025) {
      const mvHeight = mv.offsetHeight;
      if (window.scrollY > mvHeight) {
        header.classList.add('is-fixed');
        header.classList.remove('is-fixed-out');
      } else if (header.classList.contains('is-fixed')) {
        header.classList.add('is-fixed-out');
        header.classList.remove('is-fixed');
      }
    } else {
      // スマホ表示時は固定を強制解除
      header.classList.remove('is-fixed', 'is-fixed-out');
    }
  };

  /* --- C. メインビジュアル高さ取得 --- */
  const setMvHeight = () => {
    if (!mv) return;
    // 768px以下（スマホ）はJSによる高さ指定を解除
    if (window.innerWidth <= 768) {
      mv.style.removeProperty('--mv-height');
      return;
    }
    // PCは計算してCSS変数にセット
    const calculatedHeight = window.innerHeight - 100;
    mv.style.setProperty('--mv-height', `${calculatedHeight}px`);
  };

  /* --- D. 下部ティッカー（ENTRY）の複製 --- */
  const fillTicker = () => {
    const ticker = document.querySelector('.ticker-wrapper');
    const group = document.querySelector('.ticker-group');
    if (!ticker || !group) return;

    if (ticker.offsetWidth < window.innerWidth * 2) {
      const clone = group.cloneNode(true);
      ticker.appendChild(clone);
    }
  };

  /* --- E. 各種イベント登録 --- */
  // 初回実行
  handleScrollHeader();
  setMvHeight();
  fillTicker();

  // スクロール時
  window.addEventListener('scroll', handleScrollHeader);

  // リサイズ時（負荷軽減処理付き）
  let resizeTimer;
  window.addEventListener('resize', () => {
    if (resizeTimer) cancelAnimationFrame(resizeTimer);
    resizeTimer = requestAnimationFrame(() => {
      handleScrollHeader();
      setMvHeight();
    });
  });
});


// 2. 画像など全リソース読み込み後の処理
window.addEventListener('load', () => {
  
  /* --- F. ギャラリー無限ループアニメーション --- */
  const track = document.getElementById('js-gallery-track');
  if (!track) return;

  let safetyCounter = 0; // 無限ループ防止用のカウンター
  const maxClones = 10;   // 最大複製回数の上限

  const cloneItems = () => {
    // 幅が0の場合、または上限に達した場合は無限ループを防ぐため中断
    if (track.offsetWidth === 0 || safetyCounter >= maxClones) return;

    if (track.offsetWidth < window.innerWidth * 2) {
      track.innerHTML += track.innerHTML;
      safetyCounter++;
      cloneItems(); // 複製実行
    }
  };
  cloneItems();

  let speed = 1; 
  let position = 0;
  // 要素幅が0の場合は計算エラーを防ぐ
  const originalWidth = track.offsetWidth > 0 ? track.offsetWidth / 2 : 0;

  if (originalWidth === 0) return; // 安全対策

  const loopGallery = () => {
    position -= speed;
    if (Math.abs(position) >= originalWidth) position = 0;
    track.style.transform = `translateX(${position}px)`;
    requestAnimationFrame(loopGallery);
  };
  loopGallery();
});


// 3. jQueryを使用したメニュー・アコーディオン制御
$(function() {
  const $hamburger = $('#js-hamburger');
  const $spNav = $('#js-sp-nav');

  /* --- G. ハンバーガーメニュー開閉（上からスライドダウン） --- */
  $hamburger.on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $spNav.toggleClass('open');
    
    // 背面スクロール禁止
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

    // 開閉実行
    $subMenu.stop().slideToggle(300);
    $parentLi.toggleClass('active'); // ＋アイコンの回転用
  });

  /* --- I. オープンキャンパス タイムスケジュール用アコーディオン --- */
  $('.opencampus-container').on('click', '.js-schedule-trigger', function(e) {
    e.preventDefault();
    
    const $trigger = $(this);
    const $parentItem = $trigger.closest('.accordion-item');
    const $content = $trigger.next('.js-schedule-content');

    // 開閉の実行（stop()を挟むことで連打時のガタつきを防止）
    $content.stop().slideToggle(300);
    $parentItem.toggleClass('active');
  });

});


// 4. スクロール時のフェードイン（IntersectionObserver）
document.addEventListener('DOMContentLoaded', () => {
  // 監視対象のオプション
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1 // 10%見えたら発火
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // 画面内に入ったらクラスを付与
        entry.target.classList.add('is-visible');
        // 一度表示されたら監視を解除
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // .reveal クラスを持つすべての要素を監視対象にする
  const revealElements = document.querySelectorAll('.reveal');
  revealElements.forEach(el => observer.observe(el));
});


/* ==================================================
 * 5. スマホ用 スワイプガイド自動生成＆タッチ・スクロール時削除処理
 * ================================================== */
$(function() {
  
  // スワイプガイドの自動構築関数
  function setupSwipeGuides() {
    $('.table-scroll-wrapper').each(function() {
      const $wrapper = $(this);

      // 既に親要素（.table-container）で包まれている場合はスキップ
      if ($wrapper.parent('.table-container').length) return;

      const guideHtml = `
        <div class="table-swipe-guide" aria-hidden="true">
          <span class="swipe-text">
            <img src="images/scroll-hand.svg" alt="" class="swipe-hand-img">
          </span>
        </div>
      `;

      // 固定配置用に .table-container で自動的に包み、ガイドを外側（同階層）に挿入
      $wrapper.wrap('<div class="table-container"></div>');
      $wrapper.before(guideHtml);
    });
  }

  // 初回呼び出し
  setupSwipeGuides();

  // ガイド消去用の共通関数
  function removeGuide($container) {
    const $guide = $container.find('.table-swipe-guide');
    if ($guide.length && !$guide.hasClass('is-hidden')) {
      // 1. フェードアウト用クラスを即座に付与
      $guide.addClass('is-hidden');

      // 2. CSSのフェードアウトアニメーション（0.4s）完了後にDOMから完全削除
      setTimeout(function() {
        $guide.remove();
      }, 400);
    }
  }

  // スクロール（scroll）またはタッチ開始（touchstart）を確実にキャッチして削除を実行
  $(document).on('scroll touchstart keydown', '.table-scroll-wrapper', function() {
    const $container = $(this).closest('.table-container');
    removeGuide($container);
  });

});