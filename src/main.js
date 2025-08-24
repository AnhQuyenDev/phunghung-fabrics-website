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


// ================== Page Fabric Care: Xử lí chuyển tab và hiển thị nội dung video ==================

document.addEventListener('DOMContentLoaded', function () {
    // --- DỮ LIỆU MẪU CHO CÁC LOẠI VẾT BẨN ---
    // QUAN TRỌNG: Thêm thuộc tính 'videoUrl' cho mỗi đối tượng.
    // - Nếu video từ Youtube, hãy lấy link "Embed".
    // - Nếu video là file tự host, hãy điền đường dẫn tới file (ví dụ: '/videos/coke.mp4').
    const stainData = {
        'TEXGARD® Cleaner & TEXGARD® Protector': {
            videoUrl: 'public/videos/Outdura_Cleaning-Care_Parasol.mp4', // VÍ DỤ: link Youtube Embed
            cleaningSteps: [
                'Immerse spills with a brush.', 'Blot the fabric thoroughly, removing all residue.',
                'Spray TEXGARD® CLEANER onto the wet stained area.', 'Let soak in for 1-2 minutes.',
                'Work in with a sponge or a soft bristling pad.', 'Rinse the fabric thoroughly with clean water.',
                'Let fabric air dry completely.',
            ],
            whatYouNeed: ['Soft brush', 'Absorbent pad (if available)', 'TEXGARD® CLEANER', 'Sponge or scrubbing pad', 'TEXGARD® PROTECTOR'],
        },
        'Beer': {
            videoUrl: 'public/videos/Beer_small720p.mp4',
            cleaningSteps: [
                'Blot up excess beer immediately.', 'Mix mild soap with lukewarm water.',
                'Gently scrub the stain with a soft brush.', 'Rinse thoroughly with clean water.', 'Air dry.',
            ],
            whatYouNeed: ['Clean towel', 'Mild soap', 'Soft brush', 'Water'],
        },
        'Coca-Cola': {
            videoUrl: 'public/videos/Coca-Cola_small720p.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Chocolate': {
            videoUrl: 'public/videos/Cleaning_Chocolate.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Coffee': {
            videoUrl: 'public/videos/Coffee_small720p.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Ice cream': {
            videoUrl: 'public/videos/Cleaning_Ice_Cream.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Ketchup': {
            videoUrl: 'public/videos/Ketchup_small720p.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Milk': {
            videoUrl: 'public/videos/Milk_small720p.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Mud': {
            videoUrl: 'public/videos/Cleaning_Mud.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Mustard': {
            videoUrl: 'public/videos/Cleaning_Mustard.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Orange Juice': {
            videoUrl: 'public/videos/Orange_Juice_small720p.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Pen': {
            videoUrl: 'public/videos/Cleaning_Pen.mp4',
            cleaningSteps: [
                'Act quickly, blot the spill.', 'Apply a solution of water and white vinegar.',
                'Blot again with a dry cloth.', 'Rinse with water.',
            ],
            whatYouNeed: ['Paper towels', 'White vinegar', 'Water'],
        },
        'Red Wine': { 
            videoUrl: 'public/videos/Red_wine_small720p.mp4',
            cleaningSteps: ['Step A for Wine', 'Step B for Wine'], 
            whatYouNeed: ['Salt', 'Club Soda'] 
        },
    };

    // --- LOGIC CHUYỂN TAB (Không thay đổi) ---
    const tabs = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = document.querySelector(tab.dataset.tabTarget);
            tabs.forEach(t => {
                t.classList.remove('active', 'bg-white', 'text-orange-600');
                t.classList.add('bg-orange-300', 'text-white');
            });
            tabContents.forEach(tc => tc.classList.add('hidden'));
            tab.classList.add('active', 'bg-white', 'text-orange-600');
            tab.classList.remove('bg-orange-300', 'text-white');
            target.classList.remove('hidden');
        });
    });

    // --- LOGIC DROPDOWN VÀ ĐỔ DỮ LIỆU ĐỘNG ---
    const dropdown = document.getElementById('stain-dropdown');
    const dropdownBtn = document.getElementById('stain-dropdown-btn');
    const selectedStainEl = document.getElementById('selected-stain');
    const stainOptionsContainer = document.getElementById('stain-options');
    const dropdownArrow = document.getElementById('dropdown-arrow');

    const videoPlayBtn = document.getElementById('video-play-btn');
    const thumbnailContainer = document.getElementById('video-thumbnail-container');
    const iframeContainer = document.getElementById('video-iframe-container');
    
    let currentVideoUrl = '';

    // Tạo các mục lựa chọn cho dropdown
    Object.keys(stainData).forEach(stainName => {
        const option = document.createElement('a');
        option.href = '#';
        option.textContent = stainName;
        option.className = 'block px-4 py-3 hover:bg-orange-100 text-gray-700';
        option.dataset.stain = stainName;
        stainOptionsContainer.appendChild(option);
    });
    
    // Hàm reset và cập nhật nội dung
    function updateStainInfo(stainName) {
        const data = stainData[stainName];
        if (!data) return;

        // Reset trình phát video về trạng thái thumbnail
        iframeContainer.innerHTML = ''; // Xóa video đang phát (nếu có)
        thumbnailContainer.style.display = 'block'; // Hiện lại thumbnail
        document.getElementById('video-thumbnail').src = data.videoThumbnail;
        currentVideoUrl = data.videoUrl; // Lưu URL video hiện tại

        // Cập nhật text của dropdown
        selectedStainEl.textContent = stainName;
        
        // Cập nhật các bước làm sạch và những thứ cần thiết
        document.getElementById('cleaning-steps').innerHTML = data.cleaningSteps.map(step => `<li>${step}</li>`).join('');
        document.getElementById('what-you-need').innerHTML = data.whatYouNeed.map(item => `<li>${item}</li>`).join('');
    }

    // Sự kiện click nút Play
    videoPlayBtn.addEventListener('click', () => {
        thumbnailContainer.style.display = 'none'; // Ẩn thumbnail
        iframeContainer.innerHTML = ''; // Dọn dẹp trước khi chèn video mới

        let videoPlayer;
        if (currentVideoUrl.includes('youtube.com')) {
            // Tạo iframe cho Youtube
            videoPlayer = document.createElement('iframe');
            videoPlayer.setAttribute('src', currentVideoUrl + '?autoplay=1&modestbranding=1&rel=0');
            videoPlayer.setAttribute('frameborder', '0');
            videoPlayer.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
            videoPlayer.setAttribute('allowfullscreen', '');
        } else {
            // Tạo thẻ <video> cho file MP4
            videoPlayer = document.createElement('video');
            videoPlayer.setAttribute('src', currentVideoUrl);
            videoPlayer.setAttribute('controls', '');
            videoPlayer.setAttribute('autoplay', '');
        }
        videoPlayer.className = 'w-full h-full';
        iframeContainer.appendChild(videoPlayer);
    });

    // Sự kiện mở/đóng và chọn mục trong dropdown
    dropdownBtn.addEventListener('click', () => {
        stainOptionsContainer.classList.toggle('hidden');
        dropdownArrow.classList.toggle('rotate-180');
    });

    stainOptionsContainer.addEventListener('click', (e) => {
        e.preventDefault();
        if (e.target.tagName === 'A') {
            const selectedStain = e.target.dataset.stain;
            updateStainInfo(selectedStain);
            stainOptionsContainer.classList.add('hidden');
            dropdownArrow.classList.remove('rotate-180');
        }
    });
    
    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            stainOptionsContainer.classList.add('hidden');
            dropdownArrow.classList.remove('rotate-180');
        }
    });

    // Khởi tạo nội dung mặc định
    const defaultStain = Object.keys(stainData)[0];
    updateStainInfo(defaultStain);
});


// ================== Page Our Collections: Xử lí nội dung 3D và chọn vải ==================


import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';

// --- CÀI ĐẶT VÀ KHAI BÁO BIẾN ---

// 1. Mảng chứa tất cả tên file vải
const fabricFiles = [
    '0520.jpg', '0526.jpg', '0839.jpg', '11015.jpg', '11304.jpg', 
    '11311.jpg', '11312.jpg', '11316.jpg', '11500.jpg', '11602.jpg', 
    '11802.jpg', '11804.jpg', '12101.jpg', '12102.jpg', '12103.jpg', 
    '1315.jpg', '1317.jpg', '1320.jpg', '1324.jpg', '1327.jpg', 
    '1328.jpg', '1329.jpg', '1330.jpg', '1331.jpg', '1510.jpg', 
    '1513.jpg', '1702.jpg', '1706.jpg', '1710.jpg', '1712.jpg', 
    '1713.jpg', '1718.jpg', '1723.jpg', '1726.jpg', '1728.jpg', 
    '1732.jpg', '1743.jpg', '1753.jpg', '1904.jpg', '1905.jpg', 
    '1911.jpg', '1919.jpg', '1923.jpg', '1929.jpg', '213J.jpg', 
    '2662.jpg', '2663.jpg', '2664.jpg', '2665.jpg', '2666.jpg', 
    '2667.jpg', '2668.jpg', '2669.jpg', '2670.jpg', '2671.jpg', 
    '3274.jpg', '3715.jpg', '3717.jpg', '3816.jpg', '3817.jpg', 
    '3818.jpg', '3819.jpg', '3820.jpg', '3821.jpg', '3822.jpg', 
    '5401.jpg', '5402.jpg', '5403.jpg', '5404.jpg', '5405.jpg', 
    '5407.jpg', '5409.jpg', '5410.jpg', '5411.jpg', '5412.jpg', 
    '5413.jpg', '5414.jpg', '5415.jpg', '5420.jpg', '5426.jpg', 
    '5432.jpg'
];

// Cài đặt phân trang
const ITEMS_PER_PAGE = 12; // Hiển thị 10 vải mỗi trang
const totalPages = Math.ceil(fabricFiles.length / ITEMS_PER_PAGE);
const basePath = '/public/images/fabrics/';

// Biến để theo dõi trang hiện tại của mỗi palette
let sofaCurrentPage = 1;
let pillowCurrentPage = 1;

// Lấy các phần tử DOM
const ui = {
    sofa: {
        grid: document.querySelector('#sofa-palette .grid'),
        pageInfo: document.getElementById('sofa-page-info'),
        prevBtn: document.getElementById('sofa-prev-btn'),
        nextBtn: document.getElementById('sofa-next-btn')
    },
    pillow: {
        grid: document.querySelector('#pillow-palette .grid'),
        pageInfo: document.getElementById('pillow-page-info'),
        prevBtn: document.getElementById('pillow-prev-btn'),
        nextBtn: document.getElementById('pillow-next-btn')
    }
};

// --- HÀM RENDER VÀ GÁN SỰ KIỆN ---

/**
 * Hàm render các mẫu vải cho một trang cụ thể
 * @param {object} paletteUI - Đối tượng UI cho palette (ví dụ: ui.sofa)
 * @param {number} page - Số trang cần render
 */
function renderPalettePage(paletteUI, page) {
    if (!paletteUI.grid) return;

    // Xóa nội dung cũ
    paletteUI.grid.innerHTML = '';
    
    // Tính toán các item cho trang này
    const startIndex = (page - 1) * ITEMS_PER_PAGE;
    const endIndex = startIndex + ITEMS_PER_PAGE;
    const pageItems = fabricFiles.slice(startIndex, endIndex);

    // Tạo chuỗi HTML cho các item của trang
    let pageHTML = '';
    pageItems.forEach(fileName => {
        const texturePath = basePath + fileName;
        pageHTML += `
            <div class="w-10 h-10 rounded-full cursor-pointer border-2 border-gray-100 bg-cover bg-center transition-transform duration-200 hover:scale-110 hover:shadow-lg" 
                 data-texture="${texturePath}" 
                 style="background-image: url(${texturePath});">
            </div>
        `;
    });
    
    // Đổ HTML vào grid
    paletteUI.grid.innerHTML = pageHTML;

    // Cập nhật thông tin trang và trạng thái nút
    paletteUI.pageInfo.textContent = `Page ${page} of ${totalPages}`;
    paletteUI.prevBtn.disabled = page === 1;
    paletteUI.nextBtn.disabled = page === totalPages;
    paletteUI.prevBtn.style.cursor = (page === 1) ? 'not-allowed' : 'pointer';
    paletteUI.nextBtn.style.cursor = (page === totalPages) ? 'not-allowed' : 'pointer';
}

// Gán sự kiện cho các nút của Sofa Palette
ui.sofa.nextBtn.addEventListener('click', () => {
    if (sofaCurrentPage < totalPages) {
        sofaCurrentPage++;
        renderPalettePage(ui.sofa, sofaCurrentPage);
    }
});

ui.sofa.prevBtn.addEventListener('click', () => {
    if (sofaCurrentPage > 1) {
        sofaCurrentPage--;
        renderPalettePage(ui.sofa, sofaCurrentPage);
    }
});

// Gán sự kiện cho các nút của Pillow Palette
ui.pillow.nextBtn.addEventListener('click', () => {
    if (pillowCurrentPage < totalPages) {
        pillowCurrentPage++;
        renderPalettePage(ui.pillow, pillowCurrentPage);
    }
});

ui.pillow.prevBtn.addEventListener('click', () => {
    if (pillowCurrentPage > 1) {
        pillowCurrentPage--;
        renderPalettePage(ui.pillow, pillowCurrentPage);
    }
});


// --- KHỞI CHẠY LẦN ĐẦU ---
// Render trang đầu tiên cho cả hai palette khi tải trang
renderPalettePage(ui.sofa, 1);
renderPalettePage(ui.pillow, 1);

// Lấy container chính để làm cơ sở cho mọi thứ
const container = document.getElementById('sofa-customizer-container');

// --- PHẦN 1: LOGIC 3D (ĐÃ CẬP NHẬT) ---
let scene, camera, renderer, controls;
const textureLoader = new THREE.TextureLoader();
const raycaster = new THREE.Raycaster();
const mouse = new THREE.Vector2();

let sofaParts = [];
let pillowParts = [];
let activeSelection = null;

function init3D() {
    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xdde2e8);
    
    // Lấy canvas từ bên trong container
    const canvas = container.querySelector('#bg-canvas');
    
    // Cập nhật camera aspect ratio dựa trên kích thước canvas
    camera = new THREE.PerspectiveCamera(50, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);
    camera.position.set(-100, 120, 100);

    renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
    // Cập nhật kích thước renderer dựa trên kích thước canvas
    renderer.setSize(canvas.clientWidth, canvas.clientHeight, false);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.7);
    scene.add(ambientLight);
    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.9);
    directionalLight.position.set(5, 10, 7.5);
    scene.add(directionalLight);

    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.target.set(0, 0.5, 0);

    const loader = new GLTFLoader();
    loader.load('public/sofa_pillow.glb', function (gltf) {
        const model = gltf.scene;
        scene.add(model);
        const specificSofaNames = ['Material2040', 'Material2039', 'Material2038', 'Material2045', 'Material2046'];
        model.traverse(function (child) {
            if (child.isMesh) {
                child.material = child.material.clone();
                if (specificSofaNames.includes(child.name)) sofaParts.push(child);
                else if (child.name.startsWith('Object_8')) pillowParts.push(child);
            }
        });
    });

    // Thay vì window, resize observer theo dõi sự thay đổi kích thước của canvas
    new ResizeObserver(onCanvasResize).observe(canvas);
    canvas.addEventListener('click', onObjectClick3D, false);
    animate();
}

