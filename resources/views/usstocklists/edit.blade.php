@extends('layouts.app')

@section('title', '編集')

@section('content')
<form action="/usstocklists/{{ $usstocklist->ticker }}" method="post">
    @csrf
    @method('patch')
    <div>
      <label for="ticker">ティッカー</label>
      <input type="text" name="ticker" value="{{ $usstocklist->ticker }}" required>
    </div>
    <div>
      <label for="stockname">銘柄名</label>
      <input type="text" name="stockname" size="50" value="{{ $usstocklist->stockname }}" required>
    </div>
    <div>
      <label for="market_id">市場</label>
      <select name="market_id">
        @foreach ($usstockmarkets as $market)
          <option value="{{ $market->market_id }}" @if($usstocklist->market_id === $market->market_id) selected @endif>{{ $market->market }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <input type="submit" value="変更する" class="btn btn-primary">
      <a href="/usstocklists" class="btn btn-success d-inline-block">一覧に戻る</a>
    </div>
  </form>
@endsection
