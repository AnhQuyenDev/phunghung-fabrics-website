const searchToggleBtn = document.getElementById('search-toggle');
const searchBar = document.getElementById('search-bar');

const menuToggleBtn = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuOpenIcon = document.getElementById('menu-open-icon');
const menuCloseIcon = document.getElementById('menu-close-icon');

// Xử lý sự kiện click cho nút TÌM KIẾM
searchToggleBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    searchBar.classList.toggle('hidden');
});

// Xử lý sự kiện click cho nút MENU MOBILE
menuToggleBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    menuOpenIcon.classList.toggle('hidden');
    menuCloseIcon.classList.toggle('hidden');
});

// Đóng thanh tìm kiếm khi click ra ngoài
document.addEventListener('click', (event) => {
    if (!searchBar.contains(event.target) && !searchToggleBtn.contains(event.target)) {
        if (!searchBar.classList.contains('hidden')) {
            searchBar.classList.add('hidden');
        }
    }
});

// ================== VIDEO CONTROL ==================

const video = document.getElementById('hero-video');
const controlBtn = document.getElementById('video-control-btn');
const pauseIcon = document.getElementById('pause-icon');
const playIcon = document.getElementById('play-icon');

if (controlBtn && video) {
    controlBtn.addEventListener('click', () => {
        if (video.paused) {
            video.play();
            playIcon.classList.add('hidden');
            pauseIcon.classList.remove('hidden');
        } else {
            video.pause();
            pauseIcon.classList.add('hidden');
            playIcon.classList.remove('hidden');
        }
    });
}

// ================== TAB CONTROL: OUTDURA DESIGN COLLECTIONS ==================

document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        // Thêm 'event' vào hàm callback
        button.addEventListener('click', (event) => {
            // *** DÒNG QUAN TRỌNG: Ngăn chặn hành vi mặc định ***
            event.preventDefault(); 

            const tabId = button.getAttribute('data-tab');

            // 1. Cập nhật trạng thái active cho nút
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active', 'text-[#E9842B]', 'border-[#E9842B]');
                btn.classList.add('text-gray-500', 'border-transparent');
            });
            button.classList.add('active', 'text-[#E9842B]', 'border-[#E9842B]');
            button.classList.remove('text-gray-500', 'border-transparent');

            // 2. Ẩn tất cả nội dung và hình ảnh
            document.querySelectorAll('#tab-text-content .tab-content, #tab-image-content .tab-content').forEach(content => {
                content.classList.add('opacity-0', 'invisible');
                // Đảm bảo các ảnh được xếp chồng lên nhau để hiệu ứng mượt hơn
                if (content.tagName === 'IMG' || content.querySelector('img')) {
                        content.classList.add('absolute', 'top-0', 'left-0');
                }
            });

            // 3. Hiển thị nội dung và hình ảnh tương ứng
            const activeText = document.getElementById(tabId + '-text');
            const activeImage = document.getElementById(tabId + '-img');

            setTimeout(() => {
                if (activeText) activeText.classList.remove('opacity-0', 'invisible');
                if (activeImage) activeImage.classList.remove('opacity-0', 'invisible', 'absolute');
            }, 100);
        });
    });

    // Bổ sung: Ngăn chặn tất cả các link `href="#"` khác gây nhảy trang
    document.querySelectorAll('a[href="#"]').forEach(anchor => {
        anchor.addEventListener('click', (event) => {
            event.preventDefault();
        });
    });
});
