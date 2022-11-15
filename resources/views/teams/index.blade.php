@extends('app')

@section('title', 'CPBL 球隊')

@section('cpbl_theme', 'CPBL 球隊')

@section('cpbl_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('teams.create') }} ">新增球隊</a>
        <a href="{{ route('teams.index') }} ">所有球隊</a>
    </div>
    <table>
        <tr>
        <th>球隊編號</th>
        <th>球隊</th>
        <th>歷史</th>
        <th>領隊</th>
        <th>總教練</th>
        <th>主球場</th>
        <th>創建時間</th>
        <th>更新時間</th>
        </tr>
        @foreach($teams as $team)
        
        <tr style="color:blue;">
            <td>{{ $team->id }}</td>
            <td>{{ $team->team }}</td>
            <td>{{ $team->history }}</td>
            <td>{{ $team->leader }}</td>
            <td>{{ $team->coach }}</td>
            <td>{{ $team->home }}</td>
            <td><a href="{{ route('teams.show', ['id' => $team->id]) }}">顯示</a></td>
            <td><a href="{{ route('teams.edit', ['id' => $team->id]) }}">修改</a></td>
                <td>
                    <form action="{{ url('/teams/delete', ['id' => $team->id]) }}" method="post">
                            <input class="btn btn-default" type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                     </form>
                </td>
        </tr>
           
        @endforeach
    </table>
@endsection