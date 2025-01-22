$(function () {
	$(".ham").on("click", function (e) {
		e.preventDefault();

		$(".overlay").toggleClass("active");
		$("body").toggleClass("overflow-hidden");
		$(".primary-menu-wrapper").toggleClass("active");
		$(this).toggleClass("active");
	});

	$(".overlay").on("click", function (e) {
		e.preventDefault();

		$(".overlay").removeClass("active");
		$("body").removeClass("overflow-hidden");
		$(".primary-menu-wrapper").removeClass("active");
		$(".ham").removeClass("active");
	});

	$(".client-slider").slick({
		mobileFirst: true,
		slidesToShow: 2,
		slidesToScroll: 2,
		dots: true,
		appendDots: $(".client-slider-dots"),
		arrows: false,
		responsive: [
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 4,
				},
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 6,
				},
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 7,
				},
			},
		],
	});

	$(function () {
		function HandleTabContentActive(currentActive) {
			$(`.tab-content#${currentActive}`)
				.addClass("active")
				.siblings()
				.removeClass("active");

			$(".it-image").each(function () {
				if (currentActive === $(this).data("index")) {
					$(this).addClass("active").siblings().removeClass("active");
				}
			});
		}

		$(".tab-controller ul li a").each(function () {
			$(this).on("click", function (e) {
				e.preventDefault();
				var currentActive = $(this).data("target");
				console.log(currentActive);

				$(this)
					.parent("li")
					.addClass("active")
					.siblings()
					.removeClass("active");

				HandleTabContentActive(currentActive);
			});
		});
		$(".tab-controller select").on("change", function (e) {
			var currentActive = $(this).val();

			HandleTabContentActive(currentActive);
		});
	});

	/** TOC  */
	$(function () {
		const observer = new IntersectionObserver(
			function (entries) {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						$(".mobile-toc-controller").show();
					} else {
						$(".mobile-toc-controller").hide();
					}
				});
			},
			{
				threshold: 0.1,
			},
		);

		const blogs = document.querySelector(".blogs");
		if (blogs) {
			observer.observe(blogs);
		}

		const policySection = document.querySelector(".general-section");
		if (policySection) {
			observer.observe(policySection);
		}

		$(".mobile-toc-controller").on("click", function (e) {
			e.preventDefault();
			$(this).hide();
			$(".blocks-wrapper").addClass("active");
		});
		$(document).on("click", function (e) {
			if (
				!$(e.target).closest(".blocks-wrapper").length &&
				!$(e.target).closest(".mobile-toc-controller").length
			) {
				$(".blocks-wrapper").removeClass("active");
				$(".mobile-toc-controller").show();
			}
		});
	});

	/** APPLICATION FORM FILE UPLOADED VIEW */
	$(function () {
		$('input[type="file"]').each(function () {
			const inputContainer = $(this).closest(".file-uploader");
			var fileUploadedView = $(this)
				.parents(".input-field")
				.find(".file-uploaded-view");

			function RemoveFileAndActivateFileUploader() {
				fileUploadedView.hide();
				fileUploadedView.removeClass("d-flex");
				inputContainer.show();
			}

			$(this).on("change", function (e) {
				const file = e.target.files[0];
				const fileName = file.name;
				const fileType = file.type.split("/");

				fileUploadedView.find("strong").text(fileName);
				fileUploadedView
					.find("span")
					.text(
						`${fileType[fileType.length - 1]} | ${(
							file.size /
							(1024 * 1024)
						).toFixed(2)} MB`,
					);

				if (file) {
					fileUploadedView.removeClass("d-none");
					fileUploadedView.addClass("d-flex");
					inputContainer.hide();
				} else {
					RemoveFileAndActivateFileUploader();
				}
				console.log(file);
			});

			const removeBtn = fileUploadedView.find(".remove-selected-file");

			removeBtn.on("click", function (e) {
				e.preventDefault();
				inputContainer.find(`input[type="file"]`).val("");
				fileUploadedView.find("strong").text("");
				fileUploadedView.find("span").text(``);
				RemoveFileAndActivateFileUploader();
			});
		});
	});
});
