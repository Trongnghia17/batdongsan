@extends('admin.layout')

@section('title', 'Thêm Bất Động Sản Mới')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Thêm Bất Động Sản Mới</h2>
    <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Giá (VNĐ) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                   id="price" name="price" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="area" class="form-label">Diện tích (m²)</label>
                            <input type="number" step="0.01" class="form-control @error('area') is-invalid @enderror" 
                                   id="area" name="area" value="{{ old('area') }}">
                            @error('area')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" 
                               id="address" name="address" value="{{ old('address') }}" required>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Thành phố <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" 
                                   id="city" name="city" value="{{ old('city') }}" required>
                            @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="country" class="form-label">Tỉnh/Quốc gia <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror" 
                                   id="country" name="country" value="{{ old('country', 'Vietnam') }}" required>
                            @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="project_type" class="form-label">Loại dự án</label>
                            <select class="form-control @error('project_type') is-invalid @enderror" 
                                    id="project_type" name="project_type">
                                <option value="">-- Chọn loại dự án --</option>
                                <option value="Khu Dân Cư" {{ old('project_type') == 'Khu Dân Cư' ? 'selected' : '' }}>Khu Dân Cư</option>
                                <option value="Khu Đô Thị" {{ old('project_type') == 'Khu Đô Thị' ? 'selected' : '' }}>Khu Đô Thị</option>
                                <option value="Du lịch nghỉ dưỡng" {{ old('project_type') == 'Du lịch nghỉ dưỡng' ? 'selected' : '' }}>Du lịch nghỉ dưỡng</option>
                                <option value="Chung cư" {{ old('project_type') == 'Chung cư' ? 'selected' : '' }}>Chung cư</option>
                                <option value="Biệt thự" {{ old('project_type') == 'Biệt thự' ? 'selected' : '' }}>Biệt thự</option>
                            </select>
                            @error('project_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="total_products" class="form-label">Tổng số sản phẩm (căn)</label>
                            <input type="number" class="form-control @error('total_products') is-invalid @enderror" 
                                   id="total_products" name="total_products" value="{{ old('total_products') }}">
                            @error('total_products')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="delivery_time" class="form-label">Thời gian bàn giao</label>
                            <input type="text" class="form-control @error('delivery_time') is-invalid @enderror" 
                                   id="delivery_time" name="delivery_time" value="{{ old('delivery_time') }}" 
                                   placeholder="VD: Năm 2025, Quý 4/2025">
                            @error('delivery_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ownership_duration" class="form-label">Thời gian sở hữu</label>
                            <input type="text" class="form-control @error('ownership_duration') is-invalid @enderror" 
                                   id="ownership_duration" name="ownership_duration" value="{{ old('ownership_duration') }}" 
                                   placeholder="VD: Lâu dài, 50 năm">
                            @error('ownership_duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="facilities" class="form-label">Tiện ích</label>
                        <textarea class="form-control @error('facilities') is-invalid @enderror" 
                                  id="facilities" name="facilities" rows="3" 
                                  placeholder="Nhập các tiện ích, cách nhau bằng dấu chấm phẩy (;)">{{ old('facilities') }}</textarea>
                        <small class="text-muted">VD: Trường học; Trung tâm y tế; Công viên; Bể bơi</small>
                        @error('facilities')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="bedrooms" class="form-label">Số phòng ngủ</label>
                            <input type="number" class="form-control @error('bedrooms') is-invalid @enderror" 
                                   id="bedrooms" name="bedrooms" value="{{ old('bedrooms', 0) }}">
                            <small class="text-muted">Để 0 nếu không áp dụng</small>
                            @error('bedrooms')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="bathrooms" class="form-label">Số phòng tắm</label>
                            <input type="number" class="form-control @error('bathrooms') is-invalid @enderror" 
                                   id="bathrooms" name="bathrooms" value="{{ old('bathrooms', 0) }}">
                            <small class="text-muted">Để 0 nếu không áp dụng</small>
                            @error('bathrooms')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*" onchange="previewImage(event)">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="mt-2">
                            <img id="preview" src="" style="max-width: 100%; display: none;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_featured" 
                                   name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                Hiển thị nổi bật
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" 
                                   name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Kích hoạt
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Lưu
                </button>
                <a href="{{ route('admin.properties.index') }}" class="btn btn-secondary">Hủy</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endsection
