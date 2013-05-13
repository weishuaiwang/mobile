var Utils = {
  q : function(query) {
      if (documentquerySelectorAll) {
	 	 	 var res = documentquerySelectorAll(query);
	 	 } else {
	 	 	 var d = document,
	 	 	 a = dstyleSheets[0] || dcreateStyleSheet();
	 	 	 aaddRule(query,’f:b’);
	 	 	 for(var l=dall,b=0,c=[],f=llength;b<f;b++) {
	 	 	 	 l[b]currentStylef && cpush(l[b]);
	 	 	 	 aremoveRule(0);
	 	 	 	 var res = c;
	 	 	 }
	 	 	 return res;
	 	 }
  }
}


