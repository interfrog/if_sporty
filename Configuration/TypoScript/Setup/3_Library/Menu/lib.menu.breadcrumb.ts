lib.menu.breadcrumb = COA
lib.menu.breadcrumb {
   10 = HMENU
   10 {
      special = rootline
      special.range = 1|-1
      1 = TMENU
      1 {
         NO = 1
         NO {
            wrapItemAndSub = <li>|</li>
         }
         CUR = 1
         CUR < .NO
         CUR {
            doNotLinkIt = 1
            wrapItemAndSub = <li class="current"><span class="title">|</span></li>
         }
      }
   }
   stdWrap.required = 1
   stdWrap.preCObject = COA
   stdWrap.preCObject {
      wrap = <li>|</li>
      10 = TEXT
      10.data = levelfield:0,nav_title // levelfield:0,title
      10.typolink.parameter.data = leveluid:0
   }
}