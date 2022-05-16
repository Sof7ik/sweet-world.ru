<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/menu-items.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $APPLICATION["title"]; ?></title>
	<meta name="description" content="<?= $APPLICATION["description"] ?>">

	<link rel="shortcut icon" href="<?= $APPLICATION["favicon"]["href"] ?>" type="<?= $APPLICATION["favicon"]["type"] ?>">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=2.0">

	<!-- Connect CSS -->
	<?php foreach ($APPLICATION["styles"] as $style) { ?>
		<link rel="stylesheet" href="<?= $style ?>">
	<?php } ?>
</head>

<body>
	<header id="page-header">
		<div class="container-1440">
			<div class="page-header__inner-container">
				<div class="left-header">
					<a href="/" class="logo-wrapper" title="Перейти на главную страницу">
						<img src="/site/upload/images/logo.jpg" alt="Логотип Sweet World">
					</a>

					<nav class="page-header__socials-block">
						<a href="https://t.me/" target="_blank" class="page-header__social-link tg-link">
							<svg width="264" height="264" viewBox="0 0 264 264" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M227.315 40.887L32.2851 116.094C18.9751 121.44 19.0521 128.865 29.8431 132.176L79.9151 147.796L195.767 74.701C201.245 71.368 206.25 73.161 202.136 76.813L108.273 161.524H108.251L108.273 161.535L104.819 213.147C109.879 213.147 112.112 210.826 114.95 208.087L139.271 184.437L189.86 221.804C199.188 226.941 205.887 224.301 208.208 213.169L241.417 56.661C244.816 43.032 236.214 36.861 227.315 40.887V40.887Z" />
							</svg>
						</a>

						<a href="tel:+7 (999) 999-99-99" class="page-header__phone">
							<svg width="239" height="239" viewBox="0 0 239 239" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M204.714 55.7122L179.857 30.8786C176.823 27.8444 172.762 26.1406 168.467 26.1406C164.172 26.1406 160.111 27.8211 157.077 30.8786L130.306 57.6027C127.272 60.6369 125.568 64.7214 125.568 69.0159C125.568 73.3338 127.249 77.3716 130.306 80.4291L151.219 101.365C146.455 112.465 139.61 122.55 131.053 131.077C122.487 139.689 112.475 146.481 101.365 151.289L80.4524 130.353C77.4183 127.319 73.3571 125.615 69.0626 125.615C66.9443 125.607 64.8458 126.022 62.89 126.836C60.9342 127.649 59.1605 128.845 57.6728 130.353L30.8786 157.077C27.8444 160.111 26.1406 164.196 26.1406 168.49C26.1406 172.808 27.8211 176.846 30.8786 179.904L55.7122 204.737C60.8937 209.919 68.0356 212.883 75.3644 212.883C76.8814 212.883 78.3519 212.766 79.8456 212.509C110.748 207.421 141.416 190.967 166.18 166.226C190.92 141.439 207.351 110.771 212.486 79.8456C213.956 71.0698 211.016 62.0373 204.714 55.7122V55.7122ZM195.938 77.0682C191.387 104.586 176.589 132.033 154.3 154.323C132.01 176.613 104.586 191.41 77.0682 195.961C73.6139 196.545 70.0662 195.378 67.5455 192.88L43.1554 168.49L69.0159 142.606L96.9771 170.614L97.1871 170.824L102.229 168.957C117.514 163.337 131.395 154.46 142.91 142.942C154.424 131.424 163.296 117.54 168.91 102.252L170.778 97.2104L142.583 69.0393L168.444 43.1554L192.834 67.5455C195.354 70.0662 196.521 73.6139 195.938 77.0682Z" fill="black" />
							</svg>

							<span>+7 (999) 999-99-99</span>
						</a>
					</nav>
				</div>

				<nav class="page-header__right-navigation">
					<a href="/src/personal" title="Перейти в личный кабинет" class="page-header__site-navigation-link">
						<svg width="232" height="232" viewBox="0 0 232 232" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M194.504 173.003C190.23 162.88 184.028 153.684 176.243 145.929C168.482 138.151 159.288 131.95 149.169 127.668C149.078 127.623 148.988 127.6 148.897 127.555C163.012 117.359 172.188 100.752 172.188 82.0156C172.188 50.9766 147.039 25.8281 116 25.8281C84.961 25.8281 59.8126 50.9766 59.8126 82.0156C59.8126 100.752 68.9884 117.359 83.1032 127.577C83.0126 127.623 82.922 127.645 82.8313 127.691C72.6813 131.973 63.5735 138.113 55.7571 145.952C47.9794 153.713 41.7783 162.907 37.4962 173.026C33.2894 182.932 31.0206 193.553 30.8126 204.314C30.8065 204.556 30.8489 204.796 30.9373 205.022C31.0257 205.247 31.1582 205.452 31.3272 205.625C31.4961 205.798 31.6979 205.936 31.9208 206.03C32.1437 206.124 32.3832 206.172 32.6251 206.172H46.2188C47.2157 206.172 48.0087 205.379 48.0313 204.405C48.4845 186.914 55.5079 170.534 67.9235 158.118C80.7696 145.272 97.8298 138.203 116 138.203C134.17 138.203 151.231 145.272 164.077 158.118C176.492 170.534 183.516 186.914 183.969 204.405C183.991 205.402 184.784 206.172 185.781 206.172H199.375C199.617 206.172 199.856 206.124 200.079 206.03C200.302 205.936 200.504 205.798 200.673 205.625C200.842 205.452 200.974 205.247 201.063 205.022C201.151 204.796 201.194 204.556 201.188 204.314C200.961 193.484 198.718 182.949 194.504 173.003V173.003ZM116 120.984C105.601 120.984 95.8134 116.929 88.4501 109.566C81.0868 102.202 77.0313 92.4148 77.0313 82.0156C77.0313 71.6164 81.0868 61.8289 88.4501 54.4656C95.8134 47.1023 105.601 43.0469 116 43.0469C126.399 43.0469 136.187 47.1023 143.55 54.4656C150.913 61.8289 154.969 71.6164 154.969 82.0156C154.969 92.4148 150.913 102.202 143.55 109.566C136.187 116.929 126.399 120.984 116 120.984Z" fill="black" />
						</svg>
					</a>

					<a href="/src/cart" title="Перейти в корзину" class="page-header__site-navigation-link">
						<svg width="238" height="238" viewBox="0 0 238 238" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M214.502 163.137H76.0948L83.0442 148.982L198.511 148.773C202.416 148.773 205.763 145.984 206.46 142.126L222.451 52.6203C222.869 50.2729 222.242 47.8557 220.708 46.0195C219.95 45.1159 219.004 44.388 217.936 43.8863C216.869 43.3846 215.705 43.1212 214.525 43.1143L67.6347 42.6262L66.3796 36.7227C65.5894 32.9574 62.196 30.2148 58.3378 30.2148H22.4286C20.2526 30.2148 18.1658 31.0792 16.6272 32.6179C15.0885 34.1565 14.2241 36.2434 14.2241 38.4193C14.2241 40.5953 15.0885 42.6821 16.6272 44.2208C18.1658 45.7594 20.2526 46.6238 22.4286 46.6238H51.6905L57.1757 72.7016L70.6794 138.082L53.2942 166.461C52.3914 167.679 51.8476 169.126 51.7244 170.638C51.6012 172.149 51.9034 173.665 52.597 175.014C53.9915 177.78 56.8038 179.523 59.9183 179.523H74.5144C71.4027 183.656 69.7219 188.69 69.7265 193.863C69.7265 207.018 80.4179 217.71 93.5729 217.71C106.728 217.71 117.419 207.018 117.419 193.863C117.419 188.68 115.7 183.637 112.632 179.523H150.075C146.963 183.656 145.282 188.69 145.287 193.863C145.287 207.018 155.978 217.71 169.133 217.71C182.288 217.71 192.98 207.018 192.98 193.863C192.98 188.68 191.26 183.637 188.192 179.523H214.525C219.034 179.523 222.73 175.85 222.73 171.318C222.716 169.144 221.844 167.064 220.302 165.532C218.761 163.999 216.676 163.138 214.502 163.137V163.137ZM71.0513 58.8027L204.88 59.2443L191.771 132.643L86.6468 132.829L71.0513 58.8027ZM93.5729 201.208C89.5288 201.208 86.2284 197.907 86.2284 193.863C86.2284 189.819 89.5288 186.519 93.5729 186.519C97.6171 186.519 100.917 189.819 100.917 193.863C100.917 195.811 100.144 197.679 98.7663 199.056C97.3889 200.434 95.5208 201.208 93.5729 201.208V201.208ZM169.133 201.208C165.089 201.208 161.789 197.907 161.789 193.863C161.789 189.819 165.089 186.519 169.133 186.519C173.177 186.519 176.478 189.819 176.478 193.863C176.478 195.811 175.704 197.679 174.327 199.056C172.949 200.434 171.081 201.208 169.133 201.208V201.208Z" fill="black" />
						</svg>
					</a>

					<a href="/src/liked" title="Перейти в избранные товары" class="page-header__site-navigation-link">
						<svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M225.342 69.2382C222.069 61.661 217.351 54.7946 211.45 49.0234C205.545 43.2349 198.583 38.635 190.942 35.4736C183.019 32.1824 174.522 30.4978 165.942 30.5175C153.906 30.5175 142.163 33.8134 131.958 40.039C129.517 41.5282 127.197 43.164 125 44.9462C122.803 43.164 120.483 41.5282 118.042 40.039C107.837 33.8134 96.0937 30.5175 84.0576 30.5175C75.3906 30.5175 66.9922 32.1777 59.0576 35.4736C51.3916 38.6474 44.4824 43.2128 38.5498 49.0234C32.6415 54.7881 27.9218 61.6561 24.6582 69.2382C21.2646 77.1239 19.5312 85.498 19.5312 94.1161C19.5312 102.246 21.1914 110.718 24.4873 119.336C27.2461 126.538 31.2012 134.009 36.2549 141.553C44.2627 153.491 55.2734 165.942 68.9453 178.564C91.6016 199.487 114.038 213.94 114.99 214.526L120.776 218.237C123.34 219.873 126.636 219.873 129.199 218.237L134.985 214.526C135.938 213.916 158.35 199.487 181.03 178.564C194.702 165.942 205.713 153.491 213.721 141.553C218.774 134.009 222.754 126.538 225.488 119.336C228.784 110.718 230.444 102.246 230.444 94.1161C230.469 85.498 228.735 77.1239 225.342 69.2382V69.2382ZM125 198.926C125 198.926 38.0859 143.237 38.0859 94.1161C38.0859 69.2382 58.667 49.0722 84.0576 49.0722C101.904 49.0722 117.383 59.0331 125 73.5839C132.617 59.0331 148.096 49.0722 165.942 49.0722C191.333 49.0722 211.914 69.2382 211.914 94.1161C211.914 143.237 125 198.926 125 198.926Z" fill="black" />
						</svg>
					</a>

					<button id="change-site-theme" title="Сменить тему сайта" aria-label="Сменить тему сайта" class="page-header__site-navigation-link">
						<svg width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.4519 0V6.92308H20.3606V0H17.4519ZM6.54447 4.284L4.49969 6.23077L9.63492 11.1642L11.7262 9.17308L6.54447 4.284ZM31.268 4.284L26.0863 9.17308L28.1776 11.1642L33.3128 6.23077L31.268 4.284ZM18.9062 8.30769C13.2998 8.30769 8.72596 12.6623 8.72596 18C8.72596 23.3377 13.2998 27.6923 18.9062 27.6923C24.5127 27.6923 29.0865 23.3377 29.0865 18C29.0865 12.6623 24.5127 8.30769 18.9062 8.30769ZM18.9062 11.0769C22.9391 11.0769 26.1779 14.1605 26.1779 18C26.1779 21.8395 22.9391 24.9231 18.9062 24.9231C14.8734 24.9231 11.6346 21.8395 11.6346 18C11.6346 14.1605 14.8734 11.0769 18.9062 11.0769ZM0 16.6154V19.3846H7.27163V16.6154H0ZM30.5409 16.6154V19.3846H37.8125V16.6154H30.5409ZM9.63492 24.8372L4.49969 29.7692L6.54447 31.716L11.7262 26.8269L9.63492 24.8372ZM28.1776 24.8372L26.0863 26.8269L31.268 31.716L33.3128 29.7692L28.1776 24.8372ZM17.4519 29.0769V36H20.3606V29.0769H17.4519Z" fill="black" />
						</svg>
					</button>

					<button id="open-left-menu" class="open-desktop-menu-btn" title="Открыть меню">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</button>
				</nav>
			</div>
		</div>

		<div class="drip-elem left"></div>
		<div class="drip-elem center"></div>
		<div class="drip-elem right-center"></div>
		<div class="drip-elem right"></div>
	</header>

	<div class="container-1440">
		<div class="search-catalog-wrapper">
			<form action="" method="POST" class="search-panel">
				<button type="submit" class="search-submit">
					<svg width="170" height="170" viewBox="0 0 170 170" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M168.869 157.246L114.088 102.466C122.589 91.4758 127.187 78.0391 127.187 63.9062C127.187 46.9891 120.585 31.1266 108.646 19.1664C96.707 7.20625 80.8023 0.625 63.9062 0.625C47.0102 0.625 31.1055 7.22734 19.1664 19.1664C7.20625 31.1055 0.625 46.9891 0.625 63.9062C0.625 80.8023 7.22734 96.707 19.1664 108.646C31.1055 120.606 46.9891 127.187 63.9062 127.187C78.0391 127.187 91.4547 122.589 102.445 114.109L157.225 168.869C157.386 169.029 157.576 169.157 157.786 169.244C157.996 169.331 158.221 169.376 158.448 169.376C158.676 169.376 158.901 169.331 159.111 169.244C159.321 169.157 159.511 169.029 159.672 168.869L168.869 159.693C169.029 159.532 169.157 159.342 169.244 159.132C169.331 158.922 169.376 158.697 169.376 158.47C169.376 158.242 169.331 158.017 169.244 157.807C169.157 157.597 169.029 157.407 168.869 157.246ZM97.3187 97.3187C88.375 106.241 76.5203 111.156 63.9062 111.156C51.2922 111.156 39.4375 106.241 30.4937 97.3187C21.5711 88.375 16.6562 76.5203 16.6562 63.9062C16.6562 51.2922 21.5711 39.4164 30.4937 30.4937C39.4375 21.5711 51.2922 16.6562 63.9062 16.6562C76.5203 16.6562 88.3961 21.55 97.3187 30.4937C106.241 39.4375 111.156 51.2922 111.156 63.9062C111.156 76.5203 106.241 88.3961 97.3187 97.3187Z" fill="black" />
					</svg>
				</button>
				<input type="text" name="query" class="search-panel__input" placeholder="Поиск">
			</form>

			<div class="catalog-btn-wrapper">
				<a href="/src/katalog/" class="catalog-btn__text" title="Перейти в каталог">Каталог</a>

				<button id="open-catalog-menu" title="Открыть меню каталога">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</button>
			</div>
		</div>

		<div class="breadcrumbs-wrapper">
			<a href="/" class="breadcrumbs-item">Главная</a>
			<span class="delimiter"> - </span>
			<a href="/" class="breadcrumbs-item">Отзывы</a>
			<span class="delimiter"> - </span>
			<span class="breadcrumbs-item">Отзывы</span>
		</div>
	</div>

	<div class="aside-darkener"></div>
	<aside id="desktop-menu" class="desktop-left-menu">
		<nav class="page-header__site-navigation">
			<?php foreach ($arMenuLinks as $arMenuName => $arMenuLink) { ?>
				<a href="<?= $arMenuLink ?>" class="site-navigation__link"><?= $arMenuName ?></a>
			<?php } ?>
		</nav>
	</aside>

	<main>