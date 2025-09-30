# Laravel + Vite Starter

Dự án này được xây dựng bằng **Laravel** (backend, API, Blade) kết hợp với **Vite** (bundler cho frontend, CSS/JS).
Mục tiêu: clone repo về và chạy ngay được trong môi trường local.

---

## Yêu cầu hệ thống

Trước khi chạy project, hãy đảm bảo máy của bạn có:

* **PHP** >= 8.1
* **Composer** >= 2.x
* **Node.js** >= 18.x
* **NPM** hoặc **Yarn**
* **Git** để clone repo

---

## Hướng dẫn cài đặt

### 1. Clone project

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2. Cài đặt PHP packages

```bash
composer install
```

### 3. Cài đặt Node packages

```bash
npm install
# hoặc
yarn install
```

### 4. Tạo file môi trường

Sao chép file `.env.example` thành `.env`:

```bash
cp .env.example .env
```

### 5. Generate key cho app

```bash
php artisan key:generate
```

---

## Chạy dự án

### 1. Chạy server Laravel

```bash
php artisan serve
```

Server mặc định chạy tại: `http://127.0.0.1:8000`

### 2. Chạy Vite dev server

Ở một terminal khác:

```bash
npm run dev
```

hoặc nếu muốn build production:

```bash
npm run build
```

---

## Scripts hữu ích

* `php artisan serve` → chạy Laravel backend
* `npm run dev` → chạy Vite dev server với HMR (hot reload)
* `npm run build` → build assets production
* `php artisan migrate:fresh --seed` → reset và seed lại database

---

## Troubleshooting

* **Lỗi quyền truy cập storage/framework/cache**
  Chạy:

  ```bash
  php artisan storage:link
  chmod -R 775 storage bootstrap/cache
  ```

* **Node version mismatch**
  Sử dụng [nvm](https://github.com/nvm-sh/nvm) để cài đúng version Node.

* **Không load được CSS/JS**
  Kiểm tra đã chạy `npm run dev` chưa, hoặc xóa cache:

  ```bash
  php artisan optimize:clear
  ```

---