</div>
		<!-- FOOTER -->
		<footer class="mt-auto bg-dark text-white text-center py-3">
			<p class="mb-0">© 2025 Vallera E-Shop | Designed for demo purposes</p>
		</footer>

		<!-- AUTH MODAL -->
		<?php include 'partials/auth-modal.php'; ?>

		<!-- TOAST CONTAINER -->
		<div class="toast-container position-fixed top-0 end-0 p-3">
			<div id="toast-template" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bi me-2"></i>
					<strong class="me-auto toast-title">Notification</strong>
					<small>Just now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					This is a sample message.
				</div>
			</div>
		</div>

		<script src="dist/js/jquery.min.js"></script>
		<script src="dist/js/bootstrap.bundle.min.js"></script>
		<script src="dist/js/jquery.validate.min.js"></script>
		<script src="dist/js/jquery-ui.min.js"></script>
		<script src="dist/js/main.js"></script>
	</body>
</html>