@extends('app')

@section('title', '顯示特定球員')

@section('nba_theme', '您所選取的球員資料')

@section('nba_contents')
球員編號：{{ $player->id }}<br/>
姓名：{{ $player->name }}<br/>
背號：{{ $player->number }}<br/>
站位：{{ $player->location }}<br/>
投打習慣：{{ $player->habit }}<br/>
球員身高：{{ $player->height }}<br/>
球員體重：{{ $player->weight}}<br/>
球員國籍：{{ $player->nation}}<br/>
選秀順位：{{ $player->rank }}<br/>
隊伍ID：{{ $player->teamid}}<br/>
@endsection