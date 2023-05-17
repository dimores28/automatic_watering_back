<footer class="footer" id="contacts" data-watch="navigator">
			<div class="footer__container">
				<div class="footer__content">
					<div class="footer__map" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.2209461495772!2d28.86970417682956!3d47.01626792855569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c0d711c125f%3A0xf77fc46f17e28d80!2zMjIsIFN0cmFkYSBVemluZWxvciAxMSwgQ2hpyJlpbsSDdSwg0JzQvtC70LTQsNCy0LjRjw!5e0!3m2!1sru!2sua!4v1684136345002!5m2!1sru!2sua" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="footer__actions">
						<h2 class="footer__heading section-heading" data-da=".footer__container,1200,0">
							Контакты
						</h2>
						<form action="" class="footer__form" id="footerForm">
							<div class="footer__form-group">
								<label for="footerUserName">Имя:</label>
								<input type="text" class="input footer__input" id="footerUserName" name="footerUserName" placeholder="Имя:" />
							</div>

							<div class="footer__form-group">
								<label for="footerEmail">Почта:</label>
								<input type="email" class="input footer__input" id="footerEmail" placeholder="example@mail.com" required="required" aria-required="true" name="footerEmail" />
							</div>

							<div class="footer__form-group">
								<label for="footerPhone">Телефон:</label>
								<input type="tel" class="input footer__input" id="footerPhone" placeholder="0230xxxxx" required="required" aria-required="true" pattern="[0-9()#&+*-=.]+" name="footerPhone" title="Тоько цыфри и символы телефона (#, -, *, і т.д.) принимаются." />
							</div>

							<div class="footer__form-group">
								<label for="footerMessage">Сообщение:</label>
								<textarea class="input footer__textarea" id="footerMessage" name="footerMessage" rows="3" placeholder="Сообщение:"></textarea>
							</div>

							<button type="submit" class="btn btn-form footer__submit">
								Отправить
							</button>
						</form>
					</div>
					<div class="footer__contacts">
						<ul class="footer__contacts_list contacts">
							<li class="contacts__item">
								<a href="mailto:gardenindustrysrl@gmail.com" class="contacts__linck">
									<svg class="contacts__icon">
										<use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/img/icons/icons.svg#email"></use>
									</svg>
									<span>gardenindustrysrl@gmail.com</span>
								</a>
							</li>
							<li class="contacts__item">
								<a href="tel:060462696" class="contacts__linck">
									<svg class="contacts__icon">
										<use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/img/icons/icons.svg#phone"></use>
									</svg>

									<span>060462696</span>
								</a>
							</li>
							<li class="contacts__item">
								<a href="https://goo.gl/maps/EUyCNiTJh5enit1x8?coh=178571&entry=tt" class="contacts__linck" target="_blank">
									<svg class="contacts__icon">
										<use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/img/icons/icons.svg#point"></use>
									</svg>

									<span> Strada Uzinelor 11, Chișinău 2023, Молдавия </span>
								</a>
							</li>
							<li class="contacts__item">
								<a href="#"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer__logo">
				<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/footer_logo.svg" alt="logo" />
			</div>
			<div class="footer__policy">© Garden Industry 2023. Все права защищены</div>
		</footer>

	</div>
	<?php wp_footer();?>
	<!-- <script src="js/app.min.js"></script> -->
</body>

</html>