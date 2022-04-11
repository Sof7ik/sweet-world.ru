	</main>

	<footer id="page-footer">
		<div class="container-1440 footer-inner-container">
			<div class="socials-list">
				<a href="https://vk.com/feed" class="socials-list__social-item" title="Мы в ВК">
					<img src="/site/upload/icons/cib_vk-social.svg" alt="vk">
				</a>

				<a href="https://vk.com/feed" class="socials-list__social-item" title="Мы в телеграмме">
					<img src="/site/upload/icons/telegram.svg" alt="telegram">
				</a>

				<a href="https://vk.com/feed" class="socials-list__social-item" title="Мы в ВК">
					<img src="/site/upload/icons/cib_vk-social.svg" alt="vk">
				</a>

				<a href="https://vk.com/feed" class="socials-list__social-item" title="Мы в ВК">
					<img src="/site/upload/icons/cib_vk-social.svg" alt="vk">
				</a>
			</div>

			<div class="right-footer-wrapper">
				<p class="footer__copyright">&copy; <?=date("Y")?> Sweet World, интернет-магазин сладостей</p>
			</div>

		</div>
	</footer>

	<!-- Connect JS	-->
	<?php foreach ($APPLICATION["scripts"] as $js){?>
		<script src="<?=$js?>" defer></script>
	<?php }?>
	</body>
</html>