function animate() {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
}

// CẬP NHẬT: Hàm resize giờ dựa trên canvas
function onCanvasResize() {
    const canvas = renderer.domElement;
    camera.aspect = canvas.clientWidth / canvas.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(canvas.clientWidth, canvas.clientHeight, false);
}

// CẬP NHẬT: Tính toán tọa độ chuột dựa trên vị trí canvas
function onObjectClick3D(event) {
    const canvas = renderer.domElement;
    const rect = canvas.getBoundingClientRect(); // Lấy thông tin vị trí và kích thước của canvas
    
    mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
    mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
    
    raycaster.setFromCamera(mouse, camera);
    const intersects = raycaster.intersectObjects([...sofaParts, ...pillowParts]);

    if (intersects.length > 0) {
        const clickedObject = intersects[0].object;
        if (sofaParts.includes(clickedObject)) {
            activeSelection = 'sofa';
            setActive(sofaSelector, true);
            setActive(pillowSelector, false);
        } else if (pillowParts.includes(clickedObject)) {
            activeSelection = 'pillow';
            setActive(pillowSelector, true);
            setActive(sofaSelector, false);
        }
        updateHighlight3D();
    }
}

function updateHighlight3D() {
    [...sofaParts, ...pillowParts].forEach(part => part.material.emissive.set(0x000000));
}

function applyTextureToGroup(partsGroup, texturePath) {
        textureLoader.load(texturePath, function(loadedTexture) {
        loadedTexture.wrapS = THREE.RepeatWrapping;
        loadedTexture.wrapT = THREE.RepeatWrapping;
        loadedTexture.repeat.set(5, 5);
        loadedTexture.encoding = THREE.sRGBEncoding;
        partsGroup.forEach(child => {
            child.material.map = loadedTexture;
            child.material.color.set(0xffffff);
            child.material.needsUpdate = true;
        });
    });
}

// --- PHẦN 2: LOGIC UI (Không đổi nhiều) ---
const sofaSelector = container.querySelector('#sofa-selector');
const pillowSelector = container.querySelector('#pillow-selector');
const sofaSwatch = container.querySelector('#sofa-swatch');
const pillowSwatch = container.querySelector('#pillow-swatch');
const sofaPalette = container.querySelector('#sofa-palette');
const pillowPalette = container.querySelector('#pillow-palette');

function setActive(selector, isActive) {
    selector.classList.toggle('border-yellow-400', isActive);
    selector.classList.toggle('border-transparent', !isActive);
}

sofaSelector.addEventListener('click', function(event) {
    event.stopPropagation();
    const isPaletteHidden = sofaPalette.classList.contains('hidden');
    pillowPalette.classList.add('hidden'); setActive(pillowSelector, false);
    sofaPalette.classList.toggle('hidden'); setActive(sofaSelector, isPaletteHidden);
    activeSelection = isPaletteHidden ? 'sofa' : null;
    updateHighlight3D();
});

