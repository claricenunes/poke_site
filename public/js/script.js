/* Arquivo script.js */

document.addEventListener('DOMContentLoaded', function () {

    // ================= MENU MOBILE =================
    var btn = document.querySelector('.menu-toggle');
    if (btn) {
        btn.addEventListener('click', function () {
            document.querySelector('body').classList.toggle('menu-open');
        });
    }

    // ================= SCROLL HOME =================
    function scrollToMenu(event) {
        event.preventDefault();
        var menu = document.getElementById('menu');
        if (menu) {
            menu.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    document.querySelectorAll('.btn-order').forEach(function(el){
        el.addEventListener('click', scrollToMenu);
    });

    document.querySelectorAll('.btn-login').forEach(function(el){
        el.addEventListener('click', function(e){
            if (window.location.pathname === '/' || window.location.pathname === '/welcome') {
                scrollToMenu(e);
            }
        });
    });

    console.log('script.js carregado');


    /* =========================
       CARRINHO LATERAL
    ========================== */

    const cartBtn = document.querySelector(".cart-btn");
    const cartSidebar = document.getElementById("cart-sidebar");
    const cartOverlay = document.getElementById("cart-overlay");
    const closeCart = document.getElementById("close-cart");
    const cartItemsContainer = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");

    let cart = [];

    if (cartBtn && cartSidebar) {

        cartBtn.addEventListener("click", function (e) {
            e.preventDefault();
            cartSidebar.classList.add("active");
            cartOverlay.classList.add("active");
        });

        if (closeCart) {
            closeCart.addEventListener("click", closeCartFunc);
        }

        if (cartOverlay) {
            cartOverlay.addEventListener("click", closeCartFunc);
        }

        function closeCartFunc() {
            cartSidebar.classList.remove("active");
            cartOverlay.classList.remove("active");
        }

        document.querySelectorAll(".dish .btn-default").forEach(function(button) {
            button.addEventListener("click", function () {

                const dish = this.closest(".dish");
                if (!dish) return;

                const nameEl = dish.querySelector(".dish-title");
                const priceEl = dish.querySelector(".dish-price h4");

                if (!nameEl || !priceEl) return;

                const name = nameEl.innerText;
                const priceText = priceEl.innerText;
                const price = parseFloat(
                    priceText.replace("R$", "").replace(",", ".")
                );

                cart.push({ name, price });
                updateCart();
            });
        });

        function updateCart() {
            cartItemsContainer.innerHTML = "";
            let total = 0;

            cart.forEach(function(item) {
                total += item.price;

                cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <span>${item.name}</span>
                        <span>R$ ${item.price.toFixed(2)}</span>
                    </div>
                `;
            });

            cartTotal.innerText = total.toFixed(2);
        }
    }

});
