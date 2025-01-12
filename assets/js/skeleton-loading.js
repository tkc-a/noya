// ローディングの要素取得
const loadingItem = document.querySelectorAll("[data-js=loading]");

// loading非表示クラスを追加
const hideLoading = (list, className) => {
    list.forEach((element) => {
        element.classList.add(className);
    });
};

window.onload = () => {
    hideLoading(loadingItem, "loading--hidden");
};