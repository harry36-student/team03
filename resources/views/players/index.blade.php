@extends('app')

@section('title', 'CPBL 球員')

@section('cpbl_theme', 'CPBL 球員')

@section('cpbl_contents')

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('players.create') }} ">新增球員</a>
        <a href="{{ route('players.index') }} ">所有球員</a>
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
        <th>隊伍ID</th>
        <th>創建時間</th>
        <th>更新時間</th>
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
                <td>{{ $player->nation }}</td>
                <td>{{ $player->rank }}</td>
                <td>{{ $player->teamid }}</td>
                <td><a href="{{ route('players.show', ['id'=>$player->id]) }}">顯示</a></td>
                <td><a href="{{ route('players.edit', ['id'=>$player->id]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/players/delete', ['id' => $player->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
