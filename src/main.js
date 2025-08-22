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

// ================== Page FAQ: Xử lí accordion ==================

document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');
        const icon = header.querySelector('.accordion-icon');

        header.addEventListener('click', () => {
            // Kiểm tra xem item hiện tại có đang mở không
            const isOpen = item.classList.contains('active');

            // Đóng tất cả các item khác
            accordionItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                otherItem.querySelector('.accordion-content').style.maxHeight = '0px';
                otherItem.querySelector('.accordion-icon').classList.remove('rotate-180');
                // Reset style cho item không active
                otherItem.classList.remove('bg-white', 'border', 'border-gray-200', 'shadow-sm');
                otherItem.classList.add('bg-gray-100');
                otherItem.querySelector('.accordion-header span').classList.remove('text-gray-900');
                otherItem.querySelector('.accordion-header span').classList.add('text-gray-800');
            });
            
            // Nếu item hiện tại chưa mở, thì mở nó ra
            if (!isOpen) {
                item.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.classList.add('rotate-180');
                // Thay đổi style khi active
                item.classList.add('bg-white', 'border', 'border-gray-200', 'shadow-sm');
                item.classList.remove('bg-gray-100');
                header.querySelector('span').classList.add('text-gray-900');
                header.querySelector('span').classList.remove('text-gray-800');
            }
        });
    });

    // Xử lý item được mở sẵn khi tải trang
    const preOpenedItem = document.querySelector('.accordion-item.active, .accordion-item .rotate-180');
    if (preOpenedItem) {
        const item = preOpenedItem.closest('.accordion-item');
        item.classList.add('active');
    }
});

// ================== Page Blog: Xử lí hiển thị blog ==================

