@extends('header')

<!DOCTYPE html>
<html lang="ja">


<body class="home">
	<header>
		<div class="header_contents">東京都の図書館が探せるサイト</div>
		<div class="tab_container">
			<ol>
				<li><a>LibSearch</a></li>
				<li><a>図書館を探す</a></li>			
				<li><a>ログイン</a></li>
			</ol>
		</div>
	</header>
<div>
    <div class="display_inner">
      <table>
        <tbody>
          <tr>
            <th>name</th>
            <th>address</th>
            <th>category</th>
          </tr>
          @foreach ($libraries as $library)
            <tr>
              <td>{{ $library->systemname }}</td>
              <td>{{ $library->address }}</td>
              <td>{{ $library->category }}</td>
            </tr>
  	  		@endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
