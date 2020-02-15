<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>東京都の図書館検索サイト libSearch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>

<body class="home">
<div id="container">
	<!-- tabmenu -->
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

	<!-- mymain -->
	<div class="maintop_container">
		<div class="libserch_title">LibSearch</div>
		<div class="libserch_sub_title">図書館に、出かけてみよう。</div>
	</div>

	<!-- search card -->
	<div>
        <div class="searchcard_container">
            <div class="search_by_area">人気エリアから探す</div>

			<!-- phpの処理を書く -->
			@foreach ($cities as $city)
				<span>{{ $city->name }}</span>
			@endforeach


			<!-- <a v-for="city in cities" :key="city.name" >
                <router-link :to="{ name: 'LibraryIndexPageFromCity', params: { city: city.name } }">
                </router-link>
            </a> -->

			<div class="search_by_category">カテゴリーから探す</div>

			<!-- phpの処理を書く -->
<!-- 
			<a v-for="category in categories" :key="category.libcategory" >
                <router-link :to="{ name: 'LibraryIndexPageFromCategory', params: { category: category.libcategory } }">
                </router-link>
            </a> -->

		</div>
	</div>	
</div>



</body>
</html>
