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
                <td>{{ $report->re_name }}</td>
                <td>{{ $report->re_time }}</td>
                <td>
                    @if ($report->re_status == 1)
                        Đang chờ
                    @elseif($report->re_status == 2)
                        Đã sử dụng
                    @elseif($report->re_status == 0)
                        Bỏ qua
                    @endif
                </td>
                <td>{{ $report->re_device }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
