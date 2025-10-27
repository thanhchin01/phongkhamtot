import './bootstrap';
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// js dropdown dropdown
document.addEventListener("DOMContentLoaded", () => {
    // Lấy tất cả dropdown trên trang
    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach((dropdown) => {
        const btn = dropdown.querySelector(".dropdown-btn");
        const menu = dropdown.querySelector(".dropdown-menu");
        const span = btn.querySelector("span"); // nội dung trong nút

        // Lưu placeholder gốc
        const placeholder = span.innerHTML.trim();

        // Toggle mở/đóng menu
        btn.addEventListener("click", (e) => {
            e.stopPropagation();
            document.querySelectorAll(".dropdown-menu").forEach((m) => {
                if (m !== menu) m.classList.add("hidden");
            });
            menu.classList.toggle("hidden");
        });

        // Khi click vào checkbox
        menu.querySelectorAll("input[type='checkbox']").forEach((checkbox) => {
            checkbox.addEventListener("change", () => {
                const selected = Array.from(menu.querySelectorAll("input[type='checkbox']:checked"))
                    .map(cb => cb.nextElementSibling.innerText.trim());

                if (selected.length > 0) {
                    span.innerHTML = selected.join(", ");
                } else {
                    span.innerHTML = placeholder;
                }
            });
        });
    });

});


// cuộn trái cuộn phải
const c = document.getElementById('serviceList');
const l = document.getElementById('scrollLeft');
const r = document.getElementById('scrollRight');

function toggleBtns() {
    const max = c.scrollWidth - c.clientWidth;
    l.style.display = c.scrollLeft <= 0 ? 'none' : 'block';
    r.style.display = c.scrollLeft >= max - 5 ? 'none' : 'block';
}

[l, r].forEach((btn, i) => {
    btn.onclick = () => {
        c.scrollBy({ left: (i ? 300 : -300), behavior: 'smooth' });
        setTimeout(toggleBtns, 400);
    };
});

c.addEventListener('scroll', toggleBtns);
toggleBtns();




//hiển thị card / thu gọn card
const list = document.getElementById('specialtyList');
const btn = document.getElementById('toggleButton');
let expanded = false;

btn.addEventListener('click', () => {
    expanded = !expanded;
    if (expanded) {
        list.classList.remove('max-h-60');
        list.classList.add('max-h-[1000px]');
        btn.textContent = 'Thu gọn';
    } else {
        list.classList.add('max-h-60');
        list.classList.remove('max-h-[1000px]');
        btn.textContent = 'Hiển thị thêm';
    }
});

//chuyển trang
document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 16;
    const cards = Array.from(document.querySelectorAll('#cardContainer > a'));
    const pagination = document.getElementById('pagination');
    let currentPage = 1;

    const renderPage = (page) => {
        cards.forEach(card => card.classList.add('hidden'));
        const start = (page - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        cards.slice(start, end).forEach(card => card.classList.remove('hidden'));
        renderPagination();
    };

    const renderPagination = () => {
        const totalPages = Math.ceil(cards.length / itemsPerPage);
        pagination.innerHTML = '';

        // Nút "Trước"
        const prevBtn = document.createElement('button');
        prevBtn.textContent = '‹';
        prevBtn.className =
            `px-3 py-1 rounded-md border ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-200'}`;
        prevBtn.onclick = () => {
            if (currentPage > 1) {
                currentPage--;
                renderPage(currentPage);
            }
        };
        pagination.appendChild(prevBtn);

        // Nút số trang
        for (let i = 1; i <= totalPages; i++) {
            const btn = document.createElement('button');
            btn.textContent = i;
            btn.className =
                `px-3 py-1 rounded-md border ${i === currentPage ? 'bg-green-500 text-white' : 'hover:bg-gray-200'}`;
            btn.onclick = () => {
                currentPage = i;
                renderPage(currentPage);
            };
            pagination.appendChild(btn);
        }

        // Nút "Sau"
        const nextBtn = document.createElement('button');
        nextBtn.textContent = '›';
        nextBtn.className =
            `px-3 py-1 rounded-md border ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-200'}`;
        nextBtn.onclick = () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderPage(currentPage);
            }
        };
        pagination.appendChild(nextBtn);
    };

    renderPage(currentPage);
});
