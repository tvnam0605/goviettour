import os
import re

# # Thư mục chứa file
# folder_path = "path/to/your/folder"

# # Danh sách file ban đầu
# file_list = [
#     "VUON_QUOC_GIA_MUI_CA_MAU-BAI_BOI__2_1732933787.jpg",
#     "MIEN_BAC_4N3D_238746.jpg",
#     "PHU_QUOC_5N4D_827364.jpg"
# ]
for i in os.listdir(r'public\admin\assets\images\gallery-tours'):
    print (i)
# # Xử lý đổi tên file
# for old_name in file_list:
#     # Cắt bỏ phần _xxxx (số hoặc chữ cái cuối)
#     new_name = re.sub(r'_\d+\.(jpg|png|jpeg)$', r'.\1', old_name)

#     # Đổi tên file trong thư mục
#     old_path = os.path.join(folder_path, old_name)
#     new_path = os.path.join(folder_path, new_name)

#     try:
#         os.rename(old_path, new_path)
#         print(f"✅ Đã đổi tên: {old_name} -> {new_name}")
#     except FileNotFoundError:
#         print(f"❌ Không tìm thấy file: {old_name}")
#     except Exception as e:
#         print(f"❌ Lỗi: {e}")
