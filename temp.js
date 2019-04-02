var words = [];
words = 'UPEI;registration';
var words = words.split(';');
var N = words.length;

for (i = 0; i < N; i++) {
    var pageArray = [];
    var string = words[i];
    for (var p = 0; p < this.numPages; p++) {
        for (var n = 0; n < this.getPageNumWords(p); n++) {
            if (this.getPageNthWord(p, n) == words[i]) {
                pageArray.push(p);
                this.bookmarkRoot.createChild(words[i], 'pageNum = ' + p);
                break;
            }
        }
    }
}

/* Put script title here */
var words = [];

words = "bookmark01;bookmark02;bookmark03;bookmark04";
var words = words.split(";");
var N = words.length;

 for (i = 0; i < N; i++) {
    var pageArray = [];
    var string = words[i];
    for (var p = 0; p < this.numPages; p++) {
        for (var n = 0; n < this.getPageNumWords(p); n++) {
            if (this.getPageNthWord(p, n) == words[i]) {
                pageArray.push(p);
                   this.bookmarkRoot.createChild(words[i], "pageNum = " + p, p);
                break;
            }
        }
    }
}
