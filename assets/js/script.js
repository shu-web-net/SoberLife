/**
 * SoberLife Main Script
 */
document.addEventListener("DOMContentLoaded", () => {
  // --- モバイルメニューの開閉制御 ---
  const mobileBtn = document.querySelector(".header__mobile-btn");
  const navMenu = document.querySelector(".header__nav");

  if (mobileBtn && navMenu) {
    mobileBtn.addEventListener("click", () => {
      const isOpen = navMenu.classList.toggle("header__nav--open");

      // ボタン自身の状態クラスをトグル
      mobileBtn.classList.toggle("header__mobile-btn--open", isOpen);
      mobileBtn.setAttribute("aria-expanded", isOpen);

      // Prevent body scroll when menu is open
      if (isOpen) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "";
      }
    });

    // メニュー外をクリックした時に閉じる
    document.addEventListener("click", (e) => {
      if (navMenu.classList.contains("header__nav--open")) {
        if (!mobileBtn.contains(e.target) && !navMenu.contains(e.target)) {
          navMenu.classList.remove("header__nav--open");
          mobileBtn.classList.remove("header__mobile-btn--open");
          mobileBtn.setAttribute("aria-expanded", "false");
          document.body.style.overflow = "";
        }
      }
    });
  }

  // --- 断酒カウンター（localStorage版） ---
  const counterEl = document.getElementById("counter");
  const startDateInput = document.getElementById("start-date");
  const saveBtn = document.getElementById("save-btn");
  const msgBox = document.getElementById("msg-box");

  if (counterEl && startDateInput && saveBtn) {
    // 表示更新関数
    const updateDisplay = (dateValue) => {
      if (!dateValue) return;
      const startDate = new Date(dateValue);
      const today = new Date();
      // 時刻を 00:00:00 にリセットして日数を計算
      startDate.setHours(0, 0, 0, 0);
      today.setHours(0, 0, 0, 0);

      const diffTime = today - startDate;
      const diffDays = Math.max(
        0,
        Math.floor(diffTime / (1000 * 60 * 60 * 24)),
      );
      counterEl.innerText = diffDays;
    };

    // 通知表示関数
    const showMessage = (text) => {
      if (!msgBox) return;
      msgBox.innerText = text;
      msgBox.classList.add("c-msg--visible");
      setTimeout(() => {
        msgBox.classList.remove("c-msg--visible");
      }, 2000);
    };

    // 初期ロード：保存された日付があれば反映
    const savedDate = localStorage.getItem("soberStartDate");
    if (savedDate) {
      startDateInput.value = savedDate;
      updateDisplay(savedDate);
    } else {
      // 保存がない場合はデフォルトで30日前を設定（デモ用）
      const demoDate = new Date();
      demoDate.setDate(demoDate.getDate() - 30);
      const dateStr = demoDate.toISOString().split("T")[0];
      startDateInput.value = dateStr;
      updateDisplay(dateStr);
    }

    // 保存ボタンクリック
    saveBtn.addEventListener("click", (e) => {
      e.preventDefault();
      const dateValue = startDateInput.value;
      if (dateValue) {
        localStorage.setItem("soberStartDate", dateValue);
        updateDisplay(dateValue);
        showMessage("断酒開始日を保存しました");
      }
    });
  }
});
