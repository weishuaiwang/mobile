/*
  判断某一设备是否支持触摸事件
*/

var hasTouch = 'ontouchstart' in window || 'createTouch' in document;