pillowSelector.addEventListener('click', function(event) {
    event.stopPropagation();
    const isPaletteHidden = pillowPalette.classList.contains('hidden');
    sofaPalette.classList.add('hidden'); setActive(sofaSelector, false);
    pillowPalette.classList.toggle('hidden'); setActive(pillowSelector, isPaletteHidden);
    activeSelection = isPaletteHidden ? 'pillow' : null;
    updateHighlight3D();
});

function handleTexturePicking(palette, swatch) {
    palette.addEventListener('click', function(event) {
        const clickedItem = event.target.closest('[data-texture]');
        if (clickedItem) {
            const selectedTexturePath = clickedItem.dataset.texture;
            swatch.style.backgroundImage = `url(${selectedTexturePath})`;
            palette.classList.add('hidden');
            if (palette.id === 'sofa-palette') applyTextureToGroup(sofaParts, selectedTexturePath);
            else if (palette.id === 'pillow-palette') applyTextureToGroup(pillowParts, selectedTexturePath);
        }
    });
}

handleTexturePicking(sofaPalette, sofaSwatch);
handleTexturePicking(pillowPalette, pillowSwatch);

window.addEventListener('click', function(event) {
    if (!event.target.closest('#sofa-customizer-container')) {
            sofaPalette.classList.add('hidden'); pillowPalette.classList.add('hidden');
            setActive(sofaSelector, false); setActive(pillowSelector, false);
            activeSelection = null; updateHighlight3D();
    }
});

// --- KHỞI ĐỘNG ---
init3D();
