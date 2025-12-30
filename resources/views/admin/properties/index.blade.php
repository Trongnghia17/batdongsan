@extends('admin.layout')

@section('title', 'Quản lý Bất Động Sản')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Quản lý Bất Động Sản</h2>
    <a href="{{ route('admin.properties.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Thêm BĐS mới
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Giá</th>
                        <th>Vị trí</th>
                        <th>Diện tích</th>
                        <th>Nổi bật</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>
                            @if($property->image)
                                @if(Str::startsWith($property->image, 'properties/'))
                                    <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/' . $property->image) }}" alt="{{ $property->title }}" style="width: 60px; height: 60px; object-fit: cover;">
                                @endif
                            @else
                                <span class="text-muted">Không có ảnh</span>
                            @endif
                        </td>
                        <td>{{ Str::limit($property->title, 30) }}</td>
                        <td>{{ number_format($property->price, 0, ',', '.') }} VNĐ</td>
                        <td>{{ $property->city }}, {{ $property->country }}</td>
                        <td>{{ number_format($property->area, 0, ',', '.') }} m²</td>
                        <td>
                            @if($property->is_featured)
                                <span class="badge bg-success">Có</span>
                            @else
                                <span class="badge bg-secondary">Không</span>
                            @endif
                        </td>
                        <td>
                            @if($property->is_active)
                                <span class="badge bg-success">Hoạt động</span>
                            @else
                                <span class="badge bg-danger">Tạm dừng</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.properties.edit', $property) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.properties.destroy', $property) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center">Chưa có bất động sản nào</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            {{ $properties->links() }}
        </div>
    </div>
</div>
@endsection
