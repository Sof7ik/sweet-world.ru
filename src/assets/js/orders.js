function openOrder(event) {
  const target = event.currentTarget;
  const orderWrapper = target.closest(".orders__item");
  const orderBottom = orderWrapper.querySelector(".order__item-bottom");
  const arrowOpen = orderWrapper.querySelector(".arrow-open");

  orderWrapper.style = "border-bottom: 1px solid #ce9473;";
  arrowOpen.style.border = "none";
  orderBottom.style.height = `${
    orderBottom.querySelector(".order__item-bottom2").clientHeight
  }px`;

  target.classList.add("hidden");
}

document.addEventListener("DOMContentLoaded", () => {
  document
    .querySelectorAll(".arrow-open button")
    .forEach((button) => button.addEventListener("click", openOrder));
});
