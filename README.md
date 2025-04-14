Các chức năng chính:
a) Quản lý nhân viên:
Thêm nhân viên mới (them-nhan-vien.php)
Sửa thông tin nhân viên (sua-nhan-vien.php)
Xem danh sách nhân viên (danh-sach-nhan-vien.php)
Xem chi tiết nhân viên (thong-tin-nhan-vien.php)
Export danh sách nhân viên (export-nhan-vien.php)
b) Quản lý phòng ban và chức vụ:
Quản lý phòng ban (phong-ban.php, sua-phong-ban.php)
Quản lý chức vụ (chuc-vu.php, sua-chuc-vu.php)
Quản lý loại nhân viên (loai-nhan-vien.php, sua-loai-nhan-vien.php)
c) Quản lý trình độ và bằng cấp:
Quản lý trình độ (trinh-do.php, sua-trinh-do.php)
Quản lý chuyên môn (chuyen-mon.php, sua-chuyen-mon.php)
Quản lý bằng cấp (bang-cap.php, sua-bang-cap.php)
d) Quản lý công tác:
Quản lý công tác (cong-tac.php, sua-cong-tac.php)
Danh sách công tác (danh-sach-cong-tac.php)
e) Quản lý khen thưởng và kỷ luật:
Quản lý khen thưởng (khen-thuong.php, sua-khen-thuong.php)
Quản lý kỷ luật (ky-luat.php, sua-ky-luat.php)
Quản lý loại khen thưởng (sua-loai-khen-thuong.php)
Quản lý loại kỷ luật (sua-loai-ky-luat.php)
f) Quản lý lương:
Bảng lương (bang-luong.php)
Chi tiết lương (chi-tiet-luong.php)
Tính lương (tinh-luong.php)
Export bảng lương (export-bang-luong.php)
g) Quản lý tài khoản:
Đăng nhập (dang-nhap.php)
Đăng xuất (dang-xuat.php)
Đổi mật khẩu (doi-mat-khau.php)
Tạo tài khoản (tao-tai-khoan.php)
Sửa tài khoản (sua-tai-khoan.php)
Danh sách tài khoản (ds-tai-khoan.php)
Thông tin tài khoản (thong-tin-tai-khoan.php)
h) Quản lý nhóm:
Tạo nhóm (tao-nhom.php)
Danh sách nhóm (danh-sach-nhom.php)
Chi tiết nhóm (chi-tiet-nhom.php)
Tính năng bổ sung:
Hệ thống mailbox (thư mục mailbox)
Các ví dụ mẫu (thư mục examples)
Các lớp xử lý (thư mục Classes)
Hệ thống layout (thư mục layout)
Tính năng xuất báo cáo:
Xuất bảng lương ra Excel (export-bang-luong.php)
Xuất danh sách nhân viên ra Excel (export-nhan-vien.php)
Bảo mật:
Có hệ thống đăng nhập/đăng xuất
Có chức năng đổi mật khẩu
Có phân quyền tài khoản
Giao diện:
Sử dụng các template UI
Có hệ thống form thống nhất
Có hệ thống bảng dữ liệu
Có tích hợp biểu đồ thống kê
Đây là một hệ thống quản lý nhân sự khá đầy đủ với các chức năng cơ bản và nâng cao. Hệ thống được phát triển theo hướng module hóa, mỗi chức năng được tách riêng thành các file riêng biệt, giúp dễ dàng bảo trì và mở rộng.


Tài khoản:
| Tên | Email | Mật khẩu |
|-----|-------|----------|
| Thắng | adminka@gmail.com | 123 |
| Phúc Ngu | adminphra@gmail.com | 123 |
| Triết | admintriet@gmail.com | 123 |
| Hoàng | adminhoang@gmail.com | 123 |
| Tấn | admintan@gmail.com | 123 |


link bảng Jira(Chưa xong): https://docs.google.com/spreadsheets/d/1zel7veGQ82f8qCYTdfrCGo-5nyOUqyccxSqt_5KWX6s/edit?usp=sharing


======
# QUY TRÌNH SỬ DỤNG GIT + JIRA THEO CHUẨN GIT FLOW (FULL CÁC STEP)