document.addEventListener('DOMContentLoaded', function () {

    // =================================================
    // DỮ LIỆU BLOG (BẠN CÓ THỂ THÊM/SỬA/XÓA Ở ĐÂY)
    // =================================================
    const blogPosts = [
        {
            id: 1,
            imageUrl: 'public/images/Outdura_ Blog/imgi_3_csm_Coast2Coast_Presentation_Loop_cdb097202a.png',
            date: 'APR 2025',
            title: 'From East to West Coast and Beyond',
            excerpt: 'The essence of our company and the presentation of the various regions in the USA.',
            tags: ['Collections', 'Design', 'outdura']
        },
        {
            id: 2,
            imageUrl: 'public/images/Outdura_ Blog/imgi_4_csm_IMG_2698_d7775321de.png',
            date: 'APR 2025',
            title: 'Inspiration from the West Coast',
            excerpt: 'How the pattern LEEWARD has be born.',
            tags: ['Design', 'outdura', 'Collections']
        },
        {
            id: 3,
            imageUrl: 'public/images/Outdura_ Blog/imgi_5_csm_Wyzenbeek_ff8ab835c7.png',
            date: 'MAR 2025',
            title: 'Our Legacy in Fabric Innovation',
            excerpt: 'A deep dive into the history of our textile manufacturing process.',
            tags: ['Acrylic', 'Industry Insights', 'Fabric Knowledge']
        },
        {
            id: 4,
            imageUrl: 'public/images/Outdura_ Blog/imgi_6_csm_SST-Rumor_Aquatic_6663_11_6eb6b8779c.png',
            date: 'MAR 2025',
            title: 'The Science of Solution-Dyed Acrylic',
            excerpt: 'Understanding the benefits and technology behind our most durable fabrics.',
            tags: ['Solution-dyed', 'Fabric Knowledge', 'Industry Insights', 'Acrylic']
        },
        {
            id: 5,
            imageUrl: 'public/images/Outdura_ Blog/imgi_7_csm_GettyImages-1384259577_85cca33acf.png',
            date: 'FEB 2025',
            title: 'About Our Commitment to Quality',
            excerpt: 'More than just threads, it is a promise of excellence.',
            tags: ['Design', 'Collections', 'Industry Insights']
        },
        {
            id: 6,
            imageUrl: 'public/images/Outdura_ Blog/imgi_8_csm_Factory_All_Video.01_11_40_23.Still101_ac16d90ed0.png',
            date: 'JAN 2025',
            title: 'Industry Insights: 2025 Color Trends',
            excerpt: 'Discover the colors that will define the upcoming seasons.',
            tags: ['Legacy', 'History', 'About']
        },
    ];

    const filterContainer = document.getElementById('filter-container');
    const postsGrid = document.getElementById('posts-grid');

    // =================================================
    // HÀM ĐỂ "VẼ" CÁC BÀI BLOG RA MÀN HÌNH
    // =================================================
    function renderPosts(posts) {
        postsGrid.innerHTML = ''; // Xóa các bài viết cũ
        if (posts.length === 0) {
            postsGrid.innerHTML = `<p class="text-center md:col-span-2 text-gray-500">Không có bài viết nào phù hợp.</p>`;
            return;
        }
        posts.forEach(post => {
            const postElement = document.createElement('div');
            postElement.className = 'flex flex-col';
            
            // Tạo HTML cho các tag của bài viết
            const tagsHtml = post.tags.map(tag => 
                `<a href="#" class="border border-[#F07C28] text-[#F07C28] px-3 py-1 rounded-full text-xs hover:bg-[#F07C28] hover:text-white">${tag}</a>`
            ).join('');

            // **** BƯỚC 1: CẬP NHẬT HTML Ở ĐÂY ****
            // Thêm div class="relative", nút có class="share-btn", và div của pop-up (mặc định có class 'hidden')
            postElement.innerHTML = `
                <a href="#" class="block overflow-hidden rounded-xl">
                    <img src="${post.imageUrl}" alt="${post.title}" class="w-full h-64 object-cover rounded-xl transition-transform duration-300 hover:scale-105">
                </a>
                <div class="flex-grow flex flex-col pt-5">
                    <p class="text-xs font-bold text-[#F07C28] uppercase tracking-wider">${post.date}</p>
                    <h2 class="text-xl font-bold text-gray-800 mt-2">
                        <a href="#" class="uppercase hover:text-gray-600">${post.title}</a>
                    </h2>
                    <p class="text-gray-600 mt-2 flex-grow">${post.excerpt}</p>
                    <div class="flex flex-wrap items-center gap-2 mt-4">
                        ${tagsHtml}
                    </div>
                </div>
                <div class="flex justify-end items-center border-t border-gray-200 mt-5 pt-3">
                    <div class="relative">
                        <button class="share-btn text-gray-400 hover:text-gray-700" data-post-id="${post.id}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </button>
                        <div class="share-popup hidden absolute bottom-full right-0 mb-2 bg-white rounded-lg shadow-xl p-2 flex items-center gap-2 z-30">
                            <a href="#" class="p-2 rounded-full hover:text-[#F07C28]">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="p-2 rounded-full hover:text-[#F07C28]">
                                <i class="fa-brands fa-linkedin-in"></i>                            
                            </a>
                            <a href="#" class="p-2 rounded-full hover:text-[#F07C28]">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="#" class="p-2 rounded-full hover:text-[#F07C28]">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;
            postsGrid.appendChild(postElement);
        });
    }

    // =================================================
    // HÀM TẠO CÁC NÚT LỌC VÀ ĐẾM SỐ LƯỢNG
    // =================================================
    function renderFilters() {
        const categories = {};
        blogPosts.forEach(post => {
            post.tags.forEach(tag => {
                const normalizedTag = tag.trim();
                if (categories[normalizedTag]) {
                    categories[normalizedTag]++;
                } else {
                    categories[normalizedTag] = 1;
                }
            });
        });

        // Nút "Tất cả"
        let filtersHtml = `<button class="filter-btn active border border-[#F07C28] text-[#F07C28] px-4 py-1 rounded-full text-sm font-semibold hover:bg-[#F07C28] hover:text-white" data-category="all">All (${blogPosts.length})</button>`;

        // Các nút category khác
        for (const category in categories) {
            filtersHtml += `<button class="filter-btn border border-[#F07C28] text-[#F07C28] px-4 py-1 rounded-full text-sm font-semibold hover:bg-[#F07C28] hover:text-white" data-category="${category}">${category} (${categories[category]})</button>`;
        }
        
        filterContainer.innerHTML = filtersHtml;

        // Thêm sự kiện click cho các nút lọc
        addFilterEventListeners();
    }
    
    // =================================================
    // HÀM GÁN SỰ KIỆN LỌC
    // =================================================
    function addFilterEventListeners() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                
                // Bỏ active ở các nút khác
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Thêm active cho nút vừa click
                this.classList.add('active');

                const category = this.getAttribute('data-category');
                
                if (category === 'all') {
                    renderPosts(blogPosts);
                } else {
                    const filteredPosts = blogPosts.filter(post => 
                        post.tags.map(t => t.trim()).includes(category)
                    );
                    renderPosts(filteredPosts);
                }
            });
        });
    }

    // **** BƯỚC 2: THÊM JAVASCRIPT ĐỂ XỬ LÝ POP-UP ****
    // =================================================
    // SỰ KIỆN CLICK CHO NÚT CHIA SẺ (SHARE)
    // =================================================
    postsGrid.addEventListener('click', function(e) {
        // Tìm nút share-btn gần nhất với vị trí click
        const shareButton = e.target.closest('.share-btn');
        
        if (shareButton) {
            e.preventDefault();
            const popup = shareButton.nextElementSibling; // Lấy pop-up ngay sau nút
            const isHidden = popup.classList.contains('hidden');

            // Trước tiên, đóng tất cả các pop-up khác
            document.querySelectorAll('.share-popup').forEach(p => p.classList.add('hidden'));

            // Nếu pop-up đang bị ẩn, thì hiện nó ra
            if (isHidden) {
                popup.classList.remove('hidden');
            }
        }
    });

    // =================================================
    // SỰ KIỆN CLICK RA NGOÀI ĐỂ ĐÓNG POP-UP
    // =================================================
    window.addEventListener('click', function(e) {
        // Nếu click không phải vào nút share VÀ không phải vào trong pop-up
        if (!e.target.closest('.share-btn') && !e.target.closest('.share-popup')) {
            // Đóng tất cả các pop-up
            document.querySelectorAll('.share-popup').forEach(p => p.classList.add('hidden'));
        }
    });


    // =================================================
    // KHỞI CHẠY KHI TẢI TRANG
    // =================================================
    renderFilters(); // Tạo các nút lọc
    renderPosts(blogPosts); // Hiển thị tất cả bài viết lúc đầu

});



// ================== Page where to buy: Xử lí hiển thị nội dung động của footer ==================

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.where-to-buy-btn');
    const dynamicSection = document.getElementById('dynamic-content-section');
    const contentPanels = document.querySelectorAll('.dynamic-content');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Lấy ID của nội dung mục tiêu từ thuộc tính data-target của nút
            const targetId = this.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);

            // 1. Hiển thị section chứa nội dung động
            dynamicSection.classList.remove('hidden');

            // 2. Ẩn tất cả các khối nội dung
            contentPanels.forEach(panel => {
                panel.classList.add('hidden');
            });

            // 3. Hiển thị khối nội dung mục tiêu
            if (targetPanel) {
                targetPanel.classList.remove('hidden');
            }
            
            // Tùy chọn: Cuộn trang tới section vừa hiển thị
            dynamicSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
});