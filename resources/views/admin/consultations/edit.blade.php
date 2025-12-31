@extends('admin.layout')

@section('title', 'Cập nhật Yêu cầu Tư vấn')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-pencil"></i> Cập nhật Yêu cầu Tư vấn #{{ $consultation->id }}</h2>
    <a href="{{ route('admin.consultations.show', $consultation->id) }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.consultations.update', $consultation->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <h5>Thông tin khách hàng</h5>
                        <table class="table table-borderless">
                            <tr>
                                <th width="200">Họ và tên:</th>
                                <td>{{ $consultation->name }}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại:</th>
                                <td>{{ $consultation->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $consultation->email ?: 'Không có' }}</td>
                            </tr>
                            <tr>
                                <th>Tiêu đề:</th>
                                <td>{{ $consultation->subject ?: 'Không có' }}</td>
                            </tr>
                        </table>

                        @if($consultation->message)
                        <div class="alert alert-info">
                            <strong>Nhu cầu tư vấn:</strong><br>
                            {{ $consultation->message }}
                        </div>
                        @endif
                    </div>

                    <hr>

                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                            <option value="pending" {{ $consultation->status == 'pending' ? 'selected' : '' }}>
                                Chờ xử lý
                            </option>
                            <option value="processing" {{ $consultation->status == 'processing' ? 'selected' : '' }}>
                                Đang xử lý
                            </option>
                            <option value="completed" {{ $consultation->status == 'completed' ? 'selected' : '' }}>
                                Đã nộp đủ tiền
                            </option>
                            <option value="cancelled" {{ $consultation->status == 'cancelled' ? 'selected' : '' }}>
                                Đã hủy
                            </option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="admin_note" class="form-label">Ghi chú của Admin</label>
                        <textarea name="admin_note" id="admin_note" rows="5" class="form-control @error('admin_note') is-invalid @enderror" placeholder="Nhập ghi chú về quá trình xử lý...">{{ old('admin_note', $consultation->admin_note) }}</textarea>
                        @error('admin_note')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Ghi chú này chỉ dành cho nội bộ admin, khách hàng sẽ không nhìn thấy.</small>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Cập nhật
                        </button>
                        <a href="{{ route('admin.consultations.show', $consultation->id) }}" class="btn btn-secondary">
                            Hủy
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-info-circle"></i> Thông tin bổ sung</h5>
            </div>
            <div class="card-body">
                <p><strong>Ngày đăng ký:</strong><br>
                {{ $consultation->created_at->format('d/m/Y H:i:s') }}</p>
                
                <p><strong>Cập nhật lần cuối:</strong><br>
                {{ $consultation->updated_at->format('d/m/Y H:i:s') }}</p>

                <p><strong>Trạng thái hiện tại:</strong><br>
                <span class="badge bg-{{ $consultation->status_badge }}">
                    {{ $consultation->status_text }}
                </span></p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0"><i class="bi bi-lightbulb"></i> Hướng dẫn</h5>
            </div>
            <div class="card-body">
                <ul class="mb-0">
                    <li><strong>Chờ xử lý:</strong> Yêu cầu mới, chưa liên hệ</li>
                    <li><strong>Đang xử lý:</strong> Đã liên hệ, đang tư vấn</li>
                    <li><strong>Đã nộp đủ tiền:</strong> Khách hàng đã hoàn tất thanh toán</li>
                    <li><strong>Đã hủy:</strong> Khách không có nhu cầu nữa</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
