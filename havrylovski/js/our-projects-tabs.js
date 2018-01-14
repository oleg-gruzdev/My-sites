
	//FOR TABS IN OUR-PROJECTS-BLOCK
$(function(){
			$('.select-projects-tabs').on('click', function(){
				var item = $(this).attr('data-tab');
				$('.select-projects-tabs-row .active-tab').removeClass('active-tab');
				$('.active-projects-box').removeClass('active-projects-box');
				$('.projects-box[data-tab="' + item + '"]').addClass('active-projects-box');
				$(this).addClass('active-tab');
			});
		});


function setPostsClick() {
	//FOR TABS IN OUR-BLOG-BLOCK
				var item = $(this).attr('data-tab');
				$('.select-blog-tabs-row .active-tab').removeClass('active-tab');
				$('.active-our-blog-container').removeClass('active-our-blog-container');
				$('.our-blog-container[data-tab="' + item + '"]').addClass('active-our-blog-container');
				$(this).addClass('active-tab');

//FOR TABS IN OUR-BLOG-BLOCK

// Расставляем записи внутри контейнера на странице блога при переключении на другую рубрику
$(function () {
			$('.select-blog-tabs').on('click', setPostsClick);
		});


		