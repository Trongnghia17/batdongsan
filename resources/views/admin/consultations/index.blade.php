@extends('admin.layout')

@section('title', 'Quản lý Tư vấn Khách hàng')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-chat-dots"></i> Quản lý Tư vấn Khách hàng</h2>
</div>

<!-- Filter Form -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.consultations.index') }}" class="row g-3">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Tìm kiếm theo tên, SĐT, email..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="status" class="form-select">
                    <option value="">Tất cả trạng thái</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                    <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Đã nộp đủ tiền</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Đã hủy</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-search"></i> Lọc
                </button>
            </div>
            <div class="col-md-2">
                <a href="{{ route('admin.consultations.index') }}" class="btn btn-secondary w-100">
                    <i class="bi bi-arrow-clockwise"></i> Đặt lại
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card bg-warning text-white">
            <div class="card-body">
                <h6>Chờ xử lý</h6>
                <h3>{{ \App\Models\Consultation::where('status', 'pending')->count() }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info text-white">
            <div class="card-body">
                <h6>Đang xử lý</h6>
                <h3>{{ \App\Models\Consultation::where('status', 'processing')->count() }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h6>Đã nộp đủ tiền</h6>
                <h3>{{ \App\Models\Consultation::where('status', 'completed')->count() }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-secondary text-white">
            <div class="card-body">
                <h6>Tổng số</h6>
                <h3>{{ \App\Models\Consultation::count() }}</h3>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
<div class="card">
    <div class="card-body">
        @if($consultations->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Tiêu đề</th>
                            <th>Trạng thái</th>
                            <th>Ngày đăng ký</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consultations as $consultation)
                        <tr>
                            <td>{{ ($consultations->currentPage() - 1) * $consultations->perPage() + $loop->iteration }}</td>
                            <td>{{ $consultation->name }}</td>
                            <td>
                                <a href="tel:{{ $consultation->phone }}">
                                    <i class="bi bi-telephone"></i> {{ $consultation->phone }}
                                </a>
                            </td>
                            <td>
                                @if($consultation->email)
                                    <a href="mailto:{{ $consultation->email }}">{{ $consultation->email }}</a>
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $consultation->subject ?: '-' }}</td>
                            <td>
                                <span class="badge bg-{{ $consultation->status_badge }}">
                                    {{ $consultation->status_text }}
                                </span>
                            </td>
                            <td>{{ $consultation->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.consultations.show', $consultation->id) }}" class="btn btn-info" title="Xem chi tiết">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.consultations.edit', $consultation->id) }}" class="btn btn-warning" title="Cập nhật">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.consultations.destroy', $consultation->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc muốn xóa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Xóa">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Hiển thị {{ $consultations->firstItem() ?? 0 }} - {{ $consultations->lastItem() ?? 0 }} 
                    trong tổng số {{ $consultations->total() }} kết quả
                </div>
                <div>
                    {{ $consultations->appends(request()->query())->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @else
            <div class="alert alert-info">
                <i class="bi bi-info-circle"></i> Chưa có yêu cầu tư vấn nào.
            </div>
        @endif
    </div>
</div>
@endsection
