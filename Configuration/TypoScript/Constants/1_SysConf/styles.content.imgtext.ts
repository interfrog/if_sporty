styles.content.imgtext {
  maxW = 600
  maxWInText = 270
  linkWrap.width = 1000m
  linkWrap.height = 1000m
  linkWrap.effects =
  linkWrap.newWindow = 0
  linkWrap.lightboxEnabled = 1
  linkWrap.lightboxCssClass = fancybox
  linkWrap.lightboxRelAttribute = fancybox-group-{field:uid}
  captionSplit = 0
  imageTextSplit = 1
  emptyTitleHandling = removeAttr
  titleInLink = 1
  titleInLinkAndImg = 0
  colSpace = 25
  rowSpace = 25
  textMargin = 25
  borderColor = black
  borderThick = 1
  borderSpace = 0
  borderSelector = DIV.{$styles.content.imgtext.borderClass} DIV.csc-textpic-imagewrap .csc-textpic-image IMG, DIV.{$styles.content.imgtext.borderClass} DIV.csc-textpic-single-image IMG
  borderClass = csc-textpic-border
  separateRows = 1
  addIntextClearer = 1
}

#Modify by frontend layout
[globalVar = TSFE:page|layout=1]
styles.content.imgtext {
  maxW = 600
}
[end]
