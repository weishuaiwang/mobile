/*
  异步方式加载图片
*/

var lazy = Utilsq('[data-src]');
for (var i = 0; i < lazylength; i++) {
  var source = lazy[i]getAttribute(‘data-src’);

  var img = new Image();
	imgsrc = source;

	lazy[i]insertBefore(img, lazy[i]firstChild);
};