# I. KHỞI TẠO / CLONE DỰ ÁN
## PO khởi tạo dự án:
```
git init
git remote add origin https://github.com/ltiuKa/T-E_HumanResourceManagement_HRM.git
git add .
git commit -m "Initial commit"
git push -u origin main
```

## Member clone về máy:
```
git clone https://github.com/ltiuKa/T-E_HumanResourceManagement_HRM.git
cd <ten-folder-du-an>
git checkout develop
```
# II. CẤU HÌNH GIT (CHỈ CẦN 1 LẦN)
```
git config --global user.name "Tên của bạn 4 số cuối mssv"
git config --global user.email "email@example.com"

 # kiểm tra thông tin
echo "Name: $(git config user.name)"
echo "Email: $(git config user.email)"
echo "Remote: $(git remote get-url origin)"
```

# III. QUY TRÌNH GIT FLOW (PO + MEMBER)
## PO hoặc Leader thực hiện:
```
git checkout -b develop
git push origin develop
```
- develop là nhánh gốc cho toàn bộ tính năng.

## Bước 1: Tạo nhánh mới cho mỗi task
```
git checkout develop
git pull origin develop
git checkout -b feature/SCRUM-3 Giao diện đăng nhập
```

- Kiểm tra tất cả nhánh cả local lẫn remote
```
git branch
git fetch --all # kiểm tra xem có nhanh nào ms chưa pull về
```

### 📘 Gợi ý tên branch:
```
feature/ABC-123-giao-dien-them
bugfix/ABC-201-fix-xuat-excel
hotfix/ABC-999-sua-gap-luong
```

## 👨‍💻 Bước 2: Làm việc và commit
```
git add .
git commit -m "SCRUM-3 Giao diện đăng nhập
#comment Đã hoàn thành phần giao diện
#time 3h
#in-progress"
```
- Jira sẽ tự nhận diện commit nếu tích hợp với GitHub

### ⛓ Có thể dùng nhiều commit nhỏ, hoặc gộp lại sau bằng:
```
git commit --amend
 <!-- hoặc dùng: git rebase -i HEAD~2 -->
 ```


## 🚀 Bước 3: Push code lên GitHub
```
git push origin feature/SCRUM-3 Giao diện đăng nhập
```
- Sau đó vào GitHub → Tạo Pull Request về develop
- Reviewer: Ka hoặc Triết
- Reviewer sẽ comment, suggest change hoặc approve ✅


## 🔁 Bước 4: Nếu bị conflict khi pull về main - Fix conflict (nếu có)
```
git fetch origin
git rebase origin/develop

- Nếu conflict xảy ra:
- Sửa xong file → add lại
git add .
git rebase --continue
```
- Nếu bạn từng sửa commit thì qua bước 5

## 🔂 Bước 5: Force push khi cần
- Chỉ dùng khi:
+ Đã --amend commit
+ Hoặc chỉnh commit qua rebase
```
git commit --amend
git push origin feature/... --force

// ví dụ:
git push origin feature/SCRUM-3 Giao diện đăng nhập --force
```
- ⚠️ Lưu ý: Không dùng --force trên main hoặc khi chưa thông báo với team!


## 🔀 Bước 6: Tạo Pull Request trên GitHub (như bước 3 nếu bị conflict )
- Vào GitHub → chọn branch → Compare & pull request
- Gắn label: needs review, testing, gắn Jira issue ID
- Đặt reviewer (thường là Ka hoặc Triết)


## ✅ Bước 7: Merge sau khi review
- PO hoặc Leader (Ka) sẽ:
```
git checkout develop
git pull origin develop
git merge feature/SCRUM-3 Giao diện đăng nhập
git push origin develop
```

## 🧹 Bước 8: Dọn dẹp branch sau khi merge
```
git branch -d feature/SCRUM-3 Giao diện đăng nhập
git push origin --delete feature/SCRUM-3 Giao diện đăng nhập
```

##  STEP 7 – Chuẩn bị phát hành (release)
- Khi gần xong sprint / milestone, tạo nhánh release:
```
git checkout develop
git checkout -b release/v1.0.0
git push origin release/v1.0.0
```
→ Fix bug nhỏ, cập nhật changelog, document ở đây
→ Sau khi test OK → merge về:
```
git checkout main
git merge release/v1.0.0
git push origin main

git checkout develop
git merge release/v1.0.0
git push origin develop
```
- Rồi xóa nhánh release/v1.0.0 nếu xong!

## Lệnh tóm tắt (nhớ kỹ):
- Tạo nhánh mới
git checkout -b feature/ABC-001-mo-ta-task

- Commit chuẩn
git commit -m "ABC-001: mô tả ngắn\n#comment mô tả chi tiết\n#done"

- Push lên GitHub
git push origin feature/ABC-001-mo-ta-task

- Rebase develop nếu bị conflict
git fetch origin
git rebase origin/develop

- Force push nếu đã sửa lịch sử commit
git push origin feature/... --force

- Merge về develop
git checkout develop
git pull origin develop
git merge feature/...
git push origin develop

## Tổng kết các nhánh chính:
| Nhánh | Mục đích | Ai dùng |
|-------|----------|---------|
| main | Sản phẩm đã phát hành | Chỉ PO merge |
| develop | Mã chính để phát triển | Toàn team dùng |
| feature/* | Tính năng, từng task Jira | Dev member |
| release/* | Chuẩn bị bản phát hành | PO + Tester |
| hotfix/* | Sửa lỗi gấp sau release | PO + Dev |

- 📌 Template branch name gợi ý:

feature/ABC-321-sua-loi-export
bugfix/ABC-200-loi-form
hotfix/v1.0.1
release/v1.1.0

- ví duh:
ABC-200: Fix lỗi validate form
#comment Form báo lỗi khi bỏ trống input
#time 1.5h
#done




# IV. LIÊN KẾT VỚI JIRA (SMART COMMIT)
- Kết nối Jira + GitHub
Yêu cầu: Admin project Jira cài app: Jira GitHub Integration
Jira sẽ tự:
Nhận commit liên kết mã Jira (ABC-123)
Ghi thời gian làm việc (#time)
Đánh dấu task Done / In Progress / Reopen
Hiển thị Pull Request liên kết task

Mẫu Commit kết hợp Jira:
```
git commit -m "ABC-123: Thêm API tính lương
#comment Xong phần backend, cần test thêm
#time 2h
#done"
```

- Nội dung:
| Tag | Ý nghĩa |
|-----|---------|
| #comment | Ghi chú vào Jira task |
| #time | Ghi nhận thời gian làm việc |
| #done | Tự động chuyển trạng thái sang Done |
| #in-progress | Tự đánh dấu đang thực hiện |
| #review | Chờ review code |
| #reopen | Mở lại task đã Done |


# V. PHÂN CÔNG THEO VAI TRÒ
| Vai trò | Trách nhiệm | Công cụ / thao tác |
|---------|-------------|-------------------|
| Ka (PO/Leader) | Quản lý Jira board, merge PR, review code | Tạo Epic, Sprint, assign task, pull về main |
| Phúc (FE Dev) | Giao diện, JS, AJAX | Commit UI, push PR frontend |
| Hoàng (BE Dev) | PHP, DB xử lý chính | Commit các task backend |
| Triết (Tester/QA) | Review PR, test các tính năng | Comment PR, test UI/UX, ghi bug vào Jira |
| Tấn (AJAX/Support) | Hỗ trợ kết nối frontend/backend | Setup API fetch, xử lý bất đồng bộ |

# VI. QUY TRÌNH GIỮA GIT + JIRA
- Ka tạo Sprint + gán task Jira cho thành viên
- Mỗi member tạo branch theo mã Jira task
- Commit code kèm mã Jira + tag trạng thái
- Push code → tạo PR → tag reviewer (Triết / Ka)
- Review xong → Merge → Close Jira issue

👉 Tất cả hành động (commit, review, merge) đều sẽ được Jira ghi lại tự động khi Jira kết nối với GitHub!

## ✅ Checklist dev mỗi ngày:
- Pull code mới nhất từ main
- Làm task được gán trong Jira
- Commit đúng cú pháp + đẩy PR
- Comment PR và tag người review
- Xoá branch khi xong
- Update trạng thái task trên Jira

mysql://q6eozefo5y6pr4so:l5bx0kfzdy2wsa0d@p2d0untihotgr5f6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/usrwvkzhhhfj2drg