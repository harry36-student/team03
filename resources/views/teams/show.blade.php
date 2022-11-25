@extends('app')

@section('title', '顯示特定球隊')

@section('cpbl_theme', '您所選取的球隊資料')

@section('cpbl_contents')
球隊編號：{{ $teams->id}}<br/>
球隊名字：{{ $teams->team}}<br/>
球隊歷史：{{ $teams->history }}<br/>
球隊領隊：{{ $teams->leader }}<br/>
球隊總教練:{{$teams->coach}}<br/>
球隊主場：{{ $teams->home }}<br/>


<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    {{ $teams->name}}所有球員
</div>
<table>
    <tr>
        <th>球員編號</th>
        <th>姓名</th>
        <th>背號</th>
        <th>站位</th>
        <th>投打習慣</th>
        <th>身高</th>
        <th>體重</th>
        <th>國籍</th>
        <th>選秀順位</th>
    </tr>
    @foreach($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->number }}</td>
            <td>{{ $player->location }}</td>
            <td>{{ $player->habit }}</td>
            <td>{{ $player->height }}</td>
            <td>{{ $player->weight }}</td>
            <td>{{ $player->nation}}</td>
            <td>{{ $player->rank }}</td>
        </tr>
@endforeach
</table>

@endsection