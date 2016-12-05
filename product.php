<?php include 'header.php'; ?>
<!--main-->
<div class="main">
		
	<!-- heading -->
	<div class="heading container">
		<div class="heading_title">
			<img src="img/icons/shop_icon.png" alt="">
			<strong>BRC Маркет</strong>
		</div>
		<div class="heading_social">
			<img src="img/icons/social.png" alt="">
		</div>
	</div>
	<!-- end-heading -->

	<!-- search -->
	<div class="search_wrap container">
		<div class="search_block">
			<input type="text" placeholder="Поиск товара">
			<input type="submit" value="Найти">
		</div>
		<nav class="store_tags">
			<a href="#"><i class="fa fa-map-marker"></i> Москва</a>
			<a href="#"><i class="fa fa-list" aria-hidden="true"></i> Сравнение</a>
			<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Отложенные</a>
			<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Корзина</a>
		</nav>
	</div>
	<!-- end-search -->

	<!-- product-menu -->
	<nav class="product_menu container">
		<div class="menu_trigger"><i class="fa fa-list" aria-hidden="true"></i> Категории</div>
		<ul>
			<li><a href="#">Электроника</a></li>
			<li><a href="#">Компютеры</a></li>
			<li><a href="#">Бытовая техника</a></li>
			<li><a href="#">Детские товары</a></li>
			<li><a href="#">Зоотовары</a></li>
			<li><a href="#">Дом, дача, ремонт</a></li>
			<li><a href="#">Одежда и обувь</a></li>
			<li><a href="#">Красота и здоровье</a></li>
			<li><a href="#">Еще</a></li>
		</ul>
	</nav>
	<!-- end-product-menu -->

	<!-- product-top -->
	<div class="product_top container">
		<div class="product_top_right">
			<div class="product_top_big_img">
				<a href="#"><img src="img/product_big.png" alt=""></a>
			</div>
			<div class="product_top_small">
				<a href="#" class="product_top_small_img active"><span><img src="img/product_small.png" alt=""></span></a>
				<a href="#" class="product_top_small_img"><span><img src="img/product_small.png" alt=""></span></a>
				<a href="#" class="product_top_small_img"><span><img src="img/product_small.png" alt=""></span></a>
				<a href="#" class="product_top_small_img"><span><img src="img/product_small.png" alt=""></span></a>
				<a href="#">ЕЩЕ 4</a>
			</div>
		</div>
		<div class="product_top_left">
			<nav class="bread">
				<a href="#">Мобильные телефоны</a>
				<a href="#">Samsung</a>
			</nav>
			<h5>Samsung Galaxy A3 (2016)</h5>
			<div class="color">
				<label>ЦВЕТ</label>
				<select>
					<option>Неважно</option>
					<option>Серый</option>
					<option>Белый</option>
				</select>
			</div>
			<div class="price">5 538 руб</div>
			<div class="stars">
				ПРЕДОСТАВЛЕНО <a href="#">NEO24</a>
				<img src="img/star.png" alt="">
			</div>
			<div class="delivery">
				<i class="fa fa-truck" aria-hidden="true"></i> 
				ИЗ МОСКВЫ   <a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a>
			</div>
			<div class="color">
				ЦВЕТ <span style="background: #fff200;"></span>
			</div>
			<div class="product_top_buttons">
				<a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a>
				<a href="#" class="button"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Отложить</a>
				<a href="#" class="button"><i class="fa fa-list" aria-hidden="true"></i> Сравнить</a>
			</div>
			<div class="product_top_details">
				<h6>КОРОТКО О ТОВАРЕ</h6>
				<ul>
					<li>- смартфон, Android 5.1</li>
					<li>- поддержка двух SIM-карт</li>
					<li>- экран 4.7", разрешение 1280x720</li>
					<li>- камера 13 МП, автофокус</li>
					<li>- память 16 Гб, слот для карты памяти</li>
					<li>- 3G, 4G LTE, LTE-A, Wi-Fi, Bluetooth, NFC, GPS, ГЛОНАСС</li>
					<li>- объем оперативной памяти 1.50 Гб</li>
					<li>- аккумулятор 2300 мА.ч</li>
					<li>- вес 132 г, ШxВxТ 65.20x134.50x7.30 мм</li>
					<li><a href="#">все характеристики</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end-product-top -->

	<!-- product-tab-menu -->
	<nav class="product_tab_menu container">
		<div class="menu_trigger"><i class="fa fa-list" aria-hidden="true"></i> Информация</div>
		<ul>
			<li class="active"><a href="#">Описание </a></li>
			<li><a href="#">Характеристики</a></li>
			<li><a href="#">Цены <small>164</small></a></li>
			<li><a href="#">Карта <small>5</small></a></li>
			<li><a href="#">Отзывы <small>199</small></a></li>
			<li><a href="#">Обзоры <small>12</small></a></li>
			<li><a href="#">Обсуждения <small>228</small></a></li>
		</ul>
	</nav>
	<!-- end-product-tab-menu -->

	<!-- product-table -->
	<div class="product_table container">
		<table>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<div class="show_tel"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">ПОКАЗАТЬ ТЕЛЕФОН</a></div>
				</td>
				<td>
					<div class="delivery"><i class="fa fa-truck" aria-hidden="true"></i> Из Москвы</div>
					<div class="delivery_info"><i class="fa fa-info" aria-hidden="true"></i> обязательная предоплата 5%, <br> но не менее 1 000 руб</div>
				</td>
				<td>
					<div class="color">
						ЦВЕТ <span style="background: #fff200;"></span>
					</div>
				</td>
				<td>
					<strong>15 500 руб</strong>
				</td>
				<td>
					<div class="product_top_buttons"><a href="#" class="to_store">В магазин <span><i class="fa fa-info" aria-hidden="true"></i></span></a></div>
				</td>
			</tr>
		</table>
	</div>
	<!-- end-product-table -->

	<!-- product-price -->
	<div class="container">
		<div class="product_price_dynamic">
			<div><b>СРЕДНЯЯ ЦЕНА СЕЙЧАС</b></div>
			<small>от 14 538</small>      <strong>15 999 руб</strong>     <small> до 22 119 </small>
			<div class="price_dynamic_item"><img src="img/price_dynamic.jpg" alt=""></div>	
		</div>
	</div>
	<!-- end-product-price -->
	<div class="loadmore container"><a href="#">Смотреть все цены</a></div>

	<!-- product-position -->
	<div class="product_position container">
		<h6>НА КАРТЕ</h6>
		<h5>Магазины в Москве</h5>
		<div class="product_position_block">
			<div class="product_position_left">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=CcF-p9qITCvdSyU7_pjR-jMWZ_gqPo5Q&amp;width=750&amp;height=383&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
			</div>
			<div class="product_position_right">
				<div class="product_position_item">
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<p>Москва, Народная, д. 6/122</p>
					<strong>16 000 руб</strong>
				</div>
				<div class="product_position_item">
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<p>Москва, Народная, д. 6/122</p>
					<strong>16 000 руб</strong>
				</div>
				<div class="product_position_item">
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<p>Москва, Народная, д. 6/122</p>
					<strong>16 000 руб</strong>
				</div>
				<div class="product_position_item">
					<div class="name">NEO24</div>
					<div class="rev"><img src="img/star.png" alt="">Отзывы 13</div>
					<p>Москва, Народная, д. 6/122</p>
					<strong>16 000 руб</strong>
				</div>
				<div class="loadmore"><a href="#">Все магазины на карте 5</a></div>
			</div>
		</div>
	</div>
	<div class="product_position container">
		<h6>ВИДЕООБЗОРЫ</h6>
		<h5>Обзор Samsung Galaxy A3 (2016)</h5>
		<div class="product_position_block">
			<div class="product_position_left">
				<iframe width="750" height="383" src="https://www.youtube.com/embed/5rHXB0L1HO4" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="product_position_right">
				<div class="product_position_item">
					<img src="img/video_img.jpg" alt="" class="float_left">
					<div class="ovh">
						<a href="#">Обзор Samsung Galaxy A3 (2016)</a>
						<p>22 февраля 2016 <br>
						42 414 просмотров</p> 
					</div>
				</div>
				<div class="product_position_item">
					<img src="img/video_img.jpg" alt="" class="float_left">
					<div class="ovh">
						<a href="#">Обзор Samsung Galaxy A3 (2016)</a>
						<p>22 февраля 2016 <br>
						42 414 просмотров</p> 
					</div>
				</div>
				<div class="product_position_item">
					<img src="img/video_img.jpg" alt="" class="float_left">
					<div class="ovh">
						<a href="#">Обзор Samsung Galaxy A3 (2016)</a>
						<p>22 февраля 2016 <br>
						42 414 просмотров</p> 
					</div>
				</div>
				<div class="product_position_item">
					<img src="img/video_img.jpg" alt="" class="float_left">
					<div class="ovh">
						<a href="#">Обзор Samsung Galaxy A3 (2016)</a>
						<p>22 февраля 2016 <br>
						42 414 просмотров</p> 
					</div>
				</div>
				<div class="loadmore"><a href="#">Смотреть все обзоры 55</a></div>
			</div>
		</div>
	</div>
	<!-- end-product-position -->

	<!-- product-like -->
	<div class="product_like container">
		<div class="title">Вам также могут понравиться  </div>
		<div class="product_like_block">
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/product.png" alt=""></a>
					<div class="numb" style="background: #8cb400;">4.0</div>
				</div>
				<div class="product_special_name">
					<strong><a href="#">Samsung Galaxy A5 (2016) SM-A ...</a></strong>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>до 11 399 грн <br>
					261 отзыв     165 предложений</small>
					<p>Смартфон, Android 5.1
					Поддержка двух SIM-карт
					Экран 5.2", разрешение 1920x1080
					Камера 13 МП, автофокус</p>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/product.png" alt=""></a>
					<div class="numb" style="background: #359e00;">4.5</div>
				</div>
				<div class="product_special_name">
					<strong><a href="#">Samsung Galaxy A5 (2016) SM-A ...</a></strong>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>до 11 399 грн <br>
					261 отзыв     165 предложений</small>
					<p>Смартфон, Android 5.1
					Поддержка двух SIM-карт
					Экран 5.2", разрешение 1920x1080
					Камера 13 МП, автофокус</p>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/product.png" alt=""></a>
					<div class="numb" style="background: #8cb400;">4.0</div>
				</div>
				<div class="product_special_name">
					<strong><a href="#">Samsung Galaxy A5 (2016) SM-A ...</a></strong>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>до 11 399 грн <br>
					261 отзыв     165 предложений</small>
					<p>Смартфон, Android 5.1
					Поддержка двух SIM-карт
					Экран 5.2", разрешение 1920x1080
					Камера 13 МП, автофокус</p>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/product.png" alt=""></a>
					<div class="numb" style="background: #8cb400;">4.0</div>
				</div>
				<div class="product_special_name">
					<strong><a href="#">Samsung Galaxy A5 (2016) SM-A ...</a></strong>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>до 11 399 грн <br>
					261 отзыв     165 предложений</small>
					<p>Смартфон, Android 5.1
					Поддержка двух SIM-карт
					Экран 5.2", разрешение 1920x1080
					Камера 13 МП, автофокус</p>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end-product-like -->

	<!-- rev -->
	<div class="rev_wrap container">
		<aside class="rev_sid">
			<a href="#" class="button">Написать отзыв</a>
			<h6>Показать отзывы с оценкой</h6>
			<ul>
				<li><div class="numb" style="background: #359e00;">5</div><small>47%</small><a href="#">94 отзыва</a></li>
				<li><div class="numb" style="background: #8cb400;">4</div><small>28%</small><a href="#">55  отзыва</a></li>
				<li><div class="numb" style="background: #c1c710;">3</div><small>12%</small><a href="#">23 отзыва</a></li>
				<li><div class="numb" style="background: #f6c000;">2</div><small>8%</small><a href="#">16 отзыва</a></li>
				<li><div class="numb" style="background: #f99f47;">1</div><small>6%</small><a href="#">11 отзыва</a></li>
			</ul>
			<div class="loadmore"><a href="#">Показать все отзывы</a></div>
		</aside>
		<div class="all_rev">
			<div class="title">Все отзывы <small>199</small></div>
			<div class="rev_block">
				<div class="rev_title">Максимов Виктор   <small>Автор 4 отзывов</small></div>
				<div class="rev_numb"><div class="numb" style="background: #8cb400;">4.0</div> хорошая модель  Опыт использования: менее месяца</div>
				<div class="rev_txt">
					<p><strong>Достоинства:</strong> Вполне себе телефон. Звонит, неплохо фотографирует. Тормоза не замечены. В играх не используется.</p>
					<p><strong>Недостатки:</strong> Ужас, какой скользкий. Без чехла сложно, а чехлы не люблю, как и пленки на стекло. Дизайн в сравнении с предыдущим А3 сильно проигрывает. Якобы двухсимочность с потерей дополнительной памяти раздражает. Невозможность вытащить батарейку убила первый А3, когда он упал в воду. На другом бы выкинул аккумулятор и просушил хорошенько, а тут...</p>
					<p><strong>Комментарий:</strong> Жене нравится, ей и куплен.</p>
				</div>
				<div class="rev_date">4 мая, Москва</div>
			</div>
			<div class="rev_block">
				<div class="rev_title">Максимов Виктор   <small>Автор 4 отзывов</small></div>
				<div class="rev_numb"><div class="numb" style="background: #8cb400;">4.0</div> хорошая модель  Опыт использования: менее месяца</div>
				<div class="rev_txt">
					<p><strong>Достоинства:</strong> Вполне себе телефон. Звонит, неплохо фотографирует. Тормоза не замечены. В играх не используется.</p>
					<p><strong>Недостатки:</strong> Ужас, какой скользкий. Без чехла сложно, а чехлы не люблю, как и пленки на стекло. Дизайн в сравнении с предыдущим А3 сильно проигрывает. Якобы двухсимочность с потерей дополнительной памяти раздражает. Невозможность вытащить батарейку убила первый А3, когда он упал в воду. На другом бы выкинул аккумулятор и просушил хорошенько, а тут...</p>
					<p><strong>Комментарий:</strong> Жене нравится, ей и куплен.</p>
				</div>
				<div class="rev_date">4 мая, Москва</div>
			</div>
			<div class="loadmore"><a href="#">Перейти к отзывам</a></div>
		</div>
	</div>
	<!-- end-rev -->

	<!-- product-similar -->
	<div class="product_similar container">
		<div class="title">Подойдёт к этой покупке</div>
		<div class="product_like_block">
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/wath.jpg" alt=""></a>
				</div>
				<div class="product_special_name text_left">
					<strong><a href="#">ZGPAX S8</a></strong>
					<a href="#">Умные часы и браслеты</a>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>
					261 отзыв     165 предложений</small>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/wath.jpg" alt=""></a>
				</div>
				<div class="product_special_name text_left">
					<strong><a href="#">ZGPAX S8</a></strong>
					<a href="#">Умные часы и браслеты</a>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>
					261 отзыв     165 предложений</small>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/wath.jpg" alt=""></a>
				</div>
				<div class="product_special_name text_left">
					<strong><a href="#">ZGPAX S8</a></strong>
					<a href="#">Умные часы и браслеты</a>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>
					261 отзыв     165 предложений</small>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="product">
				<div class="product_special_img">
					<a href="#"><img src="img/wath.jpg" alt=""></a>
				</div>
				<div class="product_special_name text_left">
					<strong><a href="#">ZGPAX S8</a></strong>
					<a href="#">Умные часы и браслеты</a>
				</div>
				<div class="product_text">
					<strong>от 15 600 руб</strong>
					<small>
					261 отзыв     165 предложений</small>
				</div>
				<div class="product_like_bottom">
					<div class="float_left"><a href="#">Цены 165</a></div>
					<div class="float_right">
						<a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- end-product-similar -->

	<!-- product-article -->
	<div class="product_articles container">
		<div class="title">Статьи и подборки</div>
		<div class="product_articles_block">
			<figure>
				<a href="#">
					<img src="img/leeco.jpg" alt="">
				</a>
				<figcaption><a href="#">Обзор смартфона
				LeEco Le 2:
				Катя врет</a></figcaption>
			</figure>
			<figure>
				<a href="#">
					<img src="img/leeco.jpg" alt="">
				</a>
				<figcaption><a href="#">Обзор смартфона
				LeEco Le 2:
				Катя врет</a></figcaption>
			</figure>
			<figure>
				<a href="#">
					<img src="img/leeco.jpg" alt="">
				</a>
				<figcaption><a href="#">Обзор смартфона
				LeEco Le 2:
				Катя врет</a></figcaption>
			</figure>
			<figure>
				<a href="#">
					<img src="img/leeco.jpg" alt="">
				</a>
				<figcaption><a href="#">Обзор смартфона
				LeEco Le 2:
				Катя врет</a></figcaption>
			</figure>
		</div>
	</div>
	<!-- end-product-article -->

	<!-- product-bottom -->
	<div class="product_bottom_info container">
		<p>Стоимость доставки из других регионов приблизительная. Точную стоимость уточняйте у продавца. <br>Товары в разделе «Вместе с этим покупают» подобраны автоматически. Совместимость товаров уточняйте у продавца или производителя.</p>
		<nav>
			<a href="#">Информация о продавцах </a>
			<a href="#">Процент скидки рассчитан автоматически</a>
		</nav>
	</div>
	<!-- end-product-bottom -->



	
</div>
<!--end-main-->
<?php include 'footer.php'; ?>