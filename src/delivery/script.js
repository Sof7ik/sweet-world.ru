function toggleDelivery() {
    delivery = document.querySelector(".main__delivery");
    pickup = document.querySelector(".main__pickup");
    toggleDel = document.querySelector(".toggleDel");
    togglePick = document.querySelector(".togglePick");
    if(pickup.classList.contains("pickup")) {
        pickup.classList.add("pickup--hidden");
        pickup.classList.remove("pickup");
        delivery.classList.remove("delivery--hidden");
        delivery.classList.add("delivery");
        toggleDel.classList.add("main__button--active");
        togglePick.classList.remove("main__button--active");
        console.log("1");
    }
    
}

function togglePickup() {
    delivery = document.querySelector(".main__delivery");
    pickup = document.querySelector(".main__pickup");
    toggleDel = document.querySelector(".toggleDel");
    togglePick = document.querySelector(".togglePick");
    if(delivery.classList.contains("delivery")) {
        pickup.classList.remove("pickup--hidden");
        pickup.classList.add("pickup");
        delivery.classList.add("delivery--hidden");
        delivery.classList.remove("delivery");
        toggleDel.classList.remove("main__button--active");
        togglePick.classList.add("main__button--active");
        console.log("2");
    }
    
}
