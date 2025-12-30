@extends('admin.layout')

@section('title', 'Chi tiết Yêu cầu Tư vấn')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-info-circle"></i> Chi tiết Yêu cầu Tư vấn #{{ $consultation->id }}</h2>
    <a href="{{ route('admin.consultations.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Quay lại
    </a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="bi bi-person-circle"></i> Thông tin khách hàng</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="200">Họ và tên:</th>
                        <td>{{ $consultation->name }}</td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td>
                            <a href="tel:{{ $consultation->phone }}">
                                <i class="bi bi-telephone"></i> {{ $consultation->phone }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>
                            @if($consultation->email)
                                <a href="mailto:{{ $consultation->email }}">
                                    <i class="bi bi-envelope"></i> {{ $consultation->email }}
                                </a>
                            @else
                                <span class="text-muted">Không có</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Tiêu đề:</th>
                        <td>{{ $consultation->subject ?: 'Không có' }}</td>
                    </tr>
                    <tr>
                        <th>Ngày đăng ký:</th>
                        <td>{{ $consultation->created_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>Cập nhật lần cuối:</th>
                        <td>{{ $consultation->updated_at->format('d/m/Y H:i:s') }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="bi bi-chat-text"></i> Nhu cầu tư vấn</h5>
            </div>
            <div class="card-body">
                @if($consultation->message)
                    <p class="mb-0">{{ $consultation->message }}</p>
                @else
                    <p class="text-muted mb-0">Khách hàng chưa để lại lời nhắn</p>
                @endif
            </div>
        </div>

        @if($consultation->admin_note)
        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-sticky"></i> Ghi chú của Admin</h5>
            </div>
            <div class="card-body">
                <p class="mb-0">{{ $consultation->admin_note }}</p>
            </div>
        </div>
        @endif
    </div>

    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5><i class="bi bi-toggle-on"></i> Trạng thái</h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <span class="badge bg-{{ $consultation->status_badge }} fs-5 p-3">
                        {{ $consultation->status_text }}
                    </span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5><i class="bi bi-tools"></i> Hành động</h5>
            </div>
            <div class="card-body d-grid gap-2">
                <a href="{{ route('admin.consultations.edit', $consultation->id) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Cập nhật trạng thái
                </a>
                
                <a href="tel:{{ $consultation->phone }}" class="btn btn-success">
                    <i class="bi bi-telephone"></i> Gọi điện
                </a>
                
                @if($consultation->email)
                <a href="mailto:{{ $consultation->email }}" class="btn btn-info">
                    <i class="bi bi-envelope"></i> Gửi Email
                </a>
                @endif

                <hr>

                <form action="{{ route('admin.consultations.destroy', $consultation->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa yêu cầu này?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="bi bi-trash"></i> Xóa yêu cầu
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
