<!doctype html>
<html lang="ja">
    {{--必要な情報の宣言--}}
    <head>
        <meta charset="utf-8">

        <title>Example</title>
        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="/js/example_blade.js"></script> 
    </head>

    {{--本文--}}
    <body class="container">
        <h1 class="mb-4 text-center strong text-white bg-warning">Example ページ</h1>
        {{--User Nameをpostする --}}
        <form method="post" name="name" action="/example_receive" class="mb-3 ins">
            {{ csrf_field() }}
            <p>ユーザ名を記入してください</p>
            <input type="text">
            <input type="submit" value="送信">
        </form>
        <h4 class="">以下でブログのリストを表示します</h3>
      <!--  <img class="mb-4" src="/storage/example.jpg" style="width:30% height:auto"> 
        <div class="row">
            <form class="col-3" method="get" action="/example">
                <input type="search" name="kennsaku" value="" placeholder="ココに入力">
                <input type="submit">
            </form>
        </div>
    -->
    
        <div class="col-9">
            <p><a id="readOnlyRowsToggle" class="btn text-primary btn-outline-primary">Click</a></p>
            <table class="table">
                <thead>
                    <tr>
                        <th>タイトル</td>
                        <th>カテゴリ</td>
                        <th>作成者</td>
                        <th>作成日</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($room_index as $room)
                    <tr class="readOnlyRow">
                        <td><a href="/room?room_id={{$room['room_id']}}">{{ $room['title']}}</a></td>
                        <td>{{ $room['category_name'] }}</td>
                        <td>{{ $room['creator'] }}</td>
                        <td>{{ $room['created_date'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>