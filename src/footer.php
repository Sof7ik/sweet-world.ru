	</main>

	<footer id="page-footer">
		<div class="container-1440 footer-inner-container">
			<div class="socials-list">
				<?php foreach ($APPLICATION['socials'] as $socialName => $social) {?>
					<a target="_blank" href="<?=$social["HREF"]?>" class="socials-list__social-item"
					   title="<?=$social["title"]?>">
						<img src="<?=$social["iconSrc"]?>" alt="<?=$socialName?>">
					</a>
				<?php }?>
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