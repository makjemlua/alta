@php
$i = 1;
@endphp
<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên dịch vụ</th>
            <th>Thời gian cấp</th>
            <th>Trạng thái</th>
            <th>Nguồn cấp</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $report->num_name }}</td>
                <td>{{ $report->num_start_time }}</td>
                <td>
                    @if ($report->num_status == 1)
                        Đang chờ
                    @elseif($report->num_status == 0)
                        Đã sử dụng
                    @elseif($report->num_status == 3)
                        Bỏ qua
                    @endif
                </td>
                <td>{{ $report->num_device }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